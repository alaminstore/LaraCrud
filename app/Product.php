<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     //protected $table = 'some_name';
     //protected $table = 'products';
     protected $fillable =[
         'product_name','product_code','details','logo'
     ];
}
