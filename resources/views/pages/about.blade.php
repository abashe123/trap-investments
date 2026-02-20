@extends('layouts.app')

@section('content')

<!-- About Us Hero -->
<section class="mb-16">
    <div class="text-center max-w-3xl mx-auto">
        <h1 class="text-4xl font-bold mb-6">About Trap Investments</h1>
        <p class="text-gray-700 text-lg">
            Welcome to Trap Investments, proudly rooted in Arusha, Tanzania. 
            We are a diversified local company delivering dependable mobility solutions, 
            curated real estate opportunities, and high-quality food supplies across Arusha and the surrounding regions.
        </p>
    </div>
</section>

<!-- Mission Section -->
<section class="mb-16">
    <h2 class="text-3xl font-bold mb-6 text-center">Our Mission</h2>
    <p class="text-gray-700 text-center max-w-3xl mx-auto">
        Our mission is to simplify life and business for our clients by offering reliable services, 
        transparent transactions, and locally informed advice.
    </p>
</section>

<!-- Values / Community -->
<section class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
    <div class="bg-white p-8 rounded-2xl shadow">
        <h3 class="text-xl font-bold mb-3">Local Expertise</h3>
        <p class="text-gray-600">
            Partnering with trusted suppliers, land authorities, and tourism operators for quality and legal clarity.
        </p>
    </div>
    <div class="bg-white p-8 rounded-2xl shadow">
        <h3 class="text-xl font-bold mb-3">Professional Service</h3>
        <p class="text-gray-600">
            Arranging safari-ready vehicles, guiding land purchases, and delivering fresh produce with professionalism.
        </p>
    </div>
    <div class="bg-white p-8 rounded-2xl shadow">
        <h3 class="text-xl font-bold mb-3">Sustainability</h3>
        <p class="text-gray-600">
            Supporting local farmers, promoting responsible land use, and creating economic opportunities for Arusha’s communities.
        </p>
    </div>
</section>

@endsection
