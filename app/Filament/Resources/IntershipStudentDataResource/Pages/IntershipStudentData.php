<?php

namespace App\Filament\Resources\IntershipStudentDataResource\Pages;

use App\Filament\Resources\IntershipStudentDataResource;
use App\Models\IntershipStudent;
use App\Models\Mentor;
use App\Models\Rule;
use App\Models\Student;
use Filament\Resources\Pages\Page;
use Illuminate\Support\Facades\Auth;

class IntershipStudentData extends Page
{
    protected static string $resource = IntershipStudentDataResource::class;
    protected ?string $heading = 'Data Magang Anda';

    protected static string $view = 'filament.resources.intership-student-data-resource.pages.intership-student-data';

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
