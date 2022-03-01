<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function scopeSearch($query, $search_query)
    {
        $query->where("brand", "like", "%" . $search_query . "%");
    }

}

