<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodoDetail extends Model
{
    protected $guarded = ['id'];

    public function todo()
    {
        return $this->belongsTo(Todo::class);
    }
}
