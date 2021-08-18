<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Route extends Model
{
    use HasFactory;

    protected $fillable = ['route_name','route_no'];
    
    protected $appends = ['salesman_summary'];
    
    protected  $visible = ['route_id','route_name','route_no','salesman_summary'];


    public function transactions(){
        return $this->hasOne(Transaction::class);
    }

    function getSalesmanSummaryAttribute() {
        return $this->transactions()->first();
    }
  
}
