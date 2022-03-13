<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Vaccination extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

//    protected $dates = [
//        'created_at',
//        'updated_at',
//        'date_for_vaccination'
//    ];

    public function vaccine(): BelongsTo
    {
        return $this->belongsTo(Vaccine::class);
    }

    public function staff(): BelongsTo
    {
        return $this->belongsTo(Staff::class);
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

//    public function getFormattedDateForVaccinationAttribute()
//    {
//        return $this->date_for_vaccination->format('d-m-Y');
//    }

    public function scopeSearch($query, $search_query)
    {
        $query->where("patient_id", "like", "%" . $search_query . "%")
            ->orWhere("date_for_vaccination", "like", "%" . $search_query . "%")
            ->orWhere(function ($query) use ($search_query) {
                $query->whereHas("patient", function ($query) use ($search_query) {
                    $query->where("government_id", "like", "%" . $search_query . "%")
                        ->orWhere("name", "like", "%" . $search_query . "%");
                });
            });

    }


}
