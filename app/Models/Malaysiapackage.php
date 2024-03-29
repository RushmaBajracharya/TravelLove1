<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Malaysiapackage extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'lastname',
        'firstname',
        'phone',
        'email',
        'departure_day',
        'timestamps',
    ];
}
