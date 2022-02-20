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
//        $vaccinations = Vaccination::with('vaccine','staff','patient')->get();
//        $first_dose = Vaccination::where('dose', 'first')->count();
//        $second_dose = Vaccination::where('dose', 'second')->count();
//        $booster_dose = Vaccination::where('dose', 'booster')->count();
//        $total_eligible = 967;
//        $first_dose_percentage = $first_dose / $total_eligible * 100;
//        $second_dose_percentage = $second_dose / $total_eligible * 100;
//        $booster_dose_percentage = $booster_dose / $total_eligible * 100;
//        $pfizer_first = Vaccination::where('dose','first')->where('vaccine_id', 2)->count();
//        $pfizer_second = Vaccination::where('dose','second')->where('vaccine_id', 2)->count();
//        $astra_first = Vaccination::where('dose','first')->where('vaccine_id', 3)->count();
//        $astra_second = Vaccination::where('dose','second')->where('vaccine_id', 3)->count();
//        $sinopharm_first = Vaccination::where('dose','first')->where('vaccine_id', 5)->count();
//        $sinopharm_second = Vaccination::where('dose','second')->where('vaccine_id', 5)->count();
//        $covid_first = Vaccination::where('dose','first')->where('vaccine_id', 6)->count();
//        $covid_second = Vaccination::where('dose','second')->where('vaccine_id', 6)->count();

        $vaccinations = Vaccination::query()
//            ->with('vaccine:id,brand')
            ->select('id', 'vaccine_id', 'dose')
            ->get();

        $first_dose = $vaccinations->where('dose', 'first')->count();
        $second_dose = $vaccinations->where('dose', 'second')->count();
        $booster_dose = $vaccinations->where('dose', 'booster')->count();

        $total_eligible = config('defaults.total_eligible');
        $first_dose_percentage = $first_dose / $total_eligible * 100;
        $second_dose_percentage = $second_dose / $total_eligible * 100;
        $booster_dose_percentage = $booster_dose / $total_eligible * 100;

        $pfizer_first = $vaccinations->where('dose', 'first')->where('vaccine_id', 2)->count();
        $pfizer_second = $vaccinations->where('dose', 'second')->where('vaccine_id', 2)->count();
        $astra_first = $vaccinations->where('dose','first')->where('vaccine_id', 3)->count();
        $astra_second = $vaccinations->where('dose','second')->where('vaccine_id', 3)->count();
        $sinopharm_first = $vaccinations->where('dose','first')->where('vaccine_id', 5)->count();
        $sinopharm_second = $vaccinations->where('dose','second')->where('vaccine_id', 5)->count();
        $covid_first = $vaccinations->where('dose','first')->where('vaccine_id', 6)->count();
        $covid_second = $vaccinations->where('dose','second')->where('vaccine_id', 6)->count();


        return view('dashboard', compact(
            'vaccinations', 'total_eligible','first_dose','second_dose','booster_dose', 'first_dose_percentage','second_dose_percentage','booster_dose_percentage',
            'pfizer_first', 'astra_first','sinopharm_first','covid_first','covid_second','sinopharm_second','astra_second','pfizer_second'
        ));
    }


}











//{{ $vaccinations->where('dose', 'first')->count() }}
