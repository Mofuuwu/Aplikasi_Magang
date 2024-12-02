<?php

namespace App\Filament\DashboardSiswa\Resources\Logbook\Pages;

use App\Filament\DashboardSiswa\Resources\LogbookResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLogbooks extends ListRecords
{
    protected static string $resource = LogbookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
