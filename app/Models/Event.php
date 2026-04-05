<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
protected $casts=[
"images"=>"array"
];
public function organizer(): BelongsTo
{
    return $this->belongsTo(related: Organizer::class);
}
}
