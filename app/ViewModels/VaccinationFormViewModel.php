<?php

namespace App\ViewModels;

use App\Models\Patient;
use App\Models\Staff;
use App\Models\Vaccine;
use Spatie\ViewModels\ViewModel;

class VaccinationFormViewModel extends ViewModel
{
    public function patients()
    {
        return Patient::get(['id','name','government_id']);
    }

    public function vaccines()
    {
        return Vaccine::get(['id','brand']);
    }

    public function staffs()
    {
        return Staff::get(['id','name']);
    }

    public function doses()
    {
        return config('defaults.dose');
    }

}
