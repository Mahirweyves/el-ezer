
@include('navbar')

<div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</div> 

<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <video muted loop autoplay oncanplay="this.muted=true" playsinline style="max-height:600px; min-width: 100%; object-fit: fill;" class="w-100" src="assets/images/homepage.mp4" type="video.mp4"></video>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="">
                            <h5 class="display-5 mt-3 animated slideInDown" style="color:#8B0000;">El-Ezer Apartments</h5>
                            <h6 class="display-5 text-white mb-md-5 animated zoomIn">Your Perfect Space, Where Every Corner Feels Like Home.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!-- /main-slider -->
 
<section class="w3l-availability-form" id="booking">
    <!-- /w3l-availability-form-section -->
    <div class="w3l-availability-form-main py-5">
        <div class="container pt-lg-3 pb-lg-5">
            <div class="forms-top">
                <div class="form-right">
                    <div class="form-inner-cont">
                        <h3 class="title-small text-center">Request Booking</h3>

                        @if(Session::has('message'))
                            <script>
                                swal("Message","{{ Session::get( 'message' ) }}",'success',{
                                    button:true,
                                    button:"OK",

                                });
                            </script>
                        @endif

                        <form action="{{ route('booking.store') }}" method="post" class="signin-form">
                            {{ csrf_field() }}
                            <div class="row book-form">
                                <div class="form-input col-md-4 col-sm-6 mt-3">
                                    <label>Names: </label>
                                    <input type="text" name="name" placeholder="Enter your Name" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-input col-md-4 col-sm-6 mt-3">
                                    <label>Email: </label>
                                    <input type="text" name="email" placeholder="Enter your Email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-input col-md-4 col-sm-6 mt-3">
                                    <label>Telephone:</label>
                                    <input type="text" name="phone" placeholder="Enter your Phone" value="{{ old('phone') }}">
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                <div class="form-input col-md-4 col-sm-6 mt-3">
                                    <label>Check-in Date:</label>
                                    <input type="date" name="checkin" placeholder="Select Date" value="{{ old('checkin') }}">
                                    @if ($errors->has('checkin'))
                                        <span class="text-danger">{{ $errors->first('checkin') }}</span>
                                    @endif
                                </div>
                                <div class="form-input col-md-4 col-sm-6 mt-3">
                                    <label>Check-out Date:</label>
                                    <input type="date" name="checkout" placeholder="Date" value="{{ old('checkout') }}">
                                    @if ($errors->has('checkout'))
                                        <span class="text-danger">{{ $errors->first('checkout') }}</span>
                                    @endif
                                </div>
                                <div class="form-input col-md-4 col-sm-6 mt-3">
                                    <label>Accommodation type:</label>
                                    <select class="selectpicker" name="accommodation" id="accommodation">
                                            <option disabled selected>Please select...</option>
                                            <option value="Single room (In shared unit)">Single room (In shared unit)</option>
                                            <option value="Full Unit (2 rooms)">Full unit (2 rooms)</option>
                                        @if ($errors->has('accommodation'))
                                            <span class="text-danger">{{ $errors->first('accommodation') }}</span>
                                        @endif
                                    </select>
                                </div>
                                <div class="bottom-btn col-md-4 col-sm-6 mt-3">
                                    <!-- <label>Book </label> -->
                                    <button type="submit" class="btn btn-style btn-primary w-100 px-2">Submit your booking request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //w3l-availability-form-section -->
<!-- about -->
<section class="w3l-about py-5">
	<div class="container py-sm-4">
		<div class="row">
			<div class="col-lg-6 about-left mb-md-0 mb-5">
				<h4 class="title-big">Live, Relax, Repeat: Your Oasis Awaits.</h4>
				<p class="mt-3">Welcome to <b style="color: var(--primary);">El-Ezer</b>, 
                    where modern living meets comfort and convenience. 
                    Nestled in Nyamirambo-Kigali city, our community offers a unique blend of style, 
                    amenities, and location that cater to your lifestyle needs. <br><br>
                    Whether you're searching for a spacious one-bedroom, 
                    or a family-friendly two-bedroom apartment, we have the perfect home for you. 
                    Explore our website to discover all that <b style="color: var(--primary);">El-Ezer</b>  has to offer, 
                    and let us help you find your ideal living space today.</p>
				<a href="{{ url('about') }}" class="btn btn-style btn-primary mt-sm-5 mt-4">Learn About Us</a>
			</div>
			<div class="col-lg-6 about-right position-relative mt-lg-0 mt-5">
				<img src="assets/images/top.jpg" alt="" class="img-fluid img-border mt-4" />
				<img src="assets/images/bottom.jpg" alt="" class="img-fluid position-absolute img-position" />
			</div>
		</div>
	</div>
</section>



<!-- //about -->
<!-- <div class="best-rooms py-5">
    <div class="container py-lg-5 py-sm-4">
        <h3 class="title-big text-center"><ins>Rooms</ins></h3>
        <div class="ban-content-inf row py-lg-3">
            <div class="maghny-gd-1 col-lg-6">
                <div class="maghny-grid">
                    <figure class="effect-lily">
                        <img class="img-fluid" src="assets/images/room1.jpg" alt="">
                        <figcaption class="w3set-hny">
                            <div>
                                <h4 class="top-text">Luxury Hotel and Best Resort
                                    <span>Peaceful Place to stay</span></h4>
                                <p>From 20$ </p>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="room-info">
                        <h3 class="room-title"><a href="room-single.html">Luxury Hotel</a></h3>
                        <ul class="mb-3">
                            <li><span class="fa fa-users"></span> 2 Guests</li>
                            <li><span class="fa fa-bed"></span> Double bed</li>
                            <li><span class="fa fa-bed"></span> 15sqft</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A recusandae, illum sequi numquam
                            tempora voluptates?</p>
                        <a href="#book" class="btn btn-style btn-primary mt-sm-4 mt-3">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="maghny-gd-1 col-lg-6">
                <div class="maghny-grid">
                    <figure class="effect-lily">
                        <img class="img-fluid" src="assets/images/room1.jpg" alt="">
                        <figcaption class="w3set-hny">
                            <div>
                                <h4 class="top-text">Luxury Hotel and Best Resort
                                    <span>Peaceful Place to stay</span></h4>
                                <p>From 20$ </p>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="room-info">
                        <h3 class="room-title"><a href="room-single.html">Luxury Hotel</a></h3>
                        <ul class="mb-3">
                            <li><span class="fa fa-users"></span> 2 Guests</li>
                            <li><span class="fa fa-bed"></span> Double bed</li>
                            <li><span class="fa fa-bed"></span> 15sqft</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A recusandae, illum sequi numquam
                            tempora voluptates?</p>
                        <a href="#book" class="btn btn-style btn-primary mt-sm-4 mt-3">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="maghny-gd-1 col-lg-6 mt-lg-0 mt-4">
                <div class="row">
                    <div class="maghny-gd-1 col-6">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="assets/images/room2.jpg" alt="" />
                                <figcaption>
                                    <div>
                                        <h4>Family Rooms <span> Resort</span></h4>
                                        <p>From 20$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-6">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="assets/images/room3.jpg" alt="" />
                                <figcaption>
                                    <div>
                                        <h4>Double Rooms <span> Resort</span></h4>
                                        <p>From 20$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-6 mt-4">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="assets/images/room4.jpg" alt="" />
                                <figcaption>
                                    <div>
                                        <h4>Luxury Rooms <span> Resort</span></h4>
                                        <p>From 20$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-6 mt-4">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="assets/images/room5.jpg" alt="" />
                                <figcaption>
                                    <div>
                                        <h4>Resort Rooms <span> Resort</span></h4>
                                        <p>From 20$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<section class="w3l-index3">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="row">
                <div class="col-lg-6 left-wthree-img text-righ">
                    <!-- <div class="position-relative">
                        <img src="assets/images/videobg.png" alt="" class="img-fluid" />
                        <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                            <span class="video-play-icon">
                                <span class="fa fa-play"></span>
                            </span>
                        </a>
                        <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                            <iframe muted=1 src="assets/images/homepage.mp4" type="video.mp4" allowfullscreen=""></iframe>
                            
                        </div>
                    </div> -->
                        <div class="position-relative">
                            <video id="myVideo" class="img-fluid" style="border-radius:10px;" controls muted poster="assets/images/slide1.png">
                                <source src="assets/images/homepage.mp4" type="video/mp4">
                                <source src="assets/images/homepage.mp4" type="video/ogg">
                            </video>
                            <button onclick="myFunction()"></button>

                            <p id="demo"></p>

                            <script>
                                function myFunction() {
                                  var x = document.getElementById("myVideo").muted;
                                  document.getElementById("demo").innerHTML = x;
                                }
                            </script>
                        </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5 about-right-faq align-self">
                    <h6 style="color: var(--primary);">Let's have a virtual Tour</h6>
                
                    <ul class="w3l-right-book mt-4">
                        <li><span class="fa fa-check" aria-hidden="true"></span>We make the best for all our customers</li>
                        <li><span class="fa fa-check" aria-hidden="true"></span>Free parking lot and wifi</li>
                        <li><span class="fa fa-check" aria-hidden="true"></span>Single rooms and full Unit(2 rooms)</li>
                        <li><span class="fa fa-check" aria-hidden="true"></span>Enjoy an Inkindi experience</li>
                    </ul>
                    <a href="{{ url('about') }}" class="btn btn-style btn-primary mt-4">Check all packages</a>
                </div>
            </div>
        </div>
    </div>
</section>





<div class="best-rooms w3l-blog">
    <div class="container py-lg-5 py-sm-4">
    <h3 class="title-big text-center py-2"><ins>Accommodation Options</ins></h3>
        <div class="ban-content-inf row">
            <div class="maghny-gd-1 col-lg-6 col-md-6">
                <div class="maghny-grid">
                    <figure class="effect-lily">
                        <img class="img-fluid" src="assets/images/bed1.png" alt="">
                        <figcaption>
                            <div>
                                <!-- <h4 class="top-text">Luxury Hotel room
                                </h4> -->
                                <!-- <p class="top-text">Book for 20$ </p> -->
                            </div>
                        </figcaption>
                    </figure>
                    <div class="room-info">
                        <h3 class="room-title"><a href="#url">Single room (in shared unit)</a></h3>
                        <ul class="mb-3">
                            <li>$60/day</li>
                            <li>$300/week</li>
                            <li>$700/month</li> 
                        </ul>
                        <ul class="mb-3">
                            <li><span class="fa fa-bed"></span> 1 Bed</li>
                            <li><span class="fa fa-bath"></span> 1 bath</li>
                            <li><span class="fa fa-wifi"></span> Wifi</li>
                            <li><span class="fa fa-solid fa-kitchen-set"></span> Shared kitchen</li>
                            <li><span class="fa fa-television"></span> Shared living room</li>
                            <li><span class="fa fa-cutlery"></span> Shared Dining space</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="maghny-gd-1 col-lg-6 col-md-6 mt-md-0 mt-4">
                <div class="maghny-grid">
                    <figure class="effect-lily">
                        <img class="img-fluid" src="assets/images/bed3.png" alt="">
                    </figure>
                    <div class="room-info">
                        <h3 class="room-title"><a href="#url">Full unit</a></h3>
                        <ul class="mb-3">
                            <li>$70/day</li>
                            <li>$350/week</li>
                            <li>$800/month</li> 
                        </ul>
                        <ul class="mb-3">
                            <li><span class="fa fa-bed"></span> 2 Beds</li>
                            <li><span class="fa fa-bath"></span> 2.5 baths</li>
                            <li><span class="fa fa-wifi"></span> Wifi</li>
                            <li><span class="fa fa-solid fa-kitchen-set"></span> Kitchen</li>
                            <li><span class="fa fa-television"></span> Living room</li>
                            <li><span class="fa fa-cutlery"></span> Dining space</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- quotation -->
<div class="quotation py-5">
	<div class="container py-xl-5 py-lg-3">
		<div class="welcome-left text-center py-md-5 py-3">
            <h3> Discover what it feels like to love where you live at El-Ezer. <p class="text-white">Live, Relax and enjoy your holidays.</p></h3>
		</div>
	</div>
</div>
<!-- //quotation -->

  
@include('footer')


<!-- Template JavaScript -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->

<!-- script for owlcarousel -->
<script>
  $(document).ready(function () {
    $('.owl-testimonial').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for owlcarousel -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>


<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<!-- disable body scroll which navbar is in active -->

<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>