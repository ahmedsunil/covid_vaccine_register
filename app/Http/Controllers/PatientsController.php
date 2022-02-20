<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientStoreRequest;
use App\Http\Requests\PatientUpdateRequest;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function index()
    {
        $patients = Patient::paginate(6);
        return view('patients.index', compact('patients'));
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(PatientStoreRequest $request)
    {
        Patient::create($request->validated());
        return to_route('patients.index')->with('toast_warning','Patient was created!');
    }

    public function show(Patient $patient)
    {
        return view('patients.show', compact('patient'));
    }

    public function edit(Patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    public function update(PatientUpdateRequest $request, Patient $patient)
    {
        $patient->update($request->validated());
        return to_route('patients.index')->with('toast_warning','Patient was updated!');
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();
        return to_route('patients.index')->with('toast_warning','Patient was deleted!');
    }

}
