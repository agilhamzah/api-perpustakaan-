<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransaksiR extends JsonResource
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
            'id_user' => $this->id_user,
            'nama_transaksi' => $this->nama_transaksi,
            'keterangan'=> $this->keterangan,
            'total_harga'=> $this->total_harga,
            'total_bayar'=> $this->total_bayar,
            'kembalian'=> $this->kembalian,
            'created_at' => date_format($this->created_at, 'd-m-Y H:i:s')
        ];
    }
}
