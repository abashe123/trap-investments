@extends('layouts.app')

@section('content')

<!-- Real Estate Hero -->
<section class="mb-16">
    <div class="relative h-[400px] rounded-2xl overflow-hidden">
        <img src="{{ asset('images/realestate.jpg') }}" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/60 flex flex-col justify-center items-center text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Trap Real Estate</h1>
            <p class="text-lg text-gray-200 max-w-xl">
                Residential plots, investment parcels, and agricultural land near Arusha.
            </p>
        </div>
    </div>
</section>

<section class="grid grid-cols-1 md:grid-cols-2 gap-8">
    <div>
        <h2 class="text-2xl font-bold mb-2">Offerings</h2>
        <p class="text-gray-700 mb-4">
            Residential plots, investment parcels, and productive agricultural land ideal for small- to large-scale farming.
        </p>

        <h2 class="text-2xl font-bold mb-2">Services</h2>
        <p class="text-gray-700 mb-4">
            Site tours, due-diligence support, land documentation guidance, and assistance with local regulations.
        </p>

        <h2 class="text-2xl font-bold mb-2">Value Proposition</h2>
        <p class="text-gray-700 mb-4">
            Carefully selected locations near Arusha with strong growth potential, access to infrastructure, and clear title verification.
        </p>
    </div>
    <div>
        <img src="{{ asset('images/realestate.jpg') }}" class="w-full h-full object-cover rounded-2xl">
    </div>
</section>

@endsection
