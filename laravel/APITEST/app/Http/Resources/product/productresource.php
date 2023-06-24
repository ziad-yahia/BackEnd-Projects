<?php

namespace App\Http\Resources\product;

use Illuminate\Http\Resources\Json\JsonResource;

class productresource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name'=>$this->name,
            'detail'=>$this->detail,    
            'price'=>$this->price,
            'stock'=>$this->stock ==0 ? 'Out Of Stock' : $this->stock,
            'discount'=>round((1-($this->discount/100)) * $this->discount,2),
            'rating'=>$this->reviews->count() > 0 ? round($this->reviews->sum('star')/$this->reviews->count(),2) : 'No Ratins Yet' ,
            'href'=>[
                'reviews'=>route('reviews.index',$this->id)
            ]
        ];
        //return parent::toArray($request);
    }
}
