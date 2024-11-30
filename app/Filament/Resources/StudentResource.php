<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\Student;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentResource extends Resource
{
    protected static ?string $navigationGroup = 'Kelola Data';
    
    protected static ?string $pluralModelLabel = 'Siswa';
    protected static ?string $navigationLabel = 'Daftar Siswa';
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                ->disabledOn('edit'),
                Forms\Components\TextInput::make('class')
                ->disabledOn('edit'),
                Forms\Components\TextInput::make('major_id')
                ->disabledOn('edit'),
                Forms\Components\TextInput::make('school_id')
                ->disabledOn('edit'),
                Forms\Components\TextInput::make('school_id')
                ->disabledOn('edit'),
                Forms\Components\TextInput::make('phone_number')
                ->disabledOn('edit'),
                Forms\Components\TextInput::make('address')
                ->disabledOn('edit'),
                Forms\Components\TextInput::make('profile_photo')
                ->disabledOn('edit'),
                Forms\Components\TextInput::make('father_name')
                ->disabledOn('edit'),
                Forms\Components\TextInput::make('father_job')
                ->disabledOn('edit'),
                Forms\Components\TextInput::make('mother_name')
                ->disabledOn('edit'),
                Forms\Components\TextInput::make('mother_job')
                ->disabledOn('edit'),
                Forms\Components\Select::make('is_active')
                ->options([
                    '1' => 'Aktif',
                    '0' => 'Tidak Aktif'
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name'),
                Tables\Columns\TextColumn::make('class'),
                Tables\Columns\TextColumn::make('major.name'),
                Tables\Columns\TextColumn::make('school.name'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ]);
            // ->bulkActions([
            //     Tables\Actions\BulkActionGroup::make([
            //         Tables\Actions\DeleteBulkAction::make(),
            //     ]),
            // ]);
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
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
    
}
