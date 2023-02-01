<?php

namespace App\Models;

use CodeIgniter\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'id';
    
    protected $allowedFields = [
        'firstname',
        'lastname',
        'phonenumber',
        'email',
        'departuredate',
        'arrivaldate',
        'no_guest',
        'roomtype'
    ];
}
