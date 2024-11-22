<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Services\PenilaianPilarService;

class PenilaianPilar extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-clipboard';
    protected static ?string $navigationGroup = 'Dashboard';
    protected static ?string $navigationLabel = 'Penilaian Pilar Pemenuhan';
    protected static ?string $title = 'Penilaian Pilar Pemenuhan';

    public $data;

    public function mount(PenilaianPilarService $service)
    {
        $this->data = $service->getPenilaianData();
    }
    

    protected static string $view = 'filament.pages.penilaian-pilar';
}

