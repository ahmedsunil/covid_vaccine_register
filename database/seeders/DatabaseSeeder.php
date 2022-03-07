<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\Staff;
use App\Models\User;
use App\Models\Vaccine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user1 = User::create([
            'name' => 'Hussain Samaah',
            'email' => 'samaah@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('root')
        ]);
        $user2 = User::create([
            'name' => 'Ibrahim Samaah',
            'email' => 'ibrahim@gmail.com',
            'role' => 'viewer',
            'password' => Hash::make('root')
        ]);
        $user3 = User::create([
            'name' => 'Ali Samaah',
            'email' => 'ali@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('root')
        ]);
        $user4 = User::create([
            'name' => 'Ahmed Samaah',
            'email' => 'adam@gmail.com',
            'role' => 'viewer',
            'password' => Hash::make('root')
        ]);

        $staff1 = Staff::create([
            'name' => 'Hussain Samaah',
            'government_id' => 'A0000900',
            'record_card_number' => 'HC9999000123123',
            'designation' => 'Registered Nurse'
        ]);

        $staff2 = Staff::create([
            'name' => 'Aishath Ali',
            'government_id' => 'A0000990',
            'record_card_number' => 'HC8888000123123',
            'designation' => 'Registered Nurse'
        ]);

        $patient1 = Patient::create([
            'name' => 'Ahmed Sunil',
            'government_id' => 'A0000700',
            'case_id' => '0002812',
            'date_of_birth' => '2022-02-12',
            'current_address' => 'Fehivina / R.Hulhudhuffaaru',
            'permanent_address' => 'Marine Villa / R.Hulhudhuffaaru',
            'contact' => '7626626',
            'nationality' => 'Maldivian'
        ]);

        $patient2 = Patient::create([
            'name' => 'Ibrahim Shaan',
            'government_id' => 'A0000980',
            'case_id' => '000212',
            'date_of_birth' => '2022-02-12',
            'current_address' => 'Fehivina / R.Hulhudhuffaaru',
            'permanent_address' => 'Marine Villa / R.Hulhudhuffaaru',
            'contact' => '7626626',
            'nationality' => 'Maldivian'
        ]);


        $vaccine1 = Vaccine::create([
            'brand' => 'Moderna Spikevax®COVID-19 vaccine',
            'expiry_date' => '2022-02-12',
            'type' => 'mRNA',
            'approved_for' => 'Age 12 and older',
            'manufacturer' => 'ModernaTX, Inc.',
            'number_of_doses' => 2
        ]);

        $vaccine2 = Vaccine::create([
            'brand' => 'Pfizer-BioNTech Comirnaty COVID-19 vaccine',
            'expiry_date' => '2022-02-12',
            'type' => 'mRNA',
            'approved_for' => 'Age 5 and older',
            'manufacturer' => 'BioNTech Manufacturing GmbH',
            'number_of_doses' => 2
        ]);

        $vaccine3 = Vaccine::create([
            'brand' => 'AstraZeneca Vaxzevria COVID-19 vaccine',
            'expiry_date' => '2022-02-12',
            'type' => 'Viral vector-based',
            'approved_for' => 'Age 18 and older',
            'manufacturer' => 'AstraZeneca',
            'number_of_doses' => 2
        ]);

        $vaccine4 = Vaccine::create([
            'brand' => 'Janssen COVID-19 Vaccine',
            'expiry_date' => '2022-02-12',
            'type' => 'Viral vector-based',
            'approved_for' => 'Age 18 and older',
            'manufacturer' => 'Janssen Inc',
            'number_of_doses' => 2
        ]);

        $vaccine5= Vaccine::create([
            'brand' => 'Sinopharm COVID-19 Vaccine',
            'expiry_date' => '2022-02-12',
            'type' => 'Inactivated',
            'approved_for' => 'Age 18 and older',
            'manufacturer' => 'Sinopharm',
            'number_of_doses' => 2
        ]);

        $vaccine6 = Vaccine::create([
            'brand' => 'COVISHIELD',
            'expiry_date' => '2022-02-12',
            'type' => 'DNA',
            'approved_for' => 'Age 18 and older',
            'manufacturer' => 'Serum Institute of India Pvt Ltd',
            'number_of_doses' => 2
        ]);
    }
}
