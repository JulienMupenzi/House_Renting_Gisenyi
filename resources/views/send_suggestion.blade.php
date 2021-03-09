@extends('layouts.app')

@section('content')
    <section class="site-section bg-light" id="contact-section" data-aos="fade">
        <div class="container box">
            <div class="row mb-5">

                @if(count($errors)> 0)
                <div class="alert alert-primary alert-block">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                
                <div class="col-12">
                    <h2 class="section-title mb-3" style="margin-top: -1em;">Contact Us</h2>
                </div>
            </div>
            <div class="row" style="height: 512px; background-color: darkblue;">
                <div class="col-md-6 mb-md-0 mb-5">
                <form method="POST"  id="form" action="{{ url('sendsuggestion') }}" class="p-5">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <h2 class="h4 text-primary mb-5" style="margin-top: -1em; font-weight: bold;font-size: 40px;font-weight: 900;color: #fd7e1; font-family: monospace;">Contact Form</h2>
                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <input type="text" id="fname" name="fname" class="form-control" placeholder="First-name" required/>
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="lname" name="lname" class="form-control" placeholder="Last-name" required />
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="text"  name="telephone" class="form-control" placeholder="Enter Telephone" required/>
                            </div>
                        </div>
                        <div class="row form-group inputBox">
                            <div class="col-md-12">
                                <input type="email" id="email" name="email" class="form-control" onkeydown="validation()" placeholder="Email"required/>
                                <span id="text"></span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="subject" id="subject" name="subject" class="form-control" placeholder="Subject" required/>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <textarea name="message" id="message" name="message" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."required></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <input type="submit" name="send" mouseonclick="validation()" class="btn btn-primary" value="Send Message" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
                    <div class="row" mb-5>
                        <dir id="main-containt">
                            <div class="responsive">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3988.057881345141!2d29.256353314276883!3d-1.7021096367000152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2srw!4v1580475316992!5m2!1sfr!2srw" width="510" height="355" frameborder="1" style="border:1; margin-left: -70px; margin-top: 60px;" ></iframe>
                            </div>
                        </dir>
                    </div>
                    


                </div>
            </div>

                    <div class="row" mb-5 style="margin: -56px; margin-top: -73px; margin-left: 349px;">
                        <div class="col-md-4 text-center">
                            <p class="mb-4">
                                <span class="icon-room d-block h2 text-primary"></span>
                                <a href="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3988.057881345141!2d29.256353314276883!3d-1.7021096367000152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2srw!4v1580475316992!5m2!1sfr!2srw" style="color: white;">UTB/Gisenyi, Rwanda</a>
                            </p>
                         </div>
                        <div class="col-md-4 text-center">
                             <p class="mb-4">
                                <span class="icon-phone d-block h2 text-primary"></span>
                                <a href="#"  style="color: white;">+250 780 221 504</a>
                            </p>
                        </div>
                        <div class="col-md-4 text-center">
                            <p class="mb-0">
                                <span class="icon-mail_outline d-block h2 text-primary"></span>
                                <a href="#"  style="color: white;">gisenyi-house@solution.com</a>
                            </p>
                        </div>
                    </div>
        </div>
    </section>
@endsection