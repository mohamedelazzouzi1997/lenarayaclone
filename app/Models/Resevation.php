<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resevation extends Model
{
    use HasFactory;

    protected $fillable = [
        'full name',
        'email',
        'phone',
        'date',
        'time',
        'number_of_persons',
        'message',
        'origin',
    ];
}