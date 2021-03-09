@extends('layouts.app')

@section('content')
<section class="section-full">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Property details</h1>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('quarter', $property->quarter) }}">{{ $property->quarter ? $property->quarter->name : '' }}</a></li>
                    <li class="active">Single Property Page</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- Section Catalog Single Left-->
<section class="section-sm bg-default">
    <div class="container">
        @include('flash::message')
        <h2>{{ $property->address }}</h2>
        <hr>
        <div class="row row-45 row-md-60">
            <div class="col-sm-12 col-lg-8">
                <div class="product-carousel" data-lightgallery="group">
                    <!-- Slick Carousel-->
                    <div class="slick-slider slider carousel-parent" data-arrows="true" data-loop="false" data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel">
                        <div class="item"><a href="{{ $property->getImage() }}" data-lightgallery="item"><img src="{{ $property->getImage() }}" alt="" style="width:770px;height:520px;" ></a></div>
                        @foreach ($property->getImages() as $relatedImage)
                        <div class="item"><a href="{{ $relatedImage }}" data-lightgallery="item"><img src="{{ $relatedImage }}" alt="" style="width:770px;height:520px;"></a></div>
                        @endforeach
                    </div>
                    <div class="carousel-thumbnail slider slick-slider" id="child-carousel" data-for=".carousel-parent" data-arrows="true" data-loop="false" data-dots="false" data-swipe="false" data-items="3" data-sm-items="3" data-md-items="5" data-lg-items="5" data-xl-items="5" data-slide-to-scroll="1" data-md-vertical="true">
                        <div class="item"><img src="{{ $property->getImage() }}" alt="" style="max-width:112px;max-height:76px;min-height:76px;"></div>
                        @foreach ($property->getImages() as $relatedImage)
                            <div class="item"><img src="{{ $relatedImage }}" alt="" style="max-width:112px;max-height:76px;min-height:76px;"></div>
                        @endforeach
                    </div>
                </div>
                <div class="row row-60 d-lg-none">
                    <div class="col-sm-12 col-md-6">
                        <div class="text-left">
                            <ul class="list-unstyled small">
                                <li><span class="text-darker">Created:</span>
                                    <time datetime="2020">{{ $property->created_at->diffForHumans() }}</time>
                                </li>
                                <li><span class="text-darker">Updated:</span>
                                    <time datetime="2015">{{ $property->updated_at->diffForHumans() }}</time>
                                </li>
                            </ul>
                            <ul class="describe-1 list-unstyled">
                                <li>
                                    <span class="icon-square">
                                        <svg x="0px" y="0px" viewbox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
                                            <g>
                                                <path d="M3.6,75.7h3.6V7.3l85.7-0.1v85.3l-16.7-0.1l0-16.7c0-0.9-0.4-1.9-1-2.5c-0.7-0.7-1.6-1-2.5-1h-69V75.7h3.6                          H3.6v3.6H69L69,96c0,2,1.6,3.6,3.6,3.6l23.8,0.1c1,0,1.9-0.4,2.5-1c0.7-0.7,1-1.6,1-2.5V3.6c0-1-0.4-1.9-1-2.5                          c-0.7-0.7-1.6-1-2.5-1L3.6,0.1C1.6,0.2,0,1.7,0,3.7v72c0,0.9,0.4,1.9,1,2.5c0.7,0.7,1.6,1,2.5,1V75.7z"></path>
                                                <path d="M38.1,76.9v-9.5c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v9.5c0,1.3,1.1,2.4,2.4,2.4                          C37,79.3,38.1,78.2,38.1,76.9"></path>
                                                <path d="M38.1,50.7V15c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v35.7c0,1.3,1.1,2.4,2.4,2.4                          C37,53.1,38.1,52.1,38.1,50.7"></path>
                                                <path d="M2.4,38.8h33.3c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H2.4c-1.3,0-2.4,1.1-2.4,2.4                          C0,37.8,1.1,38.8,2.4,38.8"></path>
                                                <path d="M35.7,46h31c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4h-31c-1.3,0-2.4,1.1-2.4,2.4                          C33.3,44.9,34.4,46,35.7,46"></path>
                                                <path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                          C76.2,44.9,77.3,46,78.6,46"></path>
                                                <path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                          C76.2,44.9,77.3,46,78.6,46"></path>
                                                <path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                          C79.9,46,81,44.9,81,43.6"></path>
                                                <path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                          C79.9,46,81,44.9,81,43.6"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    {{ $property->ground_size }} Sq ft

                                </li>
                                <li><span class="icon icon-sm icon-darker hotel-icon-10"></span>{{ $property->bathrooms }} Bathrooms</li>
                            </ul>
                            <ul class="describe-2 list-unstyled preffix-2">
                                <li><span class="icon icon-sm icon-darker hotel-icon-05"></span>{{ $property->bedrooms }} Bedrooms</li>
                                <li><span class="icon icon-sm icon-darker hotel-icon-26"></span>{{ $property->garages }} Garages</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-module col-sm-12 col-md-6">
                        <div class="price">
                            <p class="small">Price</p>
                            <p><span class="h4">{{ $property->price }}</span></p>
                            <div class="btn-group-isotope">
                                <a class="btn btn-primary btn-primary-transparent btn-md btn-min-width-lg" href="{{ route('order',  $property) }}">Rent now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h4>Description</h4>
                        <p>{!! nl2br($property->description) !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="catalog-sidebar row row-60">
                    <div class="sidebar-module col-lg-12 text-left order-lg-0">
                        <ul class="list-unstyled small">
                            <li><span class="text-darker">Created:</span>
                                <time datetime="2015">{{ $property->created_at->diffForHumans() }}</time>
                            </li>
                            <li><span class="text-darker">Updated:</span>
                                <time datetime="2020">{{ $property->updated_at->diffForHumans() }}</time>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-module col-md-6 col-lg-12 order-lg-2">
                        <ul class="describe-1 list-unstyled">
                            <li>
                                <span class="icon-square">
                                    <svg x="0px" y="0px" viewbox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
                                        <g>
                                            <path d="M3.6,75.7h3.6V7.3l85.7-0.1v85.3l-16.7-0.1l0-16.7c0-0.9-0.4-1.9-1-2.5c-0.7-0.7-1.6-1-2.5-1h-69V75.7h3.6                      H3.6v3.6H69L69,96c0,2,1.6,3.6,3.6,3.6l23.8,0.1c1,0,1.9-0.4,2.5-1c0.7-0.7,1-1.6,1-2.5V3.6c0-1-0.4-1.9-1-2.5                      c-0.7-0.7-1.6-1-2.5-1L3.6,0.1C1.6,0.2,0,1.7,0,3.7v72c0,0.9,0.4,1.9,1,2.5c0.7,0.7,1.6,1,2.5,1V75.7z"></path>
                                            <path d="M38.1,76.9v-9.5c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v9.5c0,1.3,1.1,2.4,2.4,2.4                      C37,79.3,38.1,78.2,38.1,76.9"></path>
                                            <path d="M38.1,50.7V15c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v35.7c0,1.3,1.1,2.4,2.4,2.4                      C37,53.1,38.1,52.1,38.1,50.7"></path>
                                            <path d="M2.4,38.8h33.3c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H2.4c-1.3,0-2.4,1.1-2.4,2.4                      C0,37.8,1.1,38.8,2.4,38.8"></path>
                                            <path d="M35.7,46h31c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4h-31c-1.3,0-2.4,1.1-2.4,2.4                      C33.3,44.9,34.4,46,35.7,46"></path>
                                            <path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                      C76.2,44.9,77.3,46,78.6,46"></path>
                                            <path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                      C76.2,44.9,77.3,46,78.6,46"></path>
                                            <path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                      C79.9,46,81,44.9,81,43.6"></path>
                                            <path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                      C79.9,46,81,44.9,81,43.6"></path>
                                        </g>
                                    </svg>
                                </span>
                                {{ $property->ground_size }} Sq ft
                            </li>
                            <li><span class="icon icon-sm icon-darker hotel-icon-10"></span>{{ $property->bathrooms }} Bathrooms</li>
                        </ul>
                        <ul class="describe-2 list-unstyled preffix-2">
                            <li><span class="icon icon-sm icon-darker hotel-icon-05"></span>{{ $property->bedrooms }} Bedrooms</li>
                            <li><span class="icon icon-sm icon-darker hotel-icon-26"></span>{{ $property->garages }} Garages</li>
                        </ul>
                    </div>

                    <div class="sidebar-module col-md-6 col-lg-12 order-lg-3">
                        <div class="price">
                            <p class="small">Price: <span class="h4">{{ $property->price }}</span><b>Frw</b> </p>
                            <label>Registed By:</label>
                            <span class="text-primary">{{ $property->user['name'] }}</span>.

                            <div class="btn-group-isotope">
                                <a class="btn btn-primary btn-primary-transparent btn-md btn-min-width-lg" href="" data-toggle="modal" data-target="#modalPayment">Rent now</a>
                            </div>
                        </div>
                    </div>
                    <!-- to put in the href of the button or enchor <a> in the rent now -->
                    <!-- {{ route('order',  $property) }} -->
                    <div class="sidebar-module col-md-6 col-lg-12 order-lg-7">
                        <h4 class="pt-3 text-primary">Company Information</h4>
                            <div class="col-md-6 col-lg-12">
              <img src="{{asset('images/FB_IMG_1578249104342.jpg')}}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <div class="property-agent">
                                    <h4 class="title-agent text-primary">Julien Mupenzi</h4>
                                    <p class="color-text-a">
                                    Book the Perfect Accommodation in Gisenyi with up to 75% Discount! Compared to the Best Accommodation in the World of Vacation Rentals.
                                    </p>
                                    <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between">
                                        <strong>Phone:</strong>
                                        <span class="color-text-a">+(250) 780 221 504</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Mobile:</strong>
                                        <span class="color-text-a">+243 971 212 038</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Email:</strong>
                                        <span class="color-text-a">julienmupenzi@gmail.com</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Skype:</strong>
                                        <span class="color-text-a">ir_julienmupenzi@hotmail.com</span>
                                    </li>
                                    </ul>
                                </div>
                                </div>
                                <div class="col-md-12 col-lg-12 order-lg-7">
                                    <a class="btn btn-primary text-white" href="{{ url('sendsuggestion') }}">Send Message</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="/create" method="post" class="form-control" name="myform" onclick="calculate()">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="modal fade" id="modalPayment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header" style="background-color: coral; color: #fd7e14;">
                    <h5 class="modal-title text-center text-white" id="exampleModalLongTitle" style="text-align: center; font-weight: bolder; font-family: cursive;">Rent with The Safe Payment Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="border: groove; border-color: chocolate;">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" style="color: black; font-family: cursive; font-weight: bold;">Name:</label>
                            <input type="text" class="form-control text-primary text-bold" name="pname" value="{{ Auth::user()->name }}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="" style="color: black; font-family: cursive; font-weight: bold;">Quarter:</label>
                            <input type="email" class="form-control text-primary text-bold" name="pemail" value="{{ $property->quarter->name }}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" style="color: black; font-family: cursive; font-weight: bold;">Telephone:</label>
                            <input type="text" class="form-control text-primary text-bold" name="ptel" placeholder="Enter Your Phone" required>
                        </div>
                        <div class="col-md-6">
                            <label for="" style="color: black; font-family: cursive; font-weight: bold;">Email:</label>
                            <input type="email" class="form-control text-primary text-bold" name="pemail" value="{{ Auth::user()->email }}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" style="color: black; font-family: cursive; font-weight: bold;">NID or PassPort:</label>
                            <input type="text" class="form-control text-primary text-bold" name="nidorpassport" placeholder="Enter Your NID or PassPort" required>
                        </div>
                        <div class="col-md-6">
                            <label for="" style="color: black; font-family: cursive; font-weight: bold;">Adress:</label>
                            <input type="text" class="form-control text-primary text-bold" name="pemail" value="{{ $property->quarter ? $property->quarter->name : '' }}, {{ $property->address }}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" style="color: black; font-family: cursive; font-weight: bold;">Entry Date:</label>
                            <input type="text" id="d1" value="02/22/2010" class="form-control text-primary text-bold" name="pentrydate" required>
                        </div>
                        <div class="col-md-6">
                            <label for="" style="color: black; font-family: cursive; font-weight: bold;">End Date:</label>
                            <input type="text" id="d2" value="04/03/2010" class="form-control text-primary text-bold" name="penddate" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" style="color: black; font-family: cursive; font-weight: bold;">Rent Per Month:</label>
                            <input type="text" name="qty" class="form-control text-primary text-bold" value="{{ $property->price }}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="" style="color: black; font-family: cursive; font-weight: bold;">Total Per Contract:</label>
                            <input type="text" class="form-control text-primary text-bold" name="textbox5" readonly>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"  style="background-color: silver; border: groove;">
                    <button class="btn btn-primary" style="font-weight: bolder; font-family: cursive;">Pay With MTN</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" style=" font-weight: bolder; font-family: cursive;">Cancel Payment</button>
                </div>
                </div>
            </div>
        </div>
    </form>

</section>
@endsection
