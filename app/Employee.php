<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';
    protected $fillable = [
        'name', 'date_of_birth', 'gender', 'employee_status', 'employee_number', 'departement', 'address', 'phone'
    ];
}
