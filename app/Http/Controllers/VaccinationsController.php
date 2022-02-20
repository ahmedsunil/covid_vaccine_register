<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Staff;
use App\Models\Vaccination;
use App\Models\Vaccine;
use Illuminate\Http\Request;

class VaccinationsController extends Controller
{
    public function index()
    {
        $vaccinations = Vaccination::with('vaccine','staff','patient')->paginate(7);
        return view('vaccinations.index', compact('vaccinations'));
    }

    public function create()
    {
        $patients = Patient::get(['name','government_id']);
        $staffs = Staff::get('name');
        $vaccines = Vaccine::get('brand');

        return view('vaccinations.create', compact('patients','vaccines','staffs'));
    }

    public function store()
    {

    }

    public function show(Vaccination $vaccination)
    {
        return view('vaccinations.show', compact('vaccination'));
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
