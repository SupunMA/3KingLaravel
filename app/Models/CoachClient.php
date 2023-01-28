<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoachClient extends Model
{
    use HasFactory;

    protected $primaryKey = 'taskID';
    protected $table = 'coachClient';

    protected $fillable = [
        'coachID',
        'clientID',
        'slotID',
        'date'
    ];
}