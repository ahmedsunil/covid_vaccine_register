<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded =['id'];
    use HasFactory;

    public function scopeSearch($query, $search_query)
    {
        $query->where("government_id", "like", "%" . $search_query . "%")
            ->orWhere("name", "like", "%" . $search_query . "%");
    }

}
