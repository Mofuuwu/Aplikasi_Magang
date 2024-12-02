<?php

namespace App\Filament\DashboardSiswa\Resources\ProfilSiswa\Pages;


use App\Filament\DashboardSiswa\Resources\ProfilSiswaResouce;
use Filament\Resources\Pages\Page;
use App\Models\Student; 
use Illuminate\Support\Facades\Auth;

class Index extends Page
{
    protected ?string $heading = 'Profil Anda';
    protected static string $resource = ProfilSiswaResouce::class;

    protected static bool $breadcrumbs = false;
    protected static string $view = 'filament.siswa.pages.profil_siswa';

    public $userName;
    public $studentData; // Properti untuk data siswa

    // Metode mount() untuk menginisialisasi data
    public function mount()
    {

        $this->studentData = Student::where('user_id', Auth::id())->first();

    }
}
