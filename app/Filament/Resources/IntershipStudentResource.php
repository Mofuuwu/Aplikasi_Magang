<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IntershipStudentResource\Pages;
use App\Filament\Resources\IntershipStudentResource\RelationManagers;
use App\Models\IntershipStudent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IntershipStudentResource extends Resource
{
    protected static ?string $navigationGroup = 'Kelola Data';
    protected static ?int $navigationSort = 4;
    protected static ?string $pluralModelLabel = 'Siswa Magang';
    protected static ?string $navigationLabel = 'Daftar Siswa Magang';
    protected static ?string $model = IntershipStudent::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListIntershipStudents::route('/'),
            'create' => Pages\CreateIntershipStudent::route('/create'),
            'view' => Pages\ViewIntershipStudent::route('/{record}'),
            'edit' => Pages\EditIntershipStudent::route('/{record}/edit'),
        ];
    }
}
