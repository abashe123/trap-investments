@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="relative h-[70vh] flex items-center">

    <!-- Background -->
    <img src="{{ asset('images/trapestates logo.jpeg') }}"
         class="absolute inset-0 w-full h-full object-cover">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/70"></div>

    <!-- Content -->
    <div class="relative container mx-auto px-6 text-white text-center">
        <p class="uppercase tracking-widest text-gray-300 mb-4">
            Trap Real Estate • Arusha, Tanzania
        </p>

        <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
            Premium Property Solutions
        </h1>

        <p class="text-lg md:text-xl text-gray-200 max-w-2xl mx-auto mb-8">
            Discover high-quality land and property opportunities with transparent transactions and professional guidance.
        </p>

        <a href="/contact"
           class="bg-white text-black px-8 py-4 rounded-lg font-semibold hover:bg-gray-200 transition">
           Contact Us
        </a>
    </div>
</section>

<!-- PROPERTIES SHOWCASE -->
<section class="py-28 bg-gray-100">
    <div class="container mx-auto px-6">

        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-4xl font-bold mb-4">
                Featured Properties
            </h2>
            <p class="text-gray-600 text-lg">
                Explore selected properties and land parcels carefully curated for residential, commercial, and investment purposes.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-12">

            <!-- Placeholder Property 1 -->
            <div class="rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition transform">
                <img src="{{ asset('images/placeholder-property1.jpg') }}"
                     class="w-full h-[250px] object-cover hover:scale-105 transition duration-500">
                <div class="p-6 bg-white">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Residential Land</h3>
                    <p class="text-gray-600 text-sm">
                        Prime plots for residential development with easy access to city amenities.
                    </p>
                </div>
            </div>

            <!-- Placeholder Property 2 -->
            <div class="rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition transform">
                <img src="{{ asset('images/placeholder-property2.jpg') }}"
                     class="w-full h-[250px] object-cover hover:scale-105 transition duration-500">
                <div class="p-6 bg-white">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Commercial Land</h3>
                    <p class="text-gray-600 text-sm">
                        Strategically located plots ideal for shops, offices, and investment purposes.
                    </p>
                </div>
            </div>

            <!-- Placeholder Property 3 -->
            <div class="rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition transform">
                <img src="{{ asset('images/placeholder-property3.jpg') }}"
                     class="w-full h-[250px] object-cover hover:scale-105 transition duration-500">
                <div class="p-6 bg-white">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Investment Land</h3>
                    <p class="text-gray-600 text-sm">
                        Large plots suitable for long-term investment and development opportunities.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SERVICES SECTION -->
<section class="py-28 bg-white">
    <div class="container mx-auto px-6 max-w-4xl text-center">

        <p class="text-sm uppercase tracking-widest text-gray-400 mb-4">
            Our Services
        </p>

        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
            Professional Real Estate Solutions
        </h2>

        <div class="w-16 h-[2px] bg-black mb-6 mx-auto"></div>

        <div class="grid md:grid-cols-3 gap-12 mt-12 text-left">

            <div class="p-6 rounded-3xl shadow-lg hover:shadow-2xl transition transform">
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Land Buying & Selling</h3>
                <p class="text-gray-600 text-sm md:text-base">
                    Assisting clients in acquiring or selling land with transparent and secure transactions.
                </p>
            </div>

            <div class="p-6 rounded-3xl shadow-lg hover:shadow-2xl transition transform">
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Property Investment Guidance</h3>
                <p class="text-gray-600 text-sm md:text-base">
                    Expert advice for long-term property investment, maximizing returns and minimizing risks.
                </p>
            </div>

            <div class="p-6 rounded-3xl shadow-lg hover:shadow-2xl transition transform">
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Legal & Documentation Support</h3>
                <p class="text-gray-600 text-sm md:text-base">
                    Helping you navigate land registration, ownership verification, and property legalities.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- CTA SECTION -->
<section class="py-28 bg-black text-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-6">
            Interested in Our Properties?
        </h2>
        <p class="text-gray-300 mb-10 max-w-xl mx-auto">
            Contact Trap Real Estate directly for property inquiries, pricing, and investment guidance.
        </p>
        <a href="/contact"
           class="bg-white text-black px-10 py-4 rounded-lg font-semibold hover:bg-gray-200 transition">
           Contact Us
        </a>
    </div>
</section>

@endsection