@extends('layouts.app')

@section('content')

<section class="container mx-auto px-6 py-16">
    <h1 class="text-4xl md:text-5xl font-bold mb-6 text-center">About Trap Investments</h1>
    <p class="text-gray-600 text-lg md:text-xl text-center max-w-3xl mx-auto mb-12">
        Welcome to Trap Investments, proudly rooted in Arusha, Tanzania. We deliver dependable mobility solutions, curated real estate opportunities, 
        and high-quality food supplies. Our mission is to simplify life and business with reliable services, transparent transactions, and locally informed advice.
    </p>

    <div class="grid md:grid-cols-3 gap-8 text-center">
        <div class="bg-white p-8 rounded-2xl shadow hover:scale-105 transition">
            <h3 class="font-bold text-xl mb-2">Our Mission</h3>
            <p class="text-gray-600 text-sm">Provide integrated and reliable services across transport, property, and food supply industries.</p>
        </div>
        <div class="bg-white p-8 rounded-2xl shadow hover:scale-105 transition">
            <h3 class="font-bold text-xl mb-2">Our Vision</h3>
            <p class="text-gray-600 text-sm">To become the most trusted investment partner in Tanzania, known for quality and integrity.</p>
        </div>
        <div class="bg-white p-8 rounded-2xl shadow hover:scale-105 transition">
            <h3 class="font-bold text-xl mb-2">Our Values</h3>
            <p class="text-gray-600 text-sm">Reliability, Transparency, Excellence, Local Knowledge, Sustainability.</p>
        </div>
    </div>

</section>

@endsection
