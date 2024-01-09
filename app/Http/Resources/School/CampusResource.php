<?php

namespace App\Http\Resources\School;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CampusResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'oldname' => $this->oldname,
            'campus' => $this->campus,
            'address' => $this->address,
            'is_main' => $this->is_main,
            'is_active' => $this->is_active,
            'grading' => $this->grading,
            'term' => $this->term,
            'region' => $this->region,
            'province' => $this->province,
            'municipality' => $this->municipality,
            'assigned' => $this->assigned,
            'courses' => CourseResource::collection($this->courses)
        ];
    }
}
