<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetails extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'order_id', 'product_id', 'product_name','product_price','product_sales_quantity'
    ];
    protected $primaryKey = 'order_details_id';
 	protected $table = 'order_details';

 	public function product(){
 		return $this->belongsTo('App\Models\Product','product_id');
 	}
}
