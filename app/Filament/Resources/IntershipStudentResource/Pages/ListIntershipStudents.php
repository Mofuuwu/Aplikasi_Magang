<?php

namespace App\Filament\Resources\IntershipStudentResource\Pages;

use App\Filament\Resources\IntershipStudentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIntershipStudents extends ListRecords
{
    protected static string $resource = IntershipStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
