<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onewaydomesticticket extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'going_from',
        'going_to',
        'departure_day',
        'lastname',
        'firstname',
        'phone',
        'status',
        'no_of_tickets',
        'passport_number',
        'passport_validity',
        'timestamps',
    ];
}
