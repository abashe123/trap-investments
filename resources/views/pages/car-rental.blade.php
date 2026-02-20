@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="mb-16">
    <div class="relative h-[400px] rounded-2xl overflow-hidden">

        <img src="{{ asset('images/trapcar rental.jpeg') }}"
             class="w-full h-full object-cover">

        <div class="absolute inset-0 bg-black/60 flex flex-col justify-center items-center text-center text-white">

            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Trap Car Rental
            </h1>

            <p class="text-lg text-gray-200 max-w-xl">
                Premium safari vehicles and luxury cars available across Tanzania.
            </p>

        </div>

    </div>
</section>


<!-- VEHICLES -->
<section>

    <h2 class="text-3xl font-bold mb-8">Our Vehicles</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Vehicle Card -->
        <div class="bg-white rounded-2xl shadow hover:shadow-xl transition overflow-hidden">

            <img src="{{ asset('images/trapcar1.jpeg') }}"
                 class="w-full h-56 object-cover">

            <div class="p-6">

                <h3 class="text-xl font-bold mb-2">
                    Toyota Land Cruiser
                </h3>

                <p class="text-gray-600 mb-4">
                    Perfect for safari and long-distance travel.
                </p>

                <div class="flex justify-between items-center">

                    <span class="font-bold text-lg">
                        $120/day
                    </span>

                    <a href="https://wa.me/255XXXXXXXXX"
                       class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800">
                        Book Now
                    </a>

                </div>

            </div>

        </div>


        <!-- Vehicle Card -->
        <div class="bg-white rounded-2xl shadow hover:shadow-xl transition overflow-hidden">

            <img src="{{ asset('images/car.jpg') }}"
                 class="w-full h-56 object-cover">

            <div class="p-6">

                <h3 class="text-xl font-bold mb-2">
                    Toyota Prado
                </h3>

                <p class="text-gray-600 mb-4">
                    Comfortable and reliable luxury SUV.
                </p>

                <div class="flex justify-between items-center">

                    <span class="font-bold text-lg">
                        $100/day
                    </span>

                    <a href="https://wa.me/255XXXXXXXXX"
                       class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800">
                        Book Now
                    </a>

                </div>

            </div>

        </div>


        <!-- Vehicle Card -->
        <div class="bg-white rounded-2xl shadow hover:shadow-xl transition overflow-hidden">

            <img src="{{ asset('images/car.jpg') }}"
                 class="w-full h-56 object-cover">

            <div class="p-6">

                <h3 class="text-xl font-bold mb-2">
                    Safari Land Cruiser
                </h3>

                <p class="text-gray-600 mb-4">
                    Specially designed for safari adventures.
                </p>

                <div class="flex justify-between items-center">

                    <span class="font-bold text-lg">
                        $150/day
                    </span>

                    <a href="https://wa.me/255XXXXXXXXX"
                       class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800">
                        Book Now
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
