<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
protected $fillable = [
'name','details','stocks','discount','price'
];
    public function review() {

        return $this->hasMany(Review::class);
    }
}
