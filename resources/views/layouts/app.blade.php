<!doctype html>
<html lang="en">
  <head>
    <title>Gisenyi &mdash;House-Renting WebSite</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css' ) }}">


    <link rel="stylesheet" href="{{ asset('css/template2.css' ) }}">
    <link rel="stylesheet" href="{{ asset('css/style.css' ) }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css' ) }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css' ) }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/animate.css' ) }}"> -->


    <style>
        .second{
            background-image: url('{{ asset('images/img/back.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .section-full{ padding: 99px 40px 40px 115px; }
        .pull-right {float: right !important;}
        .pull-left {float: left !important;}
        .cliquable{cursor: pointer;}
        /* #form
        {
          position: relative;
        }
         #form #email
        {
          width: 300px;
          background: #292929;
          outline: none;
          padding: 10px;
          border-radius: 6px;
          color: #fff;
          font-style: 18px;
        }
        #form .inputBox
        {
          position: relative;
        } */

    </style>
    @yield('header')

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
<div class="site-wrap">


    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-3">
            <h3 class="mb-0 site-logo"><a href="{{ route('welcome') }}" class="h2 mb-0"><small>Gisenyi Rental House</small><span class="text-primary"></span> </a></h3>
          </div>

          <div class="col-12 col-md-9 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="{{ route('welcome') }}" class="nav-link">Home</a></li>
                <li><a href="{{ route('about') }}" class="nav-link">About</a></li>
                <li><a href="{{ url('sendsuggestion') }}" class="nav-link">Suggestion</a></li>
                @auth
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                        @if(auth()->user()->isSpecial())
                        <a class="dropdown-item" target="_blank" href="{{ url('admin/properties') }}">Add property</a>
                        @elseif(auth()->user()->isAdmin() || auth()->user()->isAgent())
                        <a class="dropdown-item" target="_blank" href="{{ url('admin') }}">Admin</a>
                        @endif
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @else
                <li><a style=" padding: 5px 15px !important;" href="{{ route('login') }}" class="nav-link btn btn-primary login-btn">Login</a></li>
                @endauth

              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>

    @yield('content')


    <footer class="site-footer" style="padding-bottom:0;padding-top: 2em;">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Book the Perfect Accommodation in Gisenyi with up to 75% Discount! Compare the Best Accommodation in Gisenyi from the Largest Selection. Over 250 Thousands Offers. World of Vacation Rentals.</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#about-section" class="smoothscroll">Terms</a></li>
                  <li><a href="#about-section" class="smoothscroll">About Us</a></li>
                  <li><a href="#services-section" class="smoothscroll">Services</a></li>
                  <li><a href="#contact-section" class="smoothscroll">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3 footer-social">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-12">
            <div class="border-top pt-4">
              <p class="copyright">
                <small>
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script><a> All rights reserved | Gisenyi House-Renting</a>
                </small>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
</div>
  <script src="{{ asset('js/animate.js') }}"></script>
  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/jquery-ui.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  <script src="{{ asset('js/core.min.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>
  <!-- <script src="{{ asset('js/jquery.js') }}"></script> -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
@if(Route::currentRouteName() !== 'welcome')
<script>
$(document).ready(function() {
    var body = $("body");
    $('#sticky-wrapper').addClass('is-sticky');
});
$(document).scroll(function() {
  if (window.scrollY === 0) {
    setTimeout(() => {
      $('#sticky-wrapper').addClass('is-sticky')
    }, 50);
  }
});
</script>
@endif

  <script type="text/javascript">
  //here we get the value from the form
      var form = document.forms.myform,
          qty = form.qty,
          cost = form.cost,
            d1=document.getElementById("d1").value,
            d2=document.getElementById("d2").value,
            output = form.textbox5;
      window.calculate = function () {
      // here we start to calculate the number of month range
    function monthDiff(d1, d2) {
      var months;
      months = (d2.getFullYear() - d1.getFullYear()) * 12;
      months -= d1.getMonth();
      months += d2.getMonth();
      return months <= 0 ? 0 : months;
  }
    function test(d1, d2) {
        var diff = monthDiff(d1, d2);
        console.log(
            d1.toISOString().substring(0, 10),
            "to",
            d2.toISOString().substring(0, 10),
            ":",
            diff
        );
    }
        var k=monthDiff(
            new Date(d1), 
            new Date(d2)  
        );
      // endhere the num of moth
      //start of making calc
        var q = parseInt(qty.value, 10) || 0;
        output.value = (q * k).toFixed(2);
      //end of calc
      };
  </script>

<script>
function isEmpty(obj) {
    if (
        typeof obj !== "undefined" &&
        obj !== null &&
        obj != false &&
        (obj.length > 0 ||
            typeof obj == "number" ||
            typeof obj.length == "undefined") &&
        obj !== "undefined"
    )
        return false;
    else return true;
}

(function($) {
    $(document).ready(function() {
        var body = $("body");
        $('#sticky-wrapper').addClass('is-sticky')

        $(body).on("click", "[data-href]", function(e) {

            var css = $(this).attr("class");
            if (
                css.indexOf("scroll-to") == -1 &&
                css.indexOf("lightbox") == -1
            ) {
                var link = $(this).attr("data-href");
                if (link.indexOf("#") == 0) {
                    if (link != "#") {
                        $(link).scrollTo();
                    }
                    e.preventDefault();
                } else {
                    var target = $(this).attr("data-target");
                    if (!isEmpty(target) && target == "_blank")
                        window.open(link);
                    else document.location = link;
                }
            }
        });
    });


        //     c.on("initialized.owl.carousel", function() {
        //         initLightGalleryItem(c.find('[data-lightgallery="item"]'), 'lightGallery-in-carousel');
        //     });
        // // lightGallery
        // if (plugins.lightGallery.length) {
        //     for (var i = 0; i < plugins.lightGallery.length; i++) {
        //         initLightGallery(plugins.lightGallery[i]);
        //     }
        // }
        // // lightGallery item
        // if (plugins.lightGalleryItem.length) {
        //     // Filter carousel items
        //     var notCarouselItems = [];
        //     for (var z = 0; z < plugins.lightGalleryItem.length; z++) {
        //         if (!$(plugins.lightGalleryItem[z]).parents('.owl-carousel').length &&
        //             !$(plugins.lightGalleryItem[z]).parents('.swiper-slider').length &&
        //             !$(plugins.lightGalleryItem[z]).parents('.slick-slider').length) {
        //             notCarouselItems.push(plugins.lightGalleryItem[z]);
        //         }
        //     }
        //     plugins.lightGalleryItem = notCarouselItems;
        //     for (var i = 0; i < plugins.lightGalleryItem.length; i++) {
        //         initLightGalleryItem(plugins.lightGalleryItem[i]);
        //     }
        // }
        // // Dynamic lightGallery
        // if (plugins.lightDynamicGalleryItem.length) {
        //     for (var i = 0; i < plugins.lightDynamicGalleryItem.length; i++) {
        //         initDynamicLightGallery(plugins.lightDynamicGalleryItem[i]);
        //     }
        // }
})(jQuery);
</script>

<!-- <script>
  function validation()
  {
    var form = document.getElementById('form');
    var email = document.getElementById('email').value;
    var text = document.getElementById('text');
    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

      if(email.match(pattern))
      {
        form.classList.add('Valid');
        form.classList.remove('Invalid');
        text.innerHTML = 'Your Email Address In Valid';
        text.style.color = "#00ff00";
      }else
      {
        form.classList.remove('Valid');
        orm.classList.add('Invalid');
        text.innerHTML = 'Please Enter a Valid Address Email';
        text.style.color = "#ff0000";
      }

  }
</script> -->

  </body>
</html>
