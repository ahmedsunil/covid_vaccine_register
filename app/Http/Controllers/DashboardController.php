<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Vaccination;
use App\Models\Vaccine;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $vaccinations = Vaccination::query()
            ->with('vaccine:id,brand')
            ->select('id', 'vaccine_id', 'dose')
            ->get();

        $first_dose = $vaccinations->where('dose', 'first')->count();
        $second_dose = $vaccinations->where('dose', 'second')->count();
        $booster_dose = $vaccinations->where('dose', 'booster')->count();

        $total_eligible = config('defaults.total_eligible');
        $office = config('defaults.office');

        $first_dose_percentage = $first_dose / $total_eligible * 100;
        $second_dose_percentage = $second_dose / $total_eligible * 100;
        $booster_dose_percentage = $booster_dose / $total_eligible * 100;

        $vaccinations = $vaccinations->groupBy('vaccine_id');

        return view('dashboard', compact(
            'vaccinations',
            'first_dose',
            'second_dose',
            'booster_dose',
            'total_eligible',
            'office',
            'first_dose_percentage',
            'second_dose_percentage',
            'booster_dose_percentage'
        ));
    }


}
