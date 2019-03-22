<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
    public function toArray($request)
    {
        //Returns everything by default
        //return parent::toArray($request);

        //Returns specified DB column fields
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
        ];
    }

    public function with($request){
        return[
            'version' => '1.0.0',
            'author_url' => url('http://torressam333.x10host.com'), 
        ];
    }
}
