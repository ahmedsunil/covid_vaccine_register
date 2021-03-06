<?php

namespace App\Http\Controllers;

use App\Http\Requests\VaccinesStoreRequest;
use App\Http\Requests\VaccinesUpdateRequest;
use App\Models\Vaccine;
use Illuminate\Http\Request;


class VaccinesController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except('index','show');
    }

    public function index(Request $request)
    {
        $search_query = $request->get('search');

        $vaccines = Vaccine::query();

        if ($search_query){
            $vaccines->search($search_query);
        }

        $vaccines = $vaccines->paginate(6);

        return view('vaccines.index', compact('vaccines'));
    }

    public function create()
    {
        return view('vaccines.create');
    }

    public function store(VaccinesStoreRequest $request)
    {
        Vaccine::create($request->validated());
        return to_route('vaccines.index')->with('toast_success','Vaccine Created');
    }

    public function show(Vaccine $vaccine)
    {
        return view('vaccines.show', compact('vaccine'));
    }

    public function edit(Vaccine $vaccine)
    {
        return view('vaccines.edit', compact('vaccine'));
    }

    public function update(VaccinesUpdateRequest $request, Vaccine $vaccine)
    {
        $vaccine->update($request->validated());
        return to_route('vaccines.index')->with('toast_success','Vaccine Updated!');
    }

    public function destroy(Vaccine $vaccine)
    {
        $vaccine->delete();
        return to_route('vaccines.index')->with('toast_error','Vaccine Deleted!');
    }

}
