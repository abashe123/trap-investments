@extends('layouts.app')

@section('title', 'Car Rental | Trap Investments')

@section('content')
<!-- Hero Section -->
<div class="container-fluid bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 wow fadeInLeft">
                <a href="{{ url('/') }}" class="text-decoration-none d-inline-flex align-items-center mb-4">
                    <i class="fas fa-arrow-left me-2"></i> Back to Home
                </a>

                <h1 class="display-5 mb-3">Trap Car Rental</h1>
                <p class="mb-4">
                    Affordable and reliable car rental services in Tanzania. 
                    We offer executive, SUV, and economy vehicles for business and personal travel.
                </p>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <img class="img-fluid rounded shadow" src="{{ asset('images/trap car logo.jpg') }}" alt="Car Rental">
            </div>
        </div>
    </div>
</div>

<!-- Fleet Slider -->
<div class="container-xxl py-5 bg-white">
    <div class="container text-center mb-5">
        <h2 class="mb-3">Our Fleet</h2>
        <p>Comfortable, safe, and well-maintained vehicles for every journey.</p>
    </div>

    <div class="owl-carousel food-offer-carousel">

        <div class="offer-card">
            <img src="{{ asset('images/car1.jpg') }}" alt="SUV Rental">
            <div class="offer-overlay">
                <h4>SUV Rental</h4>
                <p>Perfect for safaris and long-distance travel.</p>
                <a href="{{ url('/contact') }}" class="btn btn-sm btn-light mt-2">Book Now</a>
            </div>
        </div>

        <div class="offer-card">
            <img src="{{ asset('images/car2.jpg') }}" alt="Executive Car">
            <div class="offer-overlay">
                <h4>Executive Cars</h4>
                <p>Luxury and comfort for corporate and VIP clients.</p>
                <a href="{{ url('/contact') }}" class="btn btn-sm btn-light mt-2">Book Now</a>
            </div>
        </div>

        <div class="offer-card">
            <img src="{{ asset('images/car3.jpg') }}" alt="Economy Car">
            <div class="offer-overlay">
                <h4>Economy Cars</h4>
                <p>Budget-friendly vehicles for everyday use.</p>
                <a href="{{ url('/contact') }}" class="btn btn-sm btn-light mt-2">Book Now</a>
            </div>
        </div>

    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-light pt-5 pb-4">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <h5 class="mb-3">Trap Investments</h5>
                <p>Reliable investment & business services in Tanzania, including Car Rental, Food Supply, and Real Estate solutions.</p>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5 class="mb-3">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}" class="text-light text-decoration-none">Home</a></li>
                    <li><a href="{{ url('/pages/car-rental') }}" class="text-light text-decoration-none">Car Rental</a></li>
                    <li><a href="{{ url('/pages/food') }}" class="text-light text-decoration-none">Trap Food</a></li>
                    <li><a href="{{ url('/pages/real-estate') }}" class="text-light text-decoration-none">Real Estate</a></li>
                    <li><a href="{{ url('/contact') }}" class="text-light text-decoration-none">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="mb-3">Contact</h5>
                <p>Arusha, Tanzania</p>
                <p>Email: info@trapinvestments.com</p>
                <p>Phone: +255 123 456 789</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="mb-3">Follow Us</h5>
                <a href="#" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-light"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>

        <hr class="bg-secondary mt-4">
        <div class="text-center pt-3">
            &copy; {{ date('Y') }} Trap Investments. All Rights Reserved.
        </div>
    </div>
</footer>
@endsection