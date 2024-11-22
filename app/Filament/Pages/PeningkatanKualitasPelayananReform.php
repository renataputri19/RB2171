<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class PeningkatanKualitasPelayananReform extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'II. REFORM';
    protected static ?string $navigationLabel = 'Peningkatan Kualitas Pelayanan Publik';
    protected static ?int $navigationSort = 6;

    // Correctly override the getTitle method
    public function getTitle(): string
    {
        return 'Peningkatan Kualitas Pelayanan Publik - REFORM';
    }

    protected static string $view = 'filament.pages.peningkatan-kualitas-pelayanan-reform';
}
