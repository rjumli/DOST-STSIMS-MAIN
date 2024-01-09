<?php

namespace App\Http\Resources\School;

use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IndexResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $hashids = new Hashids('krad',10);
        $code = $hashids->encode($this->id);

        return [
            'id' => $this->id,
            'code' => $code,
            'name' => $this->name,
            'avatar' => $this->avatar,
            'shortcut' => $this->shortcut,
            'class' => $this->class,
            'campuses' => CampusResource::collection($this->campuses),
            'is_active' => $this->is_active,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
