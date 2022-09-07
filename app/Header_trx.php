<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header_trx extends Model
{
    protected $table = 'trx_header';
    protected $fillable = [
        'trx_number', 'trx_date', 'user_insert', 'status'
    ];
}
