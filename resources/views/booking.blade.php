@include('navbar')

<section class="w3l-breadcrumb">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">
            <h2>Booking</h2>
            <p><a href="/">Home</a> &nbsp; / &nbsp; Booking</p>
        </div>
    </div>  
</section>

<div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    <!-- @if(Session::has('message'))
        <div class="alert alert-success">
            {{Session::get('message')}}
        </div>
    @endif -->
</div> 

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

                        <form method="POST" action="{{ route('booking.store') }}" class="signin-form">
                            {{ csrf_field() }}
                            <div class="row book-form">
                                <div class="form-input col-md-6 col-sm-6 mt-3">
                                    <label>Names: </label>
                                    <input type="text" name="name" placeholder="Enter your Name" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-input col-md-6 col-sm-6 mt-3">
                                    <label>Email: </label>
                                    <input type="text" name="email" placeholder="Enter your Email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-input col-md-6 col-sm-6 mt-3">
                                    <label>Check-in Date:</label>
                                    <input type="date" name="checkin" placeholder="Select Date" value="{{ old('checkin') }}">
                                    @if ($errors->has('checkin'))
                                        <span class="text-danger">{{ $errors->first('checkin') }}</span>
                                    @endif
                                </div>
                                <div class="form-input col-md-6 col-sm-6 mt-3">
                                    <label>Check-out Date:</label>
                                    <input type="date" name="checkout" placeholder="Date" value="{{ old('checkout') }}">
                                    @if ($errors->has('checkout'))
                                        <span class="text-danger">{{ $errors->first('checkout') }}</span>
                                    @endif
                                </div>
                                <div class="form-input col-md-6 col-sm-6 mt-3">
                                    <label>Accommodation type:</label>
                                    <select class="selectpicker" name="accommodation" id="accommodation">
                                            <option disabled selected>Please select...</option>
                                            <option value="Single room (In shared unit)">Single room (In shared unit)</option>
                                            <option value="Full unit (2 rooms)">Full unit (2 rooms)</option>
                                        @if ($errors->has('accommodation'))
                                            <span class="text-danger">{{ $errors->first('accommodation') }}</span>
                                        @endif
                                    </select>
                                </div>
								<div class="form-input col-md-6 col-sm-6 mt-3">
                                    <label>Telephone:</label>
                                    <input type="text" name="phone" placeholder="Enter your Phone" value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                </div>
                                <div class="bottom-btn col-md-6 col-sm-6 mt-3 text-center">
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

<!-- <form action="{{ route('booking.store') }}" method="post">
    @csrf
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value=""></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value=""></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="number" name="phone" value=""></td>
        </tr>
        <tr>
        <tr>
            <td>checkin</td>
            <td><input type="date" name="checkin" value=""></td>
        </tr>
        <tr>
        <tr>
            <td>checkout</td>
            <td><input type="date" name="checkout" value=""></td>
        </tr>
        <tr>
        <tr>
            <td>Accommodation</td>
            <td>
            <label name="accommodation">Accommodation type:</label>
                <select class="selectpicker">
                    <option>Please select...</option>
                    <option>Single room (In shared unit)</option>
                    <option>Full unit (2 rooms)</option>
                </select></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" />
            </td>
        </tr>
    </table>
</form> -->


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