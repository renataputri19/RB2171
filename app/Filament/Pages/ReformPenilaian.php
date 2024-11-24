<?php

namespace App\Filament\Pages;
use App\Services\PenilaianReformService;


use Filament\Pages\Page;

class ReformPenilaian extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-clipboard';
    protected static ?string $navigationGroup = 'Dashboard';
    protected static ?string $navigationLabel = 'Penilaian Pilar Reform';
    protected static ?string $title = 'Penilaian Pilar Reform';



    public $data;

    // Fetch data from the service on mount
    public function mount(PenilaianReformService $service)
    {
        $this->data = $service->getReformPenilaianData();
    }

    protected static string $view = 'filament.pages.reform-penilaian';
}
