<?php

namespace App\Filament\DashboardSiswa\Resources\TataTertib\Pages;

use App\Filament\DashboardSiswa\Resources\TataTertibResource;
use App\Models\IntershipStudent;
use App\Models\Mentor;
use App\Models\Rule;
use App\Models\Student;
use Filament\Resources\Pages\Page;
use Illuminate\Support\Facades\Auth;

class TataTertib extends Page
{
    protected static string $resource = TataTertibResource::class;
    protected ?string $heading = 'Data Magang Anda';

    protected static string $view = 'filament.pages.siswa.tata_tertib';

    public $dataMagangSiswa;
    public $dataSiswa;
    public $work_unit;
    public $generalRules;
    public $unitRules;
    public function mount()
    {
        $this->dataSiswa = Student::where('user_id', Auth::user()->id)->first();
        $this->dataMagangSiswa = $this->dataSiswa 
            ? IntershipStudent::where('student_id', $this->dataSiswa->id)->first() 
            : null;
        $this->work_unit = $this->dataMagangSiswa->work_unit_id;

        $this->generalRules = Rule::where('type', 'general')->get();
        $this->unitRules = Rule::where('work_unit_id', $this->work_unit)->get();
    }
}