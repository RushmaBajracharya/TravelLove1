<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onewayoutboundticket extends Model
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
        'no_of_tickets',
        'no_of_adults',
        'no_of_child',
        'no_of_infant',
        'passport_number',
        'passport_validity',
        'timestamps',
    ];
}
