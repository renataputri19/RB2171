<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Criterion;

class DashboardController extends Controller
{
    public function index()
    {
        // Categories with their bobot
        $categories = [
            ['category' => 'Penyusunan Tim Kerja', 'bobot' => 0.50],
            ['category' => 'Rencana Pembangunan Zona Integritas', 'bobot' => 1.00],
            ['category' => 'Pemantauan dan Evaluasi Pembangunan WBK/WBBM', 'bobot' => 1.00],
            ['category' => 'Perubahan pola pikir dan budaya kerja', 'bobot' => 1.50],
        ];
    
        $totalBobot = 0;
        $totalNilaiUnit = 0;
        $totalNilaiTpi = 0;
    
        foreach ($categories as &$category) {
            $criteria = Criterion::where('category', $category['category'])->get();
    
            // Calculate averages while treating null as 0
            $avgUnit = $criteria->map(function ($criterion) {
                return $criterion->nilai_unit ?? 0;
            })->avg();
    
            $avgTpi = $criteria->map(function ($criterion) {
                return $criterion->nilai_tpi ?? 0;
            })->avg();
    
            // Calculate weighted values
            $category['nilai_unit'] = $avgUnit * $category['bobot'];
            $category['nilai_tpi'] = $avgTpi * $category['bobot'];
    
            // Sum totals
            $totalBobot += $category['bobot'];
            $totalNilaiUnit += $category['nilai_unit'];
            $totalNilaiTpi += $category['nilai_tpi'];
        }
    
        // Pass data to the view
        return view('dashboard', [
            'categories' => $categories,
            'totalBobot' => $totalBobot,
            'totalNilaiUnit' => $totalNilaiUnit,
            'totalNilaiTpi' => $totalNilaiTpi,
        ]);
    }
    
}
