@extends('layouts.app')

@section('content')
    <div class="site-blocks-cover overlay" style="background-image: url(images/back1.jpg);" data-aos="fade" id="home-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-11 mt-lg-5 text-center" >
                    <div class="single-text owl-carousel">
                        <div class="slide">
                            <h1 class="text-capitalize" data-aos="fade-up">House Renting Solution</h1>
                            <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">Rent Solutions is a unique real estate company specializing exclusively in Rental and Property Management Services. We provide you with quality renters. You can receive extensive exposure for their property and only pay for a successfully placed tenant. As a Property Owner, YOU can decide the level of service you need.</p>
                            <div data-aos="fade-up" data-aos-delay="100">
                            </div>
                        </div>
                        <div class="slide">
                            <h1 class="text-capitalize" data-aos="fade-up">Where Ever You Are</h1>
                            <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">Rent your new home on Housing Anywhere, the leading accommodation marketplace for internationals. ... Where will you go? in Rwanda and here soon moving to interntional accomodations ...</p>
                        </div>
                        <div class="slide">
                            <h1 class="text-capitalize" data-aos="fade-up">Excellent Service Provider</h1>
                            <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">Keep your home in great shape by letting us handle its maintenance. We respond to requests, dispatch service providers, and make sure the work meets our ...</p>
                        </div>
                    </div>
                    <div class="home-btn">
                        <a href="https://www.facebook.com/Bot-102941647845225/?modal=suggested_action&notif_id=1581001232812542&notif_t=page_user_activity" target="_blank" class="btn btn-md btn-primary">Get Started</a>
                        <a href="" class="btn btn-md btn-primary btn-facebook"><span class="icon-facebook"></span></a>
                    </div>
                </div>
            </div>
            <ul class="social-links">
                <li class="social"><a href="#home" class="nav-link"><span class="icon-facebook"></span></a></li>
                <li class="social"><a href="#home" class="nav-link"><span class="icon-twitter"></span></a></li>
                <li class="social"><a href="#home" class="nav-link"><span class="icon-instagram"></span></a></li>
                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-linkedin"></span></a></li>
            </ul>
        </div>
    </div>
    <section class="section-md bg-gray text-center text-lg-left" style="margin-top: -3em;">
        <div class="container">
            <h2>Our Advantages</h2>
            <hr>
            <div class="row row-60 clearleft-custom-2">
                <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="media media-mod-1 flex-column align-items-center flex-lg-row align-items-lg-start">
                        <div class="media-left"><span class="linecons-location4 icon icon-lg bg-primary"></span></div>
                        <div class="media-body">
                            <h4>Various Locations</h4>
                            <p>Search by The Whole Gisenyi City then by Quarters to find an apartment  overlooking the lake in Ouest Province, within walking distance of the beach in Rubavu or in the heart of Gisenyi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <div class="media media-mod-1 flex-column align-items-center flex-lg-row align-items-lg-start">
                        <div class="media-left"><span class="linecons-camera7 icon icon-lg bg-primary"></span></div>
                        <div class="media-body" data-aos="zoom-out-down">
                            <h4>View Apartments</h4>
                            <p>View apartment listings with photos, HD videos, InsideView virtual tours, 3D floor plans, and more, while also choosing the apartment and community features that you want.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                    <div class="media media-mod-1 flex-column align-items-center flex-lg-row align-items-lg-start">
                        <div class="media-left"><span class="linecons-blockade icon icon-lg bg-primary"></span></div>
                        <div class="media-body">
                            <h4>Privacy and Security</h4>
                            <p>Renters insurance helps keep your belongings secure, whether they're on your desk, under your couch, or in some cases, even in your car's glove box.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                    <div class="media media-mod-1 flex-column align-items-center flex-lg-row align-items-lg-start">
                        <div class="media-left"><span class="linecons-banknote icon icon-lg bg-primary"></span></div>
                        <div class="media-body">
                            <h4>No Commission</h4>
                            <p>You will therefore appreciate this opportunity to acquire a high-quality apartment for rent without having to pay any commission to our real estate agency.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-md text-center text-md-left">
        <div class="container">
            <h2 class="section-title mb-3" style="margin-top: -2em;">Recent Properties</h2>
            <hr>
            <div class="row row-45 row-md-60 clearleft-custom">
                @foreach ($properties as $property)
                    <div class="col-sm-12 col-md-6 col-lg-4 wow fadeInUp" data-aos="fade-up" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="thumbnail">
                            <a class="img-link" href="{{ route('property', $property) }}">
                                <img src="{{ $property->getImage() }}" alt="{{ $property->address }}" style="height:250px;" width="370">
                                <span class="thumbnail-price">{{ $property->price }}Frw</span></a>
                            <div class="caption">
                                <h4><a href="{{ route('property', $property) }}">{{ $property->address }}</a></h4>
                                <ul class="describe-1">
                                    <li>
                                        <span class="icon-square2">
                                            <svg x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
                                                <g>
                                                    <path d="M3.6,75.7h3.6V7.3l85.7-0.1v85.3l-16.7-0.1l0-16.7c0-0.9-0.4-1.9-1-2.5c-0.7-0.7-1.6-1-2.5-1h-69V75.7h3.6                            H3.6v3.6H69L69,96c0,2,1.6,3.6,3.6,3.6l23.8,0.1c1,0,1.9-0.4,2.5-1c0.7-0.7,1-1.6,1-2.5V3.6c0-1-0.4-1.9-1-2.5                            c-0.7-0.7-1.6-1-2.5-1L3.6,0.1C1.6,0.2,0,1.7,0,3.7v72c0,0.9,0.4,1.9,1,2.5c0.7,0.7,1.6,1,2.5,1V75.7z"></path>
                                                    <path d="M38.1,76.9v-9.5c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v9.5c0,1.3,1.1,2.4,2.4,2.4                            C37,79.3,38.1,78.2,38.1,76.9"></path>
                                                    <path d="M38.1,50.7V15c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v35.7c0,1.3,1.1,2.4,2.4,2.4                            C37,53.1,38.1,52.1,38.1,50.7"></path>
                                                    <path d="M2.4,38.8h33.3c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H2.4c-1.3,0-2.4,1.1-2.4,2.4                            C0,37.8,1.1,38.8,2.4,38.8"></path>
                                                    <path d="M35.7,46h31c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4h-31c-1.3,0-2.4,1.1-2.4,2.4                            C33.3,44.9,34.4,46,35.7,46"></path>
                                                    <path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                            C76.2,44.9,77.3,46,78.6,46"></path>
                                                    <path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                            C76.2,44.9,77.3,46,78.6,46"></path>
                                                    <path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                            C79.9,46,81,44.9,81,43.6"></path>
                                                    <path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                            C79.9,46,81,44.9,81,43.6"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    {{ $property->ground_size }} Sq ft
                                    </li>
                                    <li><span class="icon icon-sm icon-darker hotel-icon-10"></span>{{ $property->bathrooms }} Bathrooms</li>
                                </ul>
                                <ul class="describe-2">
                                    <li><span class="icon icon-sm icon-darker hotel-icon-05"></span>{{ $property->bedrooms }} Bedrooms</li>
                                    <li><span class="icon icon-sm icon-darker hotel-icon-26"></span>{{ $property->garages }} Garages</li>
                                </ul>
                                <p>{{ Helper::substring($property->description) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalProperty">
            view all properties
            </button>
        </div>
    </section>

    <div class="modal fade" id="modalProperty" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center; color: coral; font-weight: bolder; font-family: cursive;">Available Quarters in Gisenyi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                @foreach ($quarters as $quarter)
                <div class="col-md-6">
                    <div class="card border-dark mb-3 cliquable" style="max-width: 18rem;" data-href="{{ route('quarter', $quarter) }}" data-target="_blank">
                        <div class="card-header text-center" style="color: darkorange; font-family: cursive;">{{ $quarter->name }}</div>
                        <div class="card-body text-dark">
                            {{-- <h5 class="card-title">Dark card title</h5> --}}
                            <button type="button" class="btn btn-primary" style="background: sienna; border-color: #fd7e14; color: white; font-family: cursive;">
                            Number of properties <span class="badge badge-light">({{ $quarter->properties->count() }})</span>
                            <span class="sr-only">Number of properties</span>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="modal-footer"  style="background-color: black; border: groove;">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
@endsection
