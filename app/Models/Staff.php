<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $guarded =['id'];
    use HasFactory;

    public function scopeSearch($query, $search_query)
    {
        $query->where("record_card_number", "like", "%" . $search_query . "%");
    }
}
