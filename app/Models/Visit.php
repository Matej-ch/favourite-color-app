<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visit extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function color()
    {
        return $this->belongsTo(Color::class);
    }
}
