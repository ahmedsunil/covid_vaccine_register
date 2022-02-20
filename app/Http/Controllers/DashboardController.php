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

        $vaccinations = Vac

        return view('dashboard', compact(
            'vaccinations', 'total_eligible','first_dose','second_dose','booster_dose', 'first_dose_percentage','second_dose_percentage','booster_dose_percentage',
            'pfizer_first', 'astra_first','sinopharm_first','covid_first','covid_second','sinopharm_second','astra_second','pfizer_second'
        ));
    }


}











//{{ $vaccinations->where('dose', 'first')->count() }}
