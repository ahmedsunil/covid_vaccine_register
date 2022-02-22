<?php

namespace App\Http\Controllers;

use App\Http\Requests\VaccinationUpdateRequest;
use App\Models\Vaccination;
use App\ViewModels\VaccinationFormViewModel;
use Illuminate\Http\Request;

class VaccinationsController extends Controller
{
    public function index()
    {
        $vaccinations = Vaccination::with('vaccine','staff','patient')->paginate(5);
        return view('vaccinations.index', compact('vaccinations'));
    }

    public function create()
    {
        $viewModel = new VaccinationFormViewModel();
        return view('vaccinations.create', compact('viewModel'));
    }

    public function store()
    {

    }

    public function show(Vaccination $vaccination)
    {
        return view('vaccinations.show', compact('vaccination'));
    }

    public function edit(Vaccination $vaccination)
    {
        $viewModel = new VaccinationFormViewModel();
        return view('vaccinations.edit', compact('vaccination','viewModel'));
    }

    public function update(VaccinationUpdateRequest $request)
    {
        dd($request->all());
    }

    public function destroy(Vaccination $vaccination)
    {
        $vaccination->delete();
        return to_route('vaccinations.index');
    }
}
;
