<?php

namespace App\Filament\DashboardSiswa\Resources\ProfilSiswa\Pages;


use App\Filament\DashboardSiswa\Resources\ProfilSiswaResouce;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStudentProfiles extends ListRecords
{
    protected static string $resource = ProfilSiswaResouce::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
