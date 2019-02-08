<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReportResource extends JsonResource
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
            'data-1' => $this->{'data-1'},
            'data-2' => $this->{'data-2'},
            'data-3' => $this->{'data-3'},
            'data-4' => $this->{'data-4'},
            'data-5' => $this->{'data-5'},
            'data-6' => $this->{'data-6'},
            'data-7' => $this->{'data-7'},
            'data-8' => $this->{'data-8'},
            'data-9' => $this->{'data-9'},
            'data-10' => $this->{'data-10'},
            'data-11' => $this->{'data-11'},
            'data-12' => $this->{'data-12'},
            'data-13' => $this->{'data-13'},
            'data-14' => $this->{'data-14'},
            'data-15' => $this->{'data-15'},
            'data-16' => $this->{'data-16'},
            'data-17' => $this->{'data-17'},
            'data-18' => $this->{'data-18'},
            'data-19' => $this->{'data-19'},
            'data-20' => $this->{'data-20'},
        ];
    }
}
