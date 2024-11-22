<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Services\PenilaianPilarService;

class Nilai extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-clipboard';
    protected static ?string $navigationGroup = 'Dashboard';
    protected static ?string $navigationLabel = 'Nilai';
    protected static ?string $title = 'Nilai';

    public $data;

    public function mount(PenilaianPilarService $service)
    {
        $this->data = $service->getPenilaianData();
    }

    protected static string $view = 'filament.pages.nilai';
}
