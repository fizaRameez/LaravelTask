<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['route_id','route_no', 'total_amount','total_hour'];

    protected  $visible = ['total_amount','total_hour'];

}
