<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class JoinResource extends Resource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'mobile'=> $this->mobile,
            'created_at' => has_method($this->created_at),
        ];
    }
}
