<?php

namespace App\Filament\DashboardSiswa\Resources\ProfilSiswa\Pages;
use App\Filament\DashboardSiswa\Resources\ProfilSiswaResouce;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStudentProfile extends EditRecord
{
    protected static string $resource = ProfilSiswaResouce::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
