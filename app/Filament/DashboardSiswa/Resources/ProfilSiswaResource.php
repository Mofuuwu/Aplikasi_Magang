<?php

namespace App\Filament\DashboardSiswa\Resources;

use App\Filament\DashboardSiswa\Resources\ProfilSiswa\Pages;
use App\Filament\DashboardSiswa\Resources\ProfilSiswaResouce\RelationManagers;
use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfilSiswaResouce extends Resource
{
    
    protected static ?bool $breadcrumbs = false;
    protected static ?int $navigationSort = 1;
    protected static ?string $pluralModelLabel = 'Profil Anda';
    protected static ?string $navigationLabel = 'Profil Anda';
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ])
            ;
    }

    public static function table(Table $table): Table
    {
        return $table
            ->paginated(false);
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
            'index' => Pages\Index::route('/'),
            // 'create' => Pages\CreateStudentProfile::route('/create'),
            // 'edit' => Pages\EditStudentProfile::route('/{record}/edit'),
        ];
    }
}
