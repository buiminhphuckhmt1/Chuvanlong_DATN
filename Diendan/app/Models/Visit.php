<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    public $timestamps=false;
    protected $fillable=[
        'ip_address', 'date_visited'
    ];
    protected $primarykey='id_visit';
    protected $table='visit';
}
