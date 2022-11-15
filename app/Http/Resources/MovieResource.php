<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
{
	public function toArray($request)
	{
		if (isset($this->pivot)) {
			return [
				'id' => $this->id,
				'name' => $this->name,
				'rating' => $this->rating,
				'image' => $this->image,
				'directors' => $this->artists->where('title', 'Director')->pluck('name')->implode(', '),
				'writers' => $this->artists->where('title', 'Writer')->pluck('name')->implode(', '),
				'stars' => $this->artists->where('title', 'Star')->pluck('name')->implode(', '),
			];
		} else {
			return [
				'id' => $this->id,
				'name' => $this->name,
				'rating' => $this->rating,
				'description' => $this->description,
				'image' => $this->image,
			];
		}
	}
}
