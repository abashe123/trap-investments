@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="relative h-[75vh] flex items-center">

    <!-- Background -->
    <img src="{{ asset('images/trapfood logo.jpeg') }}"
         class="absolute inset-0 w-full h-full object-cover">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/70"></div>

    <!-- Content -->
    <div class="relative container mx-auto px-6 text-white text-center">

        <p class="uppercase tracking-widest text-gray-300 mb-4">
            Trap Food • Arusha, Tanzania
        </p>

        <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
            Premium Food Supply<br>
            Fresh & Reliable
        </h1>

        <p class="text-lg md:text-xl text-gray-200 max-w-xl mx-auto mb-8">
            Supplying fresh rice, grains, and daily essentials to businesses and homes across Tanzania.
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
        <div class="max-w-2xl mb-20 mx-auto text-center">

            <p class="text-sm uppercase tracking-widest text-gray-400 mb-4">
                Our Services
            </p>

            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Professional Food Solutions
            </h2>

            <div class="w-16 h-[2px] bg-black mb-6 mx-auto"></div>

            <p class="text-gray-600 text-lg leading-relaxed">
                Reliable supply of quality food products to businesses and households, tailored for freshness, quantity, and consistency.
            </p>

        </div>

        <!-- Products List -->
        <div class="grid md:grid-cols-2 gap-12">

            <div class="rounded-2xl overflow-hidden shadow-lg">
                <img src="{{ asset('images/Trapfood rice.jpeg') }}"
                     class="w-full h-[400px] object-cover hover:scale-105 transition duration-500">
            </div>

            <div class="rounded-2xl overflow-hidden shadow-lg">
                <img src="{{ asset('images/trapfood ricebag.jpeg') }}"
                     class="w-full h-[400px] object-cover hover:scale-105 transition duration-500">
            </div>

        </div>

    </div>

</section>

<!-- CTA SECTION -->
<section id="contact" class="py-28 bg-black text-white">

    <div class="container mx-auto px-6 text-center">

        <h2 class="text-4xl font-bold mb-6">
            Ready to Supply Your Business?
        </h2>

        <p class="text-gray-300 mb-10 max-w-xl mx-auto">
            Contact us for pricing, availability, and bulk orders.
        </p>

        <a href="/contact"
           class="bg-white text-black px-10 py-4 rounded-lg font-semibold hover:bg-gray-200 transition">
           Contact Us
        </a>

    </div>

</section>

@endsection