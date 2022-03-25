<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','description','price','category','date_available','is_available','lender_id'];


    public function lender(){
        return $this->belongsTo('App\product');
    }

}
