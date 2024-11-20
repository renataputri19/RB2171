<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Models\Criterion;

class ManajemenPerubahanPemenuhan extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'I. PEMENUHAN';
    protected static ?string $navigationLabel = 'Manajemen Perubahan';
    protected static ?int $navigationSort = 1;

    // Correctly override the getTitle method
    public function getTitle(): string
    {
        return 'Manajemen Perubahan';
    }

    public $criteria; // Define a public property to hold the data

    public function mount()
    {
        // Fetch data from the `criteria` table and assign it to the public property
        $this->criteria = Criterion::where('category', 'Manajemen Perubahan - Pemenuhan')->get();
    }

    protected static string $view = 'filament.pages.manajemen-perubahan-pemenuhan';
}
