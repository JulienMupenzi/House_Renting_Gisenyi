@extends('layouts.app')

@section('content')
<section class="section-full">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Quarter ({{ $quarter->name }})</h1>
                <p></p>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li style="color:white">Property Catalog</li>
                    <li class="active">Single Property Page</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="section-md text-center text-md-left">
    <div class="container">
        <h2 class="section-title p-4" style="margin-top: -2em; font-family: cursive;">Properties within ({{ strtoupper($quarter->name) }}) quarter</h2>
        <hr>
        <div class="row row-45 row-md-60 clearleft-custom">
            @foreach ($properties as $property)
                <div class="col-sm-12 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="thumbnail">
                        <a class="img-link" href="{{ route('property', $property) }}"><img src="{{ $property->getImage() }}" alt="{{ $property->address }}" style="width:370px;height:220px;" ><span class="thumbnail-price">{{ $property->price }}</span></a>
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
                            <a class="btn btn-primary" href="{{ route('property', $property) }}">More details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
@endsection
