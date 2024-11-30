<?php

namespace App\Filament\Resources\IntershipStudentResource\Pages;

use App\Filament\Resources\IntershipStudentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIntershipStudent extends EditRecord
{
    protected static string $resource = IntershipStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
