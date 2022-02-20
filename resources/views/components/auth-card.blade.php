<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[url('/img/coro2.png')] bg-blend-lighten bg-cover">
    <div class="text-gray-400  flex flex-col items-center">
{{--        {{ $logo }}--}}
        <x-login-logo></x-login-logo>
        <h1 class="py-2 text-2xl">Covid Vaccination Register</h1>
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
