<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MVessel extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this -> id,
            'vessel_name' => $this -> vessel_name,
            'voyage_in' => $this -> voyage_in,
            'voyage_out' => $this -> voyage_out,
            'eta' => date('c', strtotime($this -> eta)),
            'etb' => date('c', strtotime($this -> etb)),
            'etd' => $this -> etd ? date('c', strtotime($this -> etd)) : null,
            'terminal' => $this -> terminal,
            'name' => $this -> name
        ];
    }
}
