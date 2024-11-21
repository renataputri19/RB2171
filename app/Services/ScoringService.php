<?php

namespace App\Services;

class ScoringService
{
    public static function calculateScore($answer, $options)
    {
        switch ($options) {
            case 'Ya/Tidak':
                return strtolower($answer) === 'ya' ? 1 : 0;

            case 'A/B/C':
                return match (strtoupper($answer)) {
                    'A' => 1,
                    'B' => 0.5,
                    default => 0,
                };

            case 'A/B/C/D':
                return match (strtoupper($answer)) {
                    'A' => 1,
                    'B' => 0.67,
                    'C' => 0.33,
                    default => 0,
                };

            case 'A/B/C/D/E':
                return match (strtoupper($answer)) {
                    'A' => 1,
                    'B' => 0.75,
                    'C' => 0.5,
                    'D' => 0.25,
                    default => 0,
                };

            default:
                return 0; // Default score
        }
    }
}
