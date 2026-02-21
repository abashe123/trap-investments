@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="relative h-[75vh] flex items-center">

    <!-- Background -->
    <img src="{{ asset('images/trapcar rental.jpeg') }}"
         class="absolute inset-0 w-full h-full object-cover">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/70"></div>

    <!-- Content -->
    <div class="relative container mx-auto px-6 text-white">

        <p class="uppercase tracking-widest text-gray-300 mb-4">
            Trap Car Rental • Arusha, Tanzania
        </p>

        <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
            Premium Car Rental<br>
            and Safari Vehicles
        </h1>

        <p class="text-lg md:text-xl text-gray-200 max-w-xl mb-8">
            Professional, reliable, and safari-ready vehicles for tourism,
            business, and personal use across Tanzania.
        </p>

        <a href="#contact" 
           class="bg-white text-black px-8 py-4 rounded-lg font-semibold hover:bg-gray-200 transition">
           Contact Us
        </a>

    </div>

</section>

<!-- SERVICES SECTION (PREMIUM STYLE) -->
<section class="py-28 bg-white">

    <div class="container mx-auto px-6">

        <!-- Header -->
        <div class="max-w-2xl mb-20">

            <p class="text-sm uppercase tracking-widest text-gray-400 mb-4">
                Our Services
            </p>

            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Professional Vehicle Solutions
            </h2>

            <div class="w-16 h-[2px] bg-black mb-6"></div>

            <p class="text-gray-600 text-lg leading-relaxed">
                Reliable and professionally maintained vehicles tailored for tourism, corporate mobility, and long-term rental needs.
            </p>

        </div>

        <!-- Services List -->
        <div class="grid md:grid-cols-3 gap-12">

            <div class="bg-gray-50 p-8 rounded-3xl shadow-lg hover:shadow-2xl transition transform">
                <h3 class="text-xl font-semibold text-gray-900 mb-3">
                    Safari Vehicle Rental
                </h3>
                <p class="text-gray-600 text-sm md:text-base">
                    4x4 vehicles prepared for Tanzania’s national parks and safari routes, ensuring safety, durability, and comfort.
                </p>
            </div>

            <div class="bg-gray-50 p-8 rounded-3xl shadow-lg hover:shadow-2xl transition transform">
                <h3 class="text-xl font-semibold text-gray-900 mb-3">
                    Executive Transport
                </h3>
                <p class="text-gray-600 text-sm md:text-base">
                    Premium transport solutions for executives, business travel, and private clients requiring professionalism and reliability.
                </p>
            </div>

            <div class="bg-gray-50 p-8 rounded-3xl shadow-lg hover:shadow-2xl transition transform">
                <h3 class="text-xl font-semibold text-gray-900 mb-3">
                    Long-Term Rental
                </h3>
                <p class="text-gray-600 text-sm md:text-base">
                    Flexible rental arrangements for organizations and individuals, with consistent vehicle support and maintenance.
                </p>
            </div>

        </div>

    </div>

</section>

<!-- FLEET SHOWCASE -->
<section class="py-28 bg-gray-100">

    <div class="container mx-auto px-6">

        <!-- Header -->
        <div class="max-w-xl mb-16">
            <p class="text-sm uppercase tracking-widest text-gray-400 mb-3">
                Our Fleet
            </p>

            <h2 class="text-4xl font-bold mb-4">
                Featured Vehicle
            </h2>

            <p class="text-gray-600 text-lg">
                Built for comfort, safety, and performance across Tanzania.
            </p>
        </div>

        <!-- Vehicle -->
        <div class="grid md:grid-cols-2 gap-12 items-center">

            <!-- Image -->
            <div class="rounded-2xl overflow-hidden shadow-lg">
                <img src="{{ asset('images/trapcar2.jpeg') }}"
                     class="w-full h-[420px] object-cover hover:scale-105 transition duration-500">
            </div>

            <!-- Details -->
            <div>
                <p class="text-sm text-gray-400 mb-2">
                    Toyota Land Cruiser
                </p>

                <h3 class="text-3xl font-bold mb-4">
                    Safari Ready. City Ready.
                </h3>

                <p class="text-gray-600 mb-6 text-lg">
                    Ideal for safaris, airport transfers, business travel, and long-distance journeys.
                </p>

                <div class="flex gap-8 text-sm text-gray-500 mb-8">
                    <span>4x4 Drive</span>
                    <span>Air Conditioning</span>
                    <span>Professional Maintenance</span>
                </div>

                <a href="#contact"
                   class="inline-block bg-black text-white px-6 py-3 rounded-lg hover:bg-gray-800 transition">
                   Check Availability
                </a>
            </div>

        </div>

    </div>

</section>

<!-- CTA SECTION -->
<section id="contact" class="py-28 bg-black text-white">

    <div class="container mx-auto px-6 text-center">

        <h2 class="text-4xl font-bold mb-6">
            Ready to Rent a Vehicle?
        </h2>

        <p class="text-gray-300 mb-10 max-w-xl mx-auto">
            Contact us directly for availability, pricing, and personalized service.
        </p>

        <a href="/contact"
           class="bg-white text-black px-10 py-4 rounded-lg font-semibold hover:bg-gray-200 transition">
           Contact Us
        </a>

    </div>

</section>

@endsection