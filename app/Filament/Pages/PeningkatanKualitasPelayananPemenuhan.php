<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class PeningkatanKualitasPelayananPemenuhan extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'I. PEMENUHAN';
    protected static ?string $navigationLabel = 'Peningkatan Kualitas Pelayanan Publik';
    protected static ?int $navigationSort = 6;

    // Correctly override the getTitle method
    public function getTitle(): string
    {
        return 'Peningkatan Kualitas Pelayanan Publik';
    }

    protected static string $view = 'filament.pages.peningkatan-kualitas-pelayanan-pemenuhan';
}