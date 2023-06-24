<?php

namespace App\Models\Model;

use App\Models\model\product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    public function product(){
        return $this->belongsTo(product::class);
    } 
}
