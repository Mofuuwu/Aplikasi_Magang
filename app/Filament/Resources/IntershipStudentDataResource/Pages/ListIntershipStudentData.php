<?php

namespace App\Filament\Resources\IntershipStudentDataResource\Pages;

use App\Filament\Resources\IntershipStudentDataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIntershipStudentData extends ListRecords
{
    protected static string $resource = IntershipStudentDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
