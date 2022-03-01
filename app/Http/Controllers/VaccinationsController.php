<?php

namespace App\Http\Controllers;

use App\Http\Requests\VaccinationStoreRequest;
use App\Http\Requests\VaccinationUpdateRequest;
use App\Models\Vaccination;
use App\ViewModels\VaccinationFormViewModel;
use Illuminate\Http\Request;

class VaccinationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except('index','show');
    }

    public function index(Request $request)
    {
        $search_query = $request->get('search');

        $vaccinations = Vaccination::query()->with('patient','vaccine','staff');

        if ($search_query){
            $vaccinations->search($search_query);
        }

        $vaccinations = $vaccinations->paginate(6);

        return view('vaccinations.index', compact('vaccinations'));
    }

    public function create()
    {
        $viewModel = new VaccinationFormViewModel();
        return view('vaccinations.create', compact('viewModel'));
    }

    public function store(VaccinationStoreRequest $request)
    {
        Vaccination::create($request->validated());
        return to_route('vaccinations.index')->with('toast_success','Vaccination was created!');
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

    public function update(VaccinationUpdateRequest $request, Vaccination $vaccination)
    {
        $vaccination->update($request->all());
        return to_route('vaccinations.index')->with('toast_success','Vaccination was updated!');
    }

    public function destroy(Vaccination $vaccination)
    {
        //TODO
        $vaccination->delete();
        return to_route('vaccinations.index');
    }
}
