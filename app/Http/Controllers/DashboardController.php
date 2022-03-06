<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Vaccination;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $vaccinations = Vaccination::query()
            ->with('vaccine:id,brand')
            ->select('id', 'vaccine_id', 'dose', 'date_for_vaccination')
            ->when($request->get('date_search'), function ($query, $date_search){
                $date_search = Carbon::parse($date_search);
                $query->whereDay('date_for_vaccination', '=' , $date_search->format('d'));
            })
            ->get();

        $first_dose = $vaccinations->where('dose', 'first')->count();
        $second_dose = $vaccinations->where('dose', 'second')->count();
        $booster_dose = $vaccinations->where('dose', 'booster')->count();
        $total_vaccinated = $vaccinations->count();

        $vaccinated_date = Carbon::parse($request->get('date_search'))->format('F,d,Y');

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
            'total_vaccinated',
            'total_eligible',
            'office',
            'first_dose_percentage',
            'second_dose_percentage',
            'booster_dose_percentage',
            'vaccinated_date'
        ));
    }


}
