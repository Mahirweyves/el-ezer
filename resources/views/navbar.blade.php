<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="El-Ezer" name="keywords">

    <title>El-Ezer Apartments</title>
 
    <link href="/favicon.ico" rel="icon">
    <link href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  crossorigin="anonymous" referrerpolicy="no-referrer" />     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- favicon -->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest"> -->
    <link type="text/css" rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>
<!--w3l-header-->

<header class="w3l-header-nav sticky-top">
	<!--/nav-->
	<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
		<div class="container">
			<a class="navbar-brand" href="/">
			    <!-- <img src="assets/images/hotels.png" alt="Your logo" style="height:35px;" /> Inkindi</a> -->
				<img src="" alt="" style="height:35px;" />El-Ezer</a>
			<!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.html">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
                <!-- <span class="my-1 mx-2 close">X</span> -->
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item {{ Request::is('/') ? 'active':'' }}">
						<a class="nav-link" href="/">Home</a>
					</li>
					<li class="nav-item {{ Request::is('about') ? 'active':'' }}">
						<a class="nav-link" href="/about">About</a>
					</li>
					<!-- <li class="nav-item {{ Request::is('rooms') ? 'active':'' }}">
						<a class="nav-link" href="{{ url('rooms') }}">Rooms</a>
					</li> -->
					<li class="nav-item {{ Request::is('contact') ? 'active':'' }}">
						<a class="nav-link" href="{{ url('contact') }}">Contact</a>
					</li>
				</ul>
                <button type="button" class="btn btn-primary ml-2">
				    <a href="booking" class="ml-3 book btn-style text-white">Book Now</a>
                </button>
                
				<!-- Button trigger modal -->
				<!-- <button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#exampleModal">
				    <a href="#" class="book text-white btn-style">Book Now</a>
                </button> -->
			</div>
		</div>
	</nav>
	<!--//nav-->
</header>
<!-- //w3l-header -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Request Booking</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <section class="w3l-availability-form" id="booking">
    <!-- /w3l-availability-form-section -->
    <div class="w3l-availability-form-main">
        <div class="container">
            <div class="forms-top">
                <div class="form-right">
                    <div class="form-inner-cont">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                     
                        <form method="POST" action="{{ route('booking.store') }}" >
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
                                    <select class="selectpicker">
                                        <option>Please select...</option>
                                        <option>Single room (In shared unit)</option>
                                        <option>Full unit (2 rooms)</option>
                                    </select>
                                    @if ($errors->has('accommodation'))
                                        <span class="text-danger">{{ $errors->first('accommodation') }}</span>
                                    @endif
                                </div>
								<div class="form-input col-md-6 col-sm-6 mt-3">
                                    <label>Telephone:</label>
                                    <input type="text" name="phone" placeholder="Enter your Phone" value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                </div>
                                <div class="bottom-btn col-md-6 col-sm-6 mt-3">
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
          </div>
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-style btn-secondary w-100 px-2" data-dismiss="modal">Close</button> -->
            <button type="submit" class="btn btn-style btn-primary w-100 px-2">Submit your booking request</button>
          </div>
        </div>
      </div>
    </div>

    