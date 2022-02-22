<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Vaccination extends Model
{
    protected $guarded =['id'];
    use HasFactory;

    protected $dates = [
        'date_for_vaccination'
    ];


    public function vaccine(): BelongsTo
    {
        return $this->belongsTo(Vaccine::class);
    }

    public function staff() : BelongsTo
    {
        return $this->belongsTo(Staff::class);
    }

    public function patient() : BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function getFormattedDateForVaccinationAttribute()
    {
        return $this->date_for_vaccination->format('Y-m-d');
    }


}
