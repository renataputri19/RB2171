<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class PenguatanPengawasanPemenuhan extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'I. PEMENUHAN';
    protected static ?string $navigationLabel = 'Penguatan Pengawasan';
    protected static ?int $navigationSort = 5;

    // Correctly override the getTitle method
    public function getTitle(): string
    {
        return 'Penguatan Pengawasan';
    }

    protected static string $view = 'filament.pages.penguatan-pengawasan-pemenuhan';
}
