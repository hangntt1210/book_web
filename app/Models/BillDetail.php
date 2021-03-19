<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    //use HasFactory;
    protected $table = "bill_detail";

    public function product(){
    	return $this->belongTo('App\Product','id_product','id');
    }

    public function bill(){
    	return $this->belongTo('App\Bill','id_bill','id');
    }
}
