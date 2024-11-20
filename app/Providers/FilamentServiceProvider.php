<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationItem;
use Filament\Navigation\NavigationGroup;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        Filament::navigation(function () {
            return [
                // Parent: A. PENGUNGKIT
                NavigationGroup::make('A. PENGUNGKIT')
                    ->items([
                        // Child: I. PEMENUHAN
                        NavigationGroup::make('I. PEMENUHAN')
                            ->items([
                                NavigationItem::make('1. MANAJEMEN PERUBAHAN')
                                    ->url('/manajemen-perubahan/pemenuhan')
                                    ->icon('heroicon-o-document-text'),
                                NavigationItem::make('2. PENATAAN TATALAKSANA')
                                    ->url('/penataan-tatalaksana/pemenuhan')
                                    ->icon('heroicon-o-document-text'),
                                NavigationItem::make('3. PENATAAN SISTEM MANAJEMEN SDM APARATUR')
                                    ->url('/penataan-sdm/pemenuhan')
                                    ->icon('heroicon-o-document-text'),
                                NavigationItem::make('4. PENGUATAN AKUNTABILITAS')
                                    ->url('/penguatan-akuntabilitas/pemenuhan')
                                    ->icon('heroicon-o-document-text'),
                                NavigationItem::make('5. PENGUATAN PENGAWASAN')
                                    ->url('/penguatan-pengawasan/pemenuhan')
                                    ->icon('heroicon-o-document-text'),
                                NavigationItem::make('6. PENINGKATAN KUALITAS PELAYANAN PUBLIK')
                                    ->url('/peningkatan-kualitas-pelayanan/pemenuhan')
                                    ->icon('heroicon-o-document-text'),
                            ]),

                        // Child: II. REFORM
                        NavigationGroup::make('II. REFORM')
                            ->items([
                                NavigationItem::make('1. MANAJEMEN PERUBAHAN')
                                    ->url('/manajemen-perubahan/reform')
                                    ->icon('heroicon-o-document-text'),
                                NavigationItem::make('2. PENATAAN TATALAKSANA')
                                    ->url('/penataan-tatalaksana/reform')
                                    ->icon('heroicon-o-document-text'),
                                NavigationItem::make('3. PENATAAN SISTEM MANAJEMEN SDM APARATUR')
                                    ->url('/penataan-sdm/reform')
                                    ->icon('heroicon-o-document-text'),
                                NavigationItem::make('4. PENGUATAN AKUNTABILITAS')
                                    ->url('/penguatan-akuntabilitas/reform')
                                    ->icon('heroicon-o-document-text'),
                                NavigationItem::make('5. PENGUATAN PENGAWASAN')
                                    ->url('/penguatan-pengawasan/reform')
                                    ->icon('heroicon-o-document-text'),
                                NavigationItem::make('6. PENINGKATAN KUALITAS PELAYANAN PUBLIK')
                                    ->url('/peningkatan-kualitas-pelayanan/reform')
                                    ->icon('heroicon-o-document-text'),
                            ]),
                    ]),
            ];
        });
    }
}
