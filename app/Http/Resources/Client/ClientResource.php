<?php

namespace App\Http\Resources\Client;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
class ClientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'client_id' => $this->id,
            'first_name' => $this->first_name,
            'last_name'=> $this->last_name,
            'middle_name' => $this->middle_name,
            'category_id' => new ClientCategoryResource($this->category),
            'company_name' => $this->company_name,
            'series_pass' => $this->series_pass,
            'number_pass' => $this->number_pass,
            'address' => $this->address,
            'phone' => $this->phone,
        ];
    }
}
