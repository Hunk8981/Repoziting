<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";
    
    protected $fillable =[
        'id',
        'name',
        'creaeted_at',
        'updated_at',
    ];

    public function Product(){
        return $this->belongsTo(Product::class,'id', 'id_cat');
    }
}