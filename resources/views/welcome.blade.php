<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased bg-gray-800">
    <div class="flex flex-row justify-between px-10 my-2 py-4">
        <h1 class="text-center text-gray-300 text-2xl">Covid Vaccination Dashboard</h1>
        @auth()
            <a href="/dashboard" class="text-gray-200 text-xs py-2 px-4 bg-gray-700 hover:bg-gray-600 rounded-md transition ease-in">Admin Panel</a>
        @endauth
        @guest()
        <a href="/login" class="text-gray-200 text-xs py-2 px-4 bg-gray-700 hover:bg-gray-600 rounded-md transition ease-in">Login</a>
        @endguest
    </div>
        <div class="flex flex-row-reverse justify-around border border-gray-400 mx-10 p-2 rounded-md">
            <h3 class="text-gray-300">
                Total Eligible for Vaccination - {{ $total_eligible }}
            </h3>
            <h2 class="text-gray-300">
                {{ $office }}
            </h2>
        </div>
    <div class="md:pt-6 md:pb-8 mx-4 md:mx-10">
        <h1 class="text-gray-300 font-semibold tracking-wider text-lg mb-2">Total Percentage of Vaccination</h1>
        <div class="bg-gray-100 rounded-lg w-full h-auto py-4 flex flex-row justify-between divide-x divide-solid divide-gray-400  border border-gray-300">
            <div class="relative flex-1 flex flex-col gap-2 px-4">
                <label class="text-gray-800 text-base font-semibold tracking-wider">First Dose</label>
                <label class="text-green-800 text-4xl font-bold">{{ $first_dose }}</label>
                <div class="absolute {{ $first_dose_percentage <= 94.5 ? 'bg-red-400' : 'bg-green-400' }} rounded-md font-semibold text-xs text-gray-100 p-2 right-4 bottom-0">
                    {{ round($first_dose_percentage) }}%
                </div>
            </div>
            <div class="relative flex-1 flex flex-col gap-2 px-4">
                <label class="text-gray-800 text-base font-semibold tracking-wider">Second Dose</label>
                <label class="text-green-800 text-4xl font-bold">{{ $second_dose }}</label>
                <div class="absolute {{ $second_dose_percentage <= 94.5 ? 'bg-red-400' : 'bg-green-400' }}  rounded-md font-semibold text-xs text-gray-100 p-2 right-4 bottom-0">
                    {{ round($second_dose_percentage) }}%
                </div>
            </div>
            <div class="relative flex-1 flex flex-col gap-2 px-4">
                <label class="text-gray-800 text-base font-semibold tracking-wider">Booster</label>
                <label class="text-green-800 text-4xl font-bold">{{ $booster_dose }}</label>
                <div class="absolute {{ $booster_dose_percentage <= 94.5 ? 'bg-red-400' : 'bg-green-400' }}  rounded-md font-semibold text-xs text-gray-100 p-2 right-4 bottom-0">
                    {{ round($booster_dose_percentage) }}%
                </div>
            </div>
        </div>
    </div>
    <div class="md:pb-12 mx-4 md:mx-10">
        <h1 class="text-gray-300 font-semibold tracking-wider text-lg mb-2">Total Number of People Vaccinated</h1>
        <div class="bg-gray-100 rounded-lg w-full h-auto py-4 flex flex-row justify-between divide-x divide-solid divide-gray-400  border border-gray-300">
            @foreach ($vaccinations as $vaccine_id => $vaccination_group)
                @php
                    $brand = $vaccination_group->first()->vaccine?->brand;
                    $first_dose = $vaccination_group->where('dose', 'first')->count();
                    $second_dose = $vaccination_group->where('dose', 'second')->count();
                    $total = $vaccination_group->count();
                @endphp
                <div class="relative flex-1 flex flex-col gap-2 px-4">
                    <label class="bg-teal-200 px-1 rounded-sm text-teal-800 text-sm font-semibold tracking-wider">{{ $brand }}</label>
                    <label class="text-gray-800 text-base font-semibold tracking-wider">First Dose</label>
                    <label class="text-green-800 text-2xl font-bold">{{ $first_dose }}</label>
                    <hr>
                    <label class="text-gray-800 text-base font-semibold tracking-wider">Second Dose</label>
                    <label class="text-green-800 text-2xl font-bold">{{ $second_dose }}</label>
                    <hr>
                    <label class="text-gray-800 text-base font-semibold tracking-wider">Total</label>
                    <label class="text-green-800 text-2xl font-bold">{{ $total }}</label>
                </div>

            @endforeach
        </div>
        <p class="pt-2 text-gray-400 text-sm text-center">Developed with &#10084; by Ahmed Sunil</p>
    </div>
    </body>
</html>
