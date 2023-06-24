<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $table='customer';

    protected $fillable = [
        'id',
        'name',
        'phone',
        'price',
        'subscribe',
        'statue',
        'expiredate',
        'user_id',
        'created_at',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
