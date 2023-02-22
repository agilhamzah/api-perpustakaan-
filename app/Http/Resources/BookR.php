<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookR extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'name_book' => $this->name_book,
            'summary'=> $this->summary,
            'publisher'=> $this->publisher,
            'pages'=> $this->pages,
            'qty'=> $this->qty,
            'date_release'=> $this->date_release,
            'created_at' => date_format($this->created_at, 'd-m-Y H:i:s')
        ];
    }
}
