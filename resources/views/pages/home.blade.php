@extends('layouts.app')

@section('content')

<!-- HERO SECTION (PERFECT CENTERED) -->
<section class="relative h-[85vh] rounded-2xl overflow-hidden mb-16">

    <!-- Background Image -->
    <img src="{{ asset('images/hero6.jpg') }}"
         class="absolute inset-0 w-full h-full object-cover">

    <!-- Dark Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/75 to-black/90"></div>

    <!-- Centered Content Container -->
    <div class="absolute inset-0 flex items-center justify-center">

        <!-- Text Wrapper -->
        <div class="text-center max-w-4xl px-6 mx-auto">

            <p class="uppercase tracking-widest text-gray-200 text-sm mb-4 text-center">
                Trap Investments • Arusha, Tanzania
            </p>

            <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6 text-white text-center">
                Premium Mobility, Property,<br>
                and Food Supply Solutions
            </h1>

            <p class="text-lg md:text-xl text-white mb-8 leading-relaxed text-center">
                Trusted by residents, businesses, and visitors across Tanzania. 
                From luxury safari vehicles and strategic land investments to fresh daily food supply — 
                Trap Investments delivers reliability, transparency, and excellence.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">

                <a href="/car-rental"
                   class="bg-white text-black px-8 py-4 rounded-lg font-semibold hover:bg-gray-200 transition">
                    Explore Car Rental
                </a>

                <a href="/about"
                   class="border border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-black transition">
                    Learn More About Us
                </a>

            </div>

        </div>

    </div>

</section>

<!-- BENTO GRID -->
<section>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 auto-rows-[200px]">

        <!-- Car Rental (Big Card) -->
        <a href="/car-rental"
           class="md:col-span-2 md:row-span-2 relative rounded-2xl overflow-hidden group">

                <img src="{{ asset('images/trapcar rental.jpeg') }}"
                 class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                 
            <div class="absolute inset-0 bg-black/60 flex flex-col justify-end p-6">
                <h2 class="text-2xl font-bold text-white">Trap Car Rental</h2>
                <p class="text-gray-200">Safari & Luxury Vehicles</p>
            </div>
        </a>


        <!-- Trap Food -->
        <a href="/food"
           class="relative rounded-2xl overflow-hidden group">

            <img src="{{ asset('images/trapfood logo.jpeg') }}"
                 class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

            <div class="absolute inset-0 bg-black/60 flex flex-col justify-end p-6">
                <h2 class="text-xl font-bold text-white">Trap Food</h2>
                <p class="text-gray-200">Fresh Supply & Distribution</p>
            </div>
        </a>

        <!-- Real Estate -->
        <a href="/real-estate"
           class="relative rounded-2xl overflow-hidden group">

            <img src="{{ asset('images/trapestates logo.jpeg') }}"
                 class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

            <div class="absolute inset-0 bg-black/60 flex flex-col justify-end p-6">
                <h2 class="text-xl font-bold text-white">Trap Real Estate</h2>
                <p class="text-gray-200">Land Buying & Selling</p>
            </div>
        </a>

        

        <!-- About Card -->
        <div class="bg-white rounded-2xl p-6 shadow flex flex-col justify-center">
    <h3 class="text-xl font-bold mb-3">About Trap Investments</h3>
    <p class="text-gray-600 text-sm">
        Welcome to Trap Investments, proudly rooted in Arusha, Tanzania. We deliver dependable mobility solutions, 
        curated real estate opportunities, and high-quality food supplies. Our mission is to simplify life and 
        business with reliable services, transparent transactions, and locally informed advice.
    </p>
</div>


    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="mt-24">

    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold">Why Trap Investments?</h2>
        <p class="text-gray-600 mt-3">
            Delivering excellence across multiple industries in Tanzania.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

    <div class="bg-white p-6 rounded-2xl shadow hover:scale-105 transition text-center">
        <h3 class="text-xl font-bold mb-2">Local Knowledge</h3>
        <p class="text-gray-600">
            Deep roots in Arusha with strong relationships with suppliers, land authorities, and tourism operators.
        </p>
    </div>

    <div class="bg-white p-6 rounded-2xl shadow hover:scale-105 transition text-center">
        <h3 class="text-xl font-bold mb-2">One-Stop Convenience</h3>
        <p class="text-gray-600">
            Integrated services from transport and safari logistics to land purchases and regular food supply.
        </p>
    </div>

    <div class="bg-white p-6 rounded-2xl shadow hover:scale-105 transition text-center">
        <h3 class="text-xl font-bold mb-2">Reliability & Transparency</h3>
        <p class="text-gray-600">
            Clear pricing, professional service teams, and a focus on long-term customer relationships.
        </p>
    </div>

    <div class="bg-white p-6 rounded-2xl shadow hover:scale-105 transition text-center">
        <h3 class="text-xl font-bold mb-2">Sustainable Focus</h3>
        <p class="text-gray-600">
            Supporting local farmers and promoting responsible land practices for community and environmental benefit.
        </p>
    </div>

</div>

</section>

<!-- STATS -->
<section class="mt-24 bg-black text-white rounded-2xl p-16">

    <div class="grid grid-cols-1 md:grid-cols-4 gap-10 text-center">

        <div>
            <h3 class="text-4xl font-bold">10+</h3>
            <p class="text-gray-400">Vehicles</p>
        </div>

        <div>
            <h3 class="text-4xl font-bold">500+</h3>
            <p class="text-gray-400">Clients Served</p>
        </div>

        <div>
            <h3 class="text-4xl font-bold">50+</h3>
            <p class="text-gray-400">Properties Sold</p>
        </div>

        <div>
            <h3 class="text-4xl font-bold">5+</h3>
            <p class="text-gray-400">Years Experience</p>
        </div>

    </div>

</section>


@endsection
