<?php

namespace App\Http\Resources\Dropdown;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AgencyResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'value' => $this->id,
            'id' => $this->id,
            'name' => $this->name
        ];
    }
}
