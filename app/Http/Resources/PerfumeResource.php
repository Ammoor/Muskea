<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PerfumeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "perfumeID" => $this->id,
            "perfumeName" => $this->name,
            "perfumeImage" => $this->image_path,
            "perfumePrice" => $this->price,
            "perfumeOldPrice" => $this->when($this->old_price != -1, $this->old_price),
            "perfumeSize" => $this->size,
            "perfumeCategory" => $this->category,
            "perfumeDescription" => $this->description,
            "perfumeAvailableQuantity" => $this->available_quantity,
        ];
    }
}
