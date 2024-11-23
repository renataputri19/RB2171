<?php

namespace App\Services;

use App\Models\Criterion;
use App\Services\ScoringService;

class UpdateRowService
{
    public static function update($id, $field, $value)
    {
        $criterion = Criterion::find($id);

        if ($criterion) {
            // Handle both numeric and categorical fields dynamically
            $criterion->$field = is_numeric($value) && !in_array($criterion->pilihan_jawaban, ['Ya/Tidak', 'A/B/C', 'A/B/C/D', 'A/B/C/D/E'])
                ? (float) $value
                : $value;

            // Save the new value immediately to ensure calculations use the latest data
            $criterion->save();

            // Check if this is a "Jumlah" field that impacts a percentage field
            if (str_contains($criterion->penilaian, 'Jumlah')) {
                self::updatePercentageFields($criterion->category);
            } else {
                // Dynamically calculate scores for regular fields
                if ($field === 'jawaban_unit' || $field === 'jawaban_tpi') {
                    if ($criterion->pilihan_jawaban === '%') {
                        // Automate "jawaban" for percentages
                        $automatedValues = self::automatePercentageJawaban($criterion);

                        if ($field === 'jawaban_unit') {
                            $criterion->jawaban_unit = $automatedValues['jawaban_unit'];
                            $criterion->nilai_unit = $criterion->jawaban_unit > 1 ? 1 : $criterion->jawaban_unit; // Cap at 1
                        }

                        if ($field === 'jawaban_tpi') {
                            $criterion->jawaban_tpi = $automatedValues['jawaban_tpi'];
                            $criterion->nilai_tpi = $criterion->jawaban_tpi > 1 ? 1 : $criterion->jawaban_tpi; // Cap at 1
                        }
                    } else {
                        // Handle regular scoring using ScoringService
                        $criterion->{'nilai_' . ($field === 'jawaban_unit' ? 'unit' : 'tpi')} =
                            ScoringService::calculateScore($value, $criterion->pilihan_jawaban);
                    }
                }
            }

            // Save the recalculated values
            $criterion->save();

            return 'Row updated successfully!';
        }

        return 'Row not found!';
    }

    private static function updatePercentageFields($category)
    {
        // Update all percentage fields in this category
        $percentageCriteria = Criterion::where('category', $category)
            ->where('pilihan_jawaban', '%')
            ->get();

        foreach ($percentageCriteria as $criterion) {
            $automatedValues = self::automatePercentageJawaban($criterion);

            // Update jawaban_unit and jawaban_tpi
            $criterion->jawaban_unit = $automatedValues['jawaban_unit'];
            $criterion->jawaban_tpi = $automatedValues['jawaban_tpi'];

            // Update nilai_unit and nilai_tpi based on the calculated jawaban
            if ($criterion->jawaban_unit !== null) {
                $criterion->nilai_unit = $criterion->jawaban_unit > 1 ? 1 : $criterion->jawaban_unit; // Cap at 1
            }
            if ($criterion->jawaban_tpi !== null) {
                $criterion->nilai_tpi = $criterion->jawaban_tpi > 1 ? 1 : $criterion->jawaban_tpi; // Cap at 1
            }

            $criterion->save();
        }
    }

    private static function automatePercentageJawaban($criterion)
    {
        if ($criterion->penilaian === 'a. Agen perubahan telah membuat perubahan yang konkret di Instansi (dalam 1 tahun)') {
            // Fetch related values
            $jumlahAgenUnit = (float) Criterion::where('category', $criterion->category)
                ->where('penilaian', '- Jumlah Agen Perubahan')
                ->value('jawaban_unit') ?? 0;

            $jumlahPerubahanUnit = (float) Criterion::where('category', $criterion->category)
                ->where('penilaian', '- Jumlah Perubahan yang dibuat')
                ->value('jawaban_unit') ?? 0;

            $jumlahAgenTpi = (float) Criterion::where('category', $criterion->category)
                ->where('penilaian', '- Jumlah Agen Perubahan')
                ->value('jawaban_tpi') ?? 0;

            $jumlahPerubahanTpi = (float) Criterion::where('category', $criterion->category)
                ->where('penilaian', '- Jumlah Perubahan yang dibuat')
                ->value('jawaban_tpi') ?? 0;

            // Calculate jawaban_unit
            $jawabanUnit = $jumlahAgenUnit > 0 ? round($jumlahPerubahanUnit / $jumlahAgenUnit, 2) : null;

            // Calculate jawaban_tpi
            $jawabanTpi = $jumlahAgenTpi > 0 ? round($jumlahPerubahanTpi / $jumlahAgenTpi, 2) : null;

            return [
                'jawaban_unit' => $jawabanUnit,
                'jawaban_tpi' => $jawabanTpi,
            ];
        }

        if ($criterion->penilaian === 'b. Perubahan yang dibuat Agen Perubahan telah terintegrasi dalam sistem manajemen') {
            // Fetch related values
            $jumlahPerubahanUnit = (float) Criterion::where('category', $criterion->category)
                ->where('penilaian', '- Jumlah Perubahan yang dibuat Agen Perubahan')
                ->value('jawaban_unit') ?? 0;

            $integratedChangesUnit = (float) Criterion::where('category', $criterion->category)
                ->where('penilaian', '- Jumlah Perubahan yang telah diintegrasikan dalam sistem manajemen')
                ->value('jawaban_unit') ?? 0;

            $jumlahPerubahanTpi = (float) Criterion::where('category', $criterion->category)
                ->where('penilaian', '- Jumlah Perubahan yang dibuat Agen Perubahan')
                ->value('jawaban_tpi') ?? 0;

            $integratedChangesTpi = (float) Criterion::where('category', $criterion->category)
                ->where('penilaian', '- Jumlah Perubahan yang telah diintegrasikan dalam sistem manajemen')
                ->value('jawaban_tpi') ?? 0;

            // Calculate jawaban_unit
            $jawabanUnit = $jumlahPerubahanUnit > 0 ? round($integratedChangesUnit / $jumlahPerubahanUnit, 2) : null;

            // Calculate jawaban_tpi
            $jawabanTpi = $jumlahPerubahanTpi > 0 ? round($integratedChangesTpi / $jumlahPerubahanTpi, 2) : null;

            return [
                'jawaban_unit' => $jawabanUnit,
                'jawaban_tpi' => $jawabanTpi,
            ];
        }
        

        // Pelanggaran Disiplin Pegawai
        if ($criterion->penilaian === 'a. Penurunan pelanggaran disiplin pegawai') {
            // Fetch related values for Unit
            $pelanggaranSebelumnyaUnit = (float) Criterion::where('category', $criterion->category)
                ->where('penilaian', '- Jumlah pelanggaran tahun sebelumnya')
                ->value('jawaban_unit') ?? 0;

            $pelanggaranTahunIniUnit = (float) Criterion::where('category', $criterion->category)
                ->where('penilaian', '- Jumlah pelanggaran tahun ini')
                ->value('jawaban_unit') ?? 0;

            // Fetch related values for TPI
            $pelanggaranSebelumnyaTpi = (float) Criterion::where('category', $criterion->category)
                ->where('penilaian', '- Jumlah pelanggaran tahun sebelumnya')
                ->value('jawaban_tpi') ?? 0;

            $pelanggaranTahunIniTpi = (float) Criterion::where('category', $criterion->category)
                ->where('penilaian', '- Jumlah pelanggaran tahun ini')
                ->value('jawaban_tpi') ?? 0;

            // Initialize the result
            $result = [
                'jawaban_unit' => null,
                'jawaban_tpi' => null,
            ];

            // Calculate jawaban_unit if related Unit values are present
            if ($pelanggaranSebelumnyaUnit !== null && $pelanggaranTahunIniUnit !== null) {
                if ($pelanggaranSebelumnyaUnit == 0 && $pelanggaranTahunIniUnit == 0) {
                    $result['jawaban_unit'] = 1; // 100% if no violations in both years
                } else {
                    $percentageReductionUnit = ($pelanggaranSebelumnyaUnit > 0)
                        ? max(0, min(1, ($pelanggaranSebelumnyaUnit - $pelanggaranTahunIniUnit) / $pelanggaranSebelumnyaUnit))
                        : 0;
                    $result['jawaban_unit'] = round($percentageReductionUnit, 2);
                }
            }

            // Calculate jawaban_tpi if related TPI values are present
            if ($pelanggaranSebelumnyaTpi !== null && $pelanggaranTahunIniTpi !== null) {
                if ($pelanggaranSebelumnyaTpi == 0 && $pelanggaranTahunIniTpi == 0) {
                    $result['jawaban_tpi'] = 1; // 100% if no violations in both years
                } else {
                    $percentageReductionTpi = ($pelanggaranSebelumnyaTpi > 0)
                        ? max(0, min(1, ($pelanggaranSebelumnyaTpi - $pelanggaranTahunIniTpi) / $pelanggaranSebelumnyaTpi))
                        : 0;
                    $result['jawaban_tpi'] = round($percentageReductionTpi, 2);
                }
            }

            return $result;
        }





        return [
            'jawaban_unit' => null, // Default null for unsupported cases
            'jawaban_tpi' => null,
        ];
    }
}
