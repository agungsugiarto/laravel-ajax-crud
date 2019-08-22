<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Contact extends JsonResource
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
            'id' => $this->id,
            'nik' => $this->nik,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'jk' => $this->jk,
            'tgl_lahir' => $this->tgl_lahir,
            'image' => $this->image,
            'alamat' => $this->alamat
        ];
    }
}
