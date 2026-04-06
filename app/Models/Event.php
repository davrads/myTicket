<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
protected $casts=[
"images"=>"array"
];
protected $fillable = ['title', 'description', 'date', 'location', 'price', 'image', 'organizer_id'];
public function organizer(): BelongsTo
{
    return $this->belongsTo(Organizer::class);
}
}
