<?php

namespace App;
use App\Catergory;  
use App\Seller;  
use App\Transection;  


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   
    const AVAILABLE_PRODUCT = 'available';
    const UNAVAILABLE_PRODUCT = 'unavailable';
    protected $fillable = [
        'name',
        'description',
        'quantity',
        'status',
        'image',
        'seller_id',

    ];

    public function isAvailable(){
        return $this->status == Product::AVAILABLE_PRODUCT;
    }

    public function seller(){
        return $this->belongsTo(Seller::class);
    }

    public function transections(){
        return $this->hasMany(Transection::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
        
    }
}
