<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class PlacementLocation extends Model
{
    use HasFactory, Notifiable;
    protected $guarded = [];
    public function work_units() {
        return $this->hasMany(WorkUnit::class);
    }
}
