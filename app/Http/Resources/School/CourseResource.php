<?php

namespace App\Http\Resources\School;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
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
            'course' => $this->course->name,
            'school' => $this->school,
            'certification' => $this->certification,
            'years' => $this->years,
            'validity' => $this->validity,
            'type' => $this->type,
            'school_id' => $this->school_id,
            'is_active' => $this->is_active,
        ];
    }
}
