<?php

namespace App\Filament\Resources\StudentProfileResource\Pages;

use App\Filament\Resources\StudentProfileResource;
use Filament\Resources\Pages\Page;
use App\Models\Student; // Import model Student
use Illuminate\Support\Facades\Auth;

class StudentProfile extends Page
{
    protected ?string $heading = 'Profil Anda';
    protected static string $resource = StudentProfileResource::class;

    protected static bool $breadcrumbs = false;
    protected static string $view = 'filament.resources.student-profile-resource.pages.student-profile';

    public $userName;
    public $studentData; // Properti untuk data siswa

    // Metode mount() untuk menginisialisasi data
    public function mount()
    {

        $this->studentData = Student::where('user_id', Auth::id())->first();

    }
}
