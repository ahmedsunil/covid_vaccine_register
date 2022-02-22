```php 





[
    'id' => 1,
    'vaccine_id' => 3,
],
[
    'id' => 2,
    'vaccine_id' => 2,
],
[
    'id' => 3,
    'vaccine_id' => 4,
],
[
    'id' => 4,
    'vaccine_id' => 3,
],


[
    2 => [
        [
        'id' => 2,
        'vaccine_id' => 2,
        ],
    ].
    3 => [
        [
        'id' => 1,
        'vaccine_id' => 3,
        ],
        [
        'id' => 4,
        'vaccine_id' => 3,
        ],
    ]
     4 => [
        [
        'id' => 2,
        'vaccine_id' => 4,
        ],
    ].
    
]

```

//Vaccination Controller hadi heyvumah
//    public function create()
//    {
//        $patients = Patient::get(['id','name','government_id']);
//        $staffs = Staff::get(['id','name']);
//        $vaccines = Vaccine::get(['id','brand']);
//        return view('vaccinations.create', compact('patients','vaccines','staffs'));
//        $viewModel = new VaccinationFormViewModel();
//        return view('vaccinations.create', compact('viewModel'));
//    }

//    public function edit(Vaccination $vaccination)
//    {
//        $patients = Patient::get(['id','name','government_id']);
//        $staffs = Staff::get(['id','name']);
//        $vaccines = Vaccine::get(['id','brand']);
//
//        return view('vaccinations.edit', compact('vaccination','patients','vaccines','staffs'));
//    }
