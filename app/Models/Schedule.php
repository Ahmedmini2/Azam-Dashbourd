<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'date',
        'prop',
        'depar',
        'tin',
        'tout',
        'quan',
        'sname',
        'pick',
        'address',
        
    ];
}
