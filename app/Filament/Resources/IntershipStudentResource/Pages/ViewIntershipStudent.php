<?php

namespace App\Filament\Resources\IntershipStudentResource\Pages;

use App\Filament\Resources\IntershipStudentResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewIntershipStudent extends ViewRecord
{
    protected static string $resource = IntershipStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
