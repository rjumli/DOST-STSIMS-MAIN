<?php

namespace App\Http\Resources\School\Search;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SchoolResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $name = ucwords(strtolower($this->school->name));
        $campus = ($this->is_main) ? '' : ' - '.ucwords(strtolower($this->campus)) ;
        return [
            'id' => $this->id,
            'name' => $name.$campus,
            'courses' => CourseResource::collection($this->courses),
            'term' => $this->term->name,
            'region' => $this->assigned_region
        ];
    }
}
