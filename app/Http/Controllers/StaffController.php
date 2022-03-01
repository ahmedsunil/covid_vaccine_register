<?php

namespace App\Http\Controllers;

use App\Http\Requests\StaffStoreRequest;
use App\Http\Requests\StaffUpdateRequest;
use App\Models\Staff;
use App\Models\User;
use App\Models\Vaccine;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except('index','show');
    }

    public function index(Request $request)
    {
        $search_query = $request->get('search');

        $staffs = Staff::query();

        if ($search_query){
            $staffs->search($search_query);
        }

        $staffs = $staffs->paginate(6);
        return view('staff.index', compact('staffs'));
    }

    public function create()
    {
        $designations = config('defaults.designations');
        return view('staff.create',compact('designations'));
    }

    public function store(StaffStoreRequest $request)
    {
        Staff::create($request->validated());
        return to_route('staff.index')->with('toast_success','Staff was saved!');
    }

    public function show(Staff $staff)
    {
        return view('staff.show', compact('staff'));
    }

    public function edit(Staff $staff)
    {
        return view('staff.edit', compact('staff'));
    }

    public function update(StaffUpdateRequest $request, Staff $staff)
    {
        $staff->update($request->validated());
        return to_route('staff.index')->with('toast_success','Staff was updated!');
    }

    public function destroy(Staff $staff)
    {
        $staff->delete();
        return to_route('staff.index')->with('toast_warning','Staff was deleted!');
    }
}
