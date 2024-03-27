@extends('Store.master')

@section('title', 'Home')

@section('content')

    <main>
        <!-- carousal -->
        <div id="hero-carousel" class="carousel slide mt-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <ul>
                    <li data-bs-target="#hero-carousel" data-bs-slide-to="0" class="dot active" aria-label="Slide 1">
                    </li>
                    <li data-bs-target="#hero-carousel" data-bs-slide-to="1" class="dot" aria-label="Slide 2"></li>
                    <li data-bs-target="#hero-carousel" data-bs-slide-to="2" class="dot" aria-label="Slide 3"></li>
                </ul>

            </div>

            <div class="carousel-inner">
                <div class="carousel-item active c-item">
                    <img src="{{ asset('front_assets/Images/istockphoto-1324566062-612x612-1.jpg') }}"
                        class="d-block w-100 c-img" alt="Slide 1">
                    <div class="carousel-caption top-0 mt-4">
                        <p class="mt-5 fs-3">Everything your kid needs at
                            one place</p>
                        <h1 class="display-1 fw-bolder text-capitalize">Reino
                            Kids</h1>
                        <button class="btn btn-primary p-3 fs-5 mt-5">Shop
                            now</button>
                    </div>
                </div>
                <div class="carousel-item c-item">
                    <img src="{{ asset('front_assets/Images/kids5.JPG') }}" class="d-block w-100 c-img" alt="Slide 2">
                    <div class="carousel-caption top-0 mt-4">
                        <p class="mt-5 fs-3">Everything your kid needs at
                            one place</p>
                        <h1 class="display-1 fw-bolder text-capitalize">Reino
                            Kids</h1>
                        <button class="btn btn-primary p-3 fs-5 mt-5">Shop
                            now</button>
                    </div>

                </div>
                <div class="carousel-item c-item">
                    <img src="{{ asset('front_assets/Images/children.jpg') }}" class="d-block w-100 c-img" alt="Slide 3">
                    <div class="carousel-caption top-0 mt-4">
                        <p class="mt-5 fs-3">Everything your kid needs at
                            one place</p>
                        <h1 class="display-1 fw-bolder text-capitalize">Reino
                            Kids</h1>
                        <button class="btn btn-primary p-3  fs-5 mt-5">Shop
                            now</button>
                    </div>
                </div>
            </div>

        </div>

        <!-- Categories -->
        <div class="container my-5 text-center">
            <div class="row row-cols-1 row-cols-md-2 g-3 mt-5 w-100">
                <div class="col mt-5 category">
                    <div class="catg-card">

                        <img src="{{ asset('front_assets/Images/kids5.JPG') }}" class="card-img-top" alt="...">

                        <div class="overlay">
                            <h3 class="mb-3">Babies</h3>
                            <a href="Products.html" class="btn" role="button">Shop now</a>
                        </div>

                    </div>
                </div>
                <div class="col mt-5">
                    <div class=" catg-card">
                        <img src="{{ asset('front_assets/Images/Capture.JPG') }}" class="card-img-top" alt="...">
                        <div class="overlay">
                            <h3 class="mb-3">Girls</h3>
                            <a href="Products.html" class="btn" role="button">Shop now</a>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="catg-card">
                        <img src="{{ asset('front_assets/Images/kids3.JPG') }}" class="card-img-top" alt="...">
                        <div class="overlay">
                            <h3 class="mb-3">Boys</h3>
                            <a href="Products.html" class="btn" role="button">Shop now</a>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="catg-card">
                        <img src="{{ asset('front_assets/Images/objects-showing-its-girl-expectancy_23-2150166726.jpg') }}"
                            class="card-img-top" alt="...">
                        <div class="overlay">
                            <h3 class="mb-3">Accessories</h3>
                            <a href="Products.html" class="btn" role="button">Shop now</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products -->
        <section>
            <div class="container mt-5 pt-3">
                <h3 class="text-center m-5">Products</h3>
                <div class="product-list text-center">
                    <ul class="nav text-center" id="nav-tab" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link nav-tab active" id="nav-all-product-tab" data-toggle="tab" data-route="{{ route('all-products') }}" data-target="#all-products" role="tab" aria-controls="nav-home" aria-selected="true">
                                All Products</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link nav-tab" id="nav-profile-tab" data-toggle="tab"  data-route="{{ route('new-products') }}" data-target="#new-products" role="tab" aria-controls="new-products" aria-selected="false">New Products</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link nav-tab" id="nav-contact-tab" data-toggle="tab"  data-route="{{ route('all-products') }}" data-target="#best-seller" role="tab" aria-controls="best-seller" aria-selected="false">Best seller</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link nav-tab" id="nav-last-tab" data-toggle="tab" data-target="#offers" role="tab" aria-controls="offers" aria-selected="false">Offers</button>
                        </li>
                    </ul>

                </div>

                <div class="tab-content">

                    <div class="tab-pane fade show active" id="all-products">
                        <div class="row justify-content-between mt-5" id="products-container">
                                    <div class="col-3 new-arrival">
                                        <div class="hover">
                                            <a href="#"><img
                                                    src="{{ asset('front_assets/Images/Capture2.jpg') }}"></a>
                                            <div class="product-icon">
                                                <a href="#" class="icon">
                                                    <span class="material-symbols-outlined">
                                                        favorite
                                                    </span>
                                                </a>
                                                <a href="#" class="icon">
                                                    <span class="material-symbols-outlined">
                                                        shopping_bag
                                                    </span>
                                                </a>
                                                <a href="#" class="icon">
                                                    <span class="material-symbols-outlined">
                                                        visibility
                                                    </span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="text-center mt-3">
                                            <a href="#" class="text-decoration-none">
                                                <p class="text-center text-dark fw-bold product-name"></p>
                                            </a>
                                            <div>
                                                <p class="product-price">EGP </p>
                                            </div>

                                        </div>

                                    </div>


                        </div>


                        <div class="pt-5 d-block m-auto text-center">
                            <button class="btn btn-primary btn-lg">Show All</button>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="new-products">
                        <div class="row justify-content-between mt-5">

                            <div class="col-3 new-arrival">
                                <div class="hover">
                                    <a href="#"><img
                                            src="{{ asset('front_assets/Images//Children-clothing.jpg') }}"></a>
                                    <div class="product-icon">
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                favorite
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                shopping_bag
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                visibility
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="text-decoration-none">
                                        <p class="text-center text-dark fw-bold"></p>
                                    </a>
                                    <div>
                                        <p>EGP </p>
                                    </div>

                                </div>

                            </div>

                        </div>
                        {{-- <div class="row justify-content-between pt-5">
                            <div class="col-3 new-arrival">
                                <div class="hover">
                                    <a href="#"><img
                                            src="{{ asset('front_assets/Images//Children-clothing.jpg') }}"></a>
                                    <div class="product-icon">
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                favorite
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                shopping_bag
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                visibility
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="text-decoration-none">
                                        <p class="text-center text-dark fw-bold">Pack
                                            Of Short Sleeve Bodysuit</p>
                                    </a>
                                    <div>
                                        <p>EGP 178.00</p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-3 new-arrival">
                                <div class="hover">
                                    <a href="#"><img
                                            src="{{ asset('front_assets/Images//Children-clothing.jpg') }}"></a>
                                    <div class="product-icon">
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                favorite
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                shopping_bag
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                visibility
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="text-decoration-none">
                                        <p class="text-center text-dark fw-bold">Pack
                                            Of Short Sleeve Bodysuit</p>
                                    </a>
                                    <div>
                                        <p>EGP 178.00</p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-3 new-arrival">
                                <div class="hover">
                                    <a href="#"><img
                                            src="{{ asset('front_assets/Images//Children-clothing.jpg') }}"></a>
                                    <div class="product-icon">
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                favorite
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                shopping_bag
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                visibility
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="text-decoration-none">
                                        <p class="text-center text-dark fw-bold">Pack
                                            Of Short Sleeve Bodysuit</p>
                                    </a>
                                    <div>
                                        <p>EGP 178.00</p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-3 new-arrival">
                                <div class="hover">
                                    <a href="#"><img
                                            src="{{ asset('front_assets/Images//Children-clothing.jpg') }}"></a>
                                    <div class="product-icon">
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                favorite
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                shopping_bag
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                visibility
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="text-decoration-none">
                                        <p class="text-center text-dark fw-bold">Pack
                                            Of Short Sleeve Bodysuit</p>
                                    </a>
                                    <div>
                                        <p>EGP 178.00</p>
                                    </div>

                                </div>

                            </div>

                        </div> --}}
                        <div class="pt-5 d-block m-auto text-center">
                            <button class="btn btn-primary btn-lg">Show All</button>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="best-seller">
                        <div class="row justify-content-between mt-5">
                            <div class="col-3 new-arrival">
                                <div class="hover">
                                    <a href="#"><img src="{{ asset('front_assets/Images/Capture.jpg') }}"></a>
                                    <div class="product-icon">
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                favorite
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                shopping_bag
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                visibility
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="text-decoration-none">
                                        <p class="text-center text-dark fw-bold">Pack
                                            Of Short Sleeve Bodysuit</p>
                                    </a>
                                    <div>
                                        <p>EGP 178.00</p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-3 new-arrival">
                                <div class="hover">
                                    <a href="#"><img src="{{ asset('front_assets/Images/Capture.jpg') }}"></a>
                                    <div class="product-icon">
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                favorite
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                shopping_bag
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                visibility
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="text-decoration-none">
                                        <p class="text-center text-dark fw-bold">Pack
                                            Of Short Sleeve Bodysuit</p>
                                    </a>
                                    <div>
                                        <p>EGP 178.00</p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-3 new-arrival">
                                <div class="hover">
                                    <a href="#"><img src="{{ asset('front_assets/Images/Capture.jpg') }}"></a>
                                    <div class="product-icon">
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                favorite
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                shopping_bag
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                visibility
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="text-decoration-none">
                                        <p class="text-center text-dark fw-bold">Pack
                                            Of Short Sleeve Bodysuit</p>
                                    </a>
                                    <div>
                                        <p>EGP 178.00</p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-3 new-arrival">
                                <div class="hover">
                                    <a href="#"><img src="{{ asset('front_assets/Images/Capture.jpg') }}"></a>
                                    <div class="product-icon">
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                favorite
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                shopping_bag
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                visibility
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="text-decoration-none">
                                        <p class="text-center text-dark fw-bold">Pack
                                            Of Short Sleeve Bodysuit</p>
                                    </a>
                                    <div>
                                        <p>EGP 178.00</p>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="row justify-content-between pt-5">
                            <div class="col-3 new-arrival">
                                <div class="hover">
                                    <a href="#"><img src="{{ asset('front_assets/Images/Capture.jpg') }}"></a>
                                    <div class="product-icon">
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                favorite
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                shopping_bag
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                visibility
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="text-decoration-none">
                                        <p class="text-center text-dark fw-bold">Pack
                                            Of Short Sleeve Bodysuit</p>
                                    </a>
                                    <div>
                                        <p>EGP 178.00</p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-3 new-arrival">
                                <div class="hover">
                                    <a href="#"><img src="{{ asset('front_assets/Images/Capture1.jpg') }}"></a>
                                    <div class="product-icon">
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                favorite
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                shopping_bag
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                visibility
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="text-decoration-none">
                                        <p class="text-center text-dark fw-bold">Pack
                                            Of Short Sleeve Bodysuit</p>
                                    </a>
                                    <div>
                                        <p>EGP 178.00</p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-3 new-arrival">
                                <div class="hover">
                                    <a href="#"><img src="{{ asset('front_assets/Images/Capture1.jpg') }}"></a>
                                    <div class="product-icon">
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                favorite
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                shopping_bag
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                visibility
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="text-decoration-none">
                                        <p class="text-center text-dark fw-bold">Pack
                                            Of Short Sleeve Bodysuit</p>
                                    </a>
                                    <div>
                                        <p>EGP 178.00</p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-3 new-arrival">
                                <div class="hover">
                                    <a href="#"><img src="{{ asset('front_assets/Images/Capture1.jpg') }}"></a>
                                    <div class="product-icon">
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                favorite
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                shopping_bag
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                visibility
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="text-decoration-none">
                                        <p class="text-center text-dark fw-bold">Pack
                                            Of Short Sleeve Bodysuit</p>
                                    </a>
                                    <div>
                                        <p>EGP 178.00</p>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="pt-5 d-block m-auto text-center">
                            <button class="btn btn-primary btn-lg">Show All</button>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="offers">
                        <div class="row justify-content-between mt-5">
                            <div class="col-3 new-arrival">
                                <div class="hover">
                                    <a href="#"><img src="{{ asset('front_assets/Images/Capture1.jpg') }}"></a>
                                    <div class="product-icon">
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                favorite
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                shopping_bag
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                visibility
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="text-decoration-none">
                                        <p class="text-center text-dark fw-bold">Pack
                                            Of Short Sleeve Bodysuit</p>
                                    </a>
                                    <div>
                                        <p>EGP 178.00</p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-3 new-arrival">
                                <div class="hover">
                                    <a href="#"><img src="{{ asset('front_assets/Images/Capture1.jpg') }}"></a>
                                    <div class="product-icon">
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                favorite
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                shopping_bag
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                visibility
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="text-decoration-none">
                                        <p class="text-center text-dark fw-bold">Pack
                                            Of Short Sleeve Bodysuit</p>
                                    </a>
                                    <div>
                                        <p>EGP 178.00</p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-3 new-arrival">
                                <div class="hover">
                                    <a href="#"><img src="{{ asset('front_assets/Images/Capture1.jpg') }}"></a>
                                    <div class="product-icon">
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                favorite
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                shopping_bag
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                visibility
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="text-decoration-none">
                                        <p class="text-center text-dark fw-bold">Pack
                                            Of Short Sleeve Bodysuit</p>
                                    </a>
                                    <div>
                                        <p>EGP 178.00</p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-3 new-arrival">
                                <div class="hover">
                                    <a href="#"><img src="{{ asset('front_assets/Images/Capture1.jpg') }}"></a>
                                    <div class="product-icon">
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                favorite
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                shopping_bag
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                visibility
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="text-decoration-none">
                                        <p class="text-center text-dark fw-bold">Pack
                                            Of Short Sleeve Bodysuit</p>
                                    </a>
                                    <div>
                                        <p>EGP 178.00</p>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="row justify-content-between pt-5">
                            <div class="col-3 new-arrival">
                                <div class="hover">
                                    <a href="#"><img src="{{ asset('front_assets/Images/Capture1.jpg') }}"></a>
                                    <div class="product-icon">
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                favorite
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                shopping_bag
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                visibility
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="text-decoration-none">
                                        <p class="text-center text-dark fw-bold">Pack
                                            Of Short Sleeve Bodysuit</p>
                                    </a>
                                    <div>
                                        <p>EGP 178.00</p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-3 new-arrival">
                                <div class="hover">
                                    <a href="#"><img src="{{ asset('front_assets/Images/Capture1.jpg') }}"></a>
                                    <div class="product-icon">
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                favorite
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                shopping_bag
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                visibility
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="text-decoration-none">
                                        <p class="text-center text-dark fw-bold">Pack
                                            Of Short Sleeve Bodysuit</p>
                                    </a>
                                    <div>
                                        <p>EGP 178.00</p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-3 new-arrival">
                                <div class="hover">
                                    <a href="#"><img src="{{ asset('front_assets/Images/Capture1.jpg') }}"></a>
                                    <div class="product-icon">
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                favorite
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                shopping_bag
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                visibility
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="text-decoration-none">
                                        <p class="text-center text-dark fw-bold">Pack
                                            Of Short Sleeve Bodysuit</p>
                                    </a>
                                    <div>
                                        <p>EGP 178.00</p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-3 new-arrival">
                                <div class="hover">
                                    <a href="#"><img src="{{ asset('front_assets/Images/Capture1.jpg') }}"></a>
                                    <div class="product-icon">
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                favorite
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                shopping_bag
                                            </span>
                                        </a>
                                        <a href="#" class="icon">
                                            <span class="material-symbols-outlined">
                                                visibility
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="text-decoration-none">
                                        <p class="text-center text-dark fw-bold">Pack
                                            Of Short Sleeve Bodysuit</p>
                                    </a>
                                    <div>
                                        <p>EGP 178.00</p>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="pt-5 d-block m-auto text-center">
                            <button class="btn btn-primary btn-lg">Show All</button>
                        </div>

                    </div>

                </div>




            </div>
        </section>

        <!-- Brands -->
        <div class="m-5 container text-center px-5">
            <h3 class="text-center">BRANDS</h3>
            <div class="row justify-content-between mt-5">
                <div class="div-brands col-2">
                    <img src="{{ asset('front_assets/Images//brands/logos-homepage-frigg_320x320.webp') }}">
                </div>
                <div class="div-brands col-2">
                    <img src="{{ asset('front_assets/Images//brands/logos-homepage-frigg_320x320.webp') }}">
                </div>
                <div class="div-brands col-2">
                    <img src="{{ asset('front_assets/Images//brands/logos-homepage-frigg_320x320.webp') }}">
                </div>
                <div class="div-brands col-2 ">
                    <img src="{{ asset('front_assets/Images//brands/logos-homepage-frigg_320x320.webp') }}">
                </div>
                <div class="div-brands col-2 ">
                    <img src="{{ asset('front_assets/Images//brands/logos-homepage-frigg_320x320.webp') }}">
                </div>
            </div>
            <div class="row justify-content-between mt-5">
                <div class="div-brands col-2">
                    <img src="{{ asset('front_assets/Images//brands/logos-homepage-frigg_320x320.webp') }}">
                </div>
                <div class="div-brands col-2">
                    <img src="{{ asset('front_assets/Images//brands/logos-homepage-frigg_320x320.webp') }}">
                </div>
                <div class="div-brands col-2">
                    <img src="{{ asset('front_assets/Images//brands/logos-homepage-frigg_320x320.webp') }}">
                </div>
                <div class="div-brands col-2 ">
                    <img src="{{ asset('front_assets/Images//brands/logos-homepage-frigg_320x320.webp') }}">
                </div>
                <div class="div-brands col-2 ">
                    <img src="{{ asset('front_assets/Images//brands/logos-homepage-frigg_320x320.webp') }}">
                </div>
            </div>

        </div>

        <!-- Latest Offers Start -->
        <section>
            <div class="container">
                <div class="latest-offer">
                    <div class>
                        <h3 class="text-white">Get Our <br>Latest Offers
                            News</h3>
                        <p class="text-white fs-4">Subscribe news latter</p>
                        <form>
                            <input type="email" placeholder="Enter your email">
                            <button>Subscribe Now</button>
                        </form>
                    </div>
                    <div>
                        <img src="{{ asset('../front_assets/Images/latest1.png') }}">
                    </div>

                </div>

            </div>
        </section>
    </main>
@endsection


@push('js')
    {{-- <script>
        $(document).ready(function() {

            fetchAll();

            function fetchAll() {

                $.ajax({
                    type: "GET",
                    url: "{{ route('all-products') }}",
                    dataType: "json",
                    success: function(response) {
                        $.each(response.products, function(key, item)) {

                        }
                    },
                });

            }

        });
    </script> --}}
@endpush
