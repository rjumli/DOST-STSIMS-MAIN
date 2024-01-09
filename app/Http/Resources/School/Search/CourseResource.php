<?php

namespace App\Http\Resources\School\Search;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'course' => $this->course->name,
            'course_id' => $this->course->id,
        ];
    }
}
