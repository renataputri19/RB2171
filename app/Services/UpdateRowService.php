<?php

namespace App\Services;

use App\Models\Criterion;

class UpdateRowService
{
    public static function update($id, $field, $value)
    {
        $criterion = Criterion::find($id);

        if ($criterion) {
            $criterion->$field = $value;

            // Dynamically calculate scores based on options
            if ($field === 'jawaban_unit') {
                $criterion->nilai_unit = ScoringService::calculateScore($value, $criterion->pilihan_jawaban);
            } elseif ($field === 'jawaban_tpi') {
                $criterion->nilai_tpi = ScoringService::calculateScore($value, $criterion->pilihan_jawaban);
            }

            $criterion->save();
            return 'Row updated successfully!';
        }

        return 'Row not found!';
    }
}
