<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    //

    public function scopeCounter($query)
    {
        return $query->where('id', '>', 0)->count();
    }
}
