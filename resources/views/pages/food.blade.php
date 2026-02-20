@extends('layouts.app')

@section('content')

<section class="mb-16 text-center">
    <h1 class="text-4xl font-bold mb-4">Trap Food Supplies</h1>
    <p class="text-gray-700 text-lg max-w-3xl mx-auto">
        Wholesale and retail supply of fresh vegetables, fruits, meat, and other essential food items sourced from trusted local farms and suppliers. 
        Serving restaurants, hotels, markets, institutions, and households across Arusha and neighboring regions.
    </p>
</section>

<section class="grid grid-cols-1 md:grid-cols-3 gap-8">
    <div class="bg-white p-6 rounded-2xl shadow">
        <h3 class="text-xl font-bold mb-2">Fresh Vegetables</h3>
        <p class="text-gray-600">Locally sourced, daily deliveries, high quality and hygiene standards.</p>
    </div>
    <div class="bg-white p-6 rounded-2xl shadow">
        <h3 class="text-xl font-bold mb-2">Fruits & Meat</h3>
        <p class="text-gray-600">Reliable supply for restaurants, hotels, markets, and institutions.</p>
    </div>
    <div class="bg-white p-6 rounded-2xl shadow">
        <h3 class="text-xl font-bold mb-2">Flexible Orders</h3>
        <p class="text-gray-600">Scheduled deliveries and one-off orders to meet your business or household needs.</p>
    </div>
</section>

@endsection
