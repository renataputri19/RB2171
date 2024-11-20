<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class PenataanTatalaksanaReform extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'II. REFORM';
    protected static ?string $navigationLabel = 'Penataan Tatalaksana';
    protected static ?int $navigationSort = 2;

    // Correctly override the getTitle method
    public function getTitle(): string
    {
        return 'Penataan Tatalaksana';
    }

    protected static string $view = 'filament.pages.penataan-tatalaksana-reform';
}
