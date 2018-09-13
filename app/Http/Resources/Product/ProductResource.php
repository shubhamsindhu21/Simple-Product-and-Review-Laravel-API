<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [

'name'=>$this->name,
'description'=>$this->detail,
'price'=>$this->price,
'stock'=>$this->stock,
'discount'=>$this->discount,

'totalPrice'=>round((1-($this->discount/100))*$this->price,2),
//7/100=0.07
// 1-0.07=0.93
// 0.93*price
'rating' => round($this->review->sum('star')/$this->review->count(),2), //rating sum divided by the no of rating

'href'=>[
    'reviews'=>route('reviews.index',$this->id)// shows some link to the api
]

        ];
    }
}
