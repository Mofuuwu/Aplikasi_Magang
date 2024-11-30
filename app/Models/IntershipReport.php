<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IntershipReport extends Model
{
    use HasFactory, Notifiable;
    protected $guarded = [];
    public function intership_student() {
        return $this->belongsTo(IntershipStudent::class, 'intership_student_id' );
    }
}


