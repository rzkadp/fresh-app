<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventory';
    protected $fillable = [
        'item_code', 'description', 'qty', 'uom', 'import_date', 'status'
    ];
}
