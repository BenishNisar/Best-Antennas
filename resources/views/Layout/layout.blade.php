<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Antennas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <!-- Header -->
    <div class="container-fluid bg-light py-2">
        <div class="container d-flex align-items-center justify-content-between">
            <img src="{{ asset('assets/img/Logos.png') }}" alt="Best Antennas Logo" width="100px" style="margin-left:-70px;">
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center me-4">
                    <i class="fas fa-phone-alt text-danger me-2"></i>
                    <span class="fw-bold">Call Us:</span>
                    <h5 class="ms-2 mb-0">03 7050 1946</h5>
                </div>
                <div class="d-flex align-items-center me-4">
                    <i class="fas fa-envelope text-danger me-2"></i>
                    <span class="fw-bold">Email:</span>
                    <h5 class="ms-2 mb-0">info@bestantennas.com.au</h5>
                </div>
                <div class="d-flex align-items-center me-4">
                    <i class="fas fa-clock text-danger me-2"></i>
                    <span class="fw-bold">Timing:</span>
                    <h5 class="ms-2 mb-0 text-primary bg-light px-2 py-1 rounded">7am to 7pm</h5>
                </div>
                <button class="btn btn-dark">FREE QUOTES</button>
            </div>
        </div>
    </div>

 <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <div class="container-fluid">
        <!-- Location Button attached to the left -->
        <button style="width:200px;height:50px; border-radius:none;background-color:#f4335b;color:white;font-size:20px;" class="btn  dropdown-toggle me-3" id="locationDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            Our Location
        </button>
        <ul class="dropdown-menu" aria-labelledby="locationDropdown">
            <li><a class="dropdown-item" href="#">New York</a></li>
            <li><a class="dropdown-item" href="#">Los Angeles</a></li>
            <li><a class="dropdown-item" href="#">Chicago</a></li>
        </ul>

        <!-- Navbar Toggler for smaller screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="#">Web Development</a></li>
                        <li><a class="dropdown-item" href="#">SEO Optimization</a></li>
                        <li><a class="dropdown-item" href="#">Digital Marketing</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
        </div>

        <!-- Social Media Icons (Facebook & Instagram) -->
        <div class="d-flex">
            <a href="https://www.facebook.com" class="text-light me-3" target="_blank">
                <i style="font-size:25px;" class="fab fa-facebook fa-lg"></i>
            </a>
            <a href="https://www.instagram.com" class="text-light" target="_blank">
                <i style="font-size:25px;" class="fab fa-instagram fa-lg"></i>
            </a>
        </div>
    </div>
</nav>


{{-- sidebar --}}
<div id="#carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset("assets/img/banner1.gif")  }}" class="d-block w-100" alt="slider_one">
      </div>
      <div class="carousel-item">
        <img src="{{asset("assets/img/banner2.gif")  }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset("assets/img/banner3.jpg")  }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset("assets/img/banner4.jpg")  }}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
{{-- sidebar --}}

{{-- container --}}
<div class="container mt-5">
    <div class="row">
        <div class="cardform col-sm-12 col-md-6 col-lg-6">
            <!-- Form -->
            <h5>Get In Touch Today</h5>
            <form action="">
                <div class="mb-3">
                    <input type="text" class="form-control rounded" placeholder="Full Name" name="" id="">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control rounded" placeholder="Email Address" name="" id="">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control rounded" placeholder="Phone Number" name="" id="">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control rounded" placeholder="Address" name="" id="">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control rounded" placeholder="City" name="" id="">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control rounded" placeholder="Services" name="" id="">
                </div>
                <div class="mb-3">
                    <input type="checkbox" class="form-check-input" id="">
                    <label for="" class="form-check-label ms-2">Subscribe to newsletter</label>
                </div>
                <div class="mb-3">
                    <input type="submit" value="Submit Form" style="border-radius: 50px;font-family:Arial, Helvetica, sans-serif;" class="btn btn-dark w-100">
                </div>
            </form>
            <!-- Form -->
        </div>



        <div class="col-sm-12 col-md-6 col-lg-6 mt-5" >
            <h1>Best Antennas: Bring your TV to life</h1>
            <p>Introducing our Best Antennas Service – the solution for a sensational TV viewing experience! Are you tired of dealing with frequent pixelation, and missing out on your favorite shows? Look no further! Our cutting-edge Best Antennas Service is here to revolutionize your TV-watching journey.</p>

            <!-- Phone Icon in Center -->
            <div style="color:black;width:60px;height:60px;background-color:#f4335b;border-radius:50%;font-size:30px;display:inline-flex;align-items:center;justify-content:center; margin-bottom: 20px;">
                <i class="fas fa-phone-alt text-light"></i>
            </div>

            <!-- Phone Number and Contact Now -->
            <h3 style="display: inline;">03 7050 1946</h3>
            <br />
            <span style="font-size:20px;margin-left:70px;">Contact Now</span>

        </div>







    </div>
</div>






{{--container  --}}



{{-- container-fluids with cards --}}
<div class="container-fluid mt-5" style="background-image: url('assets/img/services_bg.avif'); background-size: cover; background-position: center; background-repeat: no-repeat; border-radius: 15px; padding: 40px;">
<h5 class="text-center">Our Services</h5>
<h1 class="text-center">The Best Services For You
</h1>
<div class="row">

    <div class="col-md-4 col-lg-4">
        <div class="card custom-card" style="width: 18rem; height: 500px;">
            <img src="{{ asset('assets/img/Cctv-Install-1.jpg') }}" class="card-img-top" alt="..." style="height: 250px;">
            <div class="card-body text-center">
                <h5 class="card-title">CCTV Camera Installation</h5>
                <p class="card-text">
                    Are you thinking about enhancing security for your home or business?
                </p>
                <a href="#" class="btn btn-dark text-light">Read More</a>
            </div>
        </div>
    </div>


{{-- two --}}
<div class="col-md-4 col-lg-4">
    <div class="card custom-card" style="width: 18rem; height: 500px;">
        <img src="{{ asset('assets/img/tv-antenna-install-1.jpg') }}" class="card-img-top" alt="..." style="height: 250px;">
        <div class="card-body text-center">
            <h5 class="card-title">
                Digital Antennas
                Digital Antenna Installation</h5>
            <p class="card-text">
                Experts in the Industry Offering Their Expertise in Installing Digital TV Antennas in Your Area.
            </p>
            <a href="#" class="btn btn-dark text-light">Read More</a>
        </div>
    </div>
</div>


{{--three  --}}
<div class="col-md-4 col-lg-4">
    <div class="card custom-card" style="width: 18rem; height: 500px;">
        <img src="{{ asset('assets/img/Cctv-Install-1.jpg') }}" class="card-img-top" alt="..." style="height: 250px;">
        <div class="card-body text-center">
            <h5 class="card-title">
                TV Wall Mounting</h5>
            <p class="card-text">
                Our expert technicians will help you select the best wall bracket to suit your specific requirements, ensuring a smooth and trouble-free installation.
            </p>
            <a href="#" class="btn btn-dark text-light">Read More</a>
        </div>
    </div>
</div>


{{-- four --}}


<div class="col-md-4 col-lg-4 mt-5">
    <div class="card custom-card" style="width: 18rem; height: 500px;">
        <img src="{{ asset('assets/img/tv-antenna-install-1.jpg') }}" class="card-img-top" alt="..." style="height: 250px;">
        <div class="card-body text-center">
            <h5 class="card-title">CCTV Camera Installation</h5>
            <p class="card-text">
                Are you thinking about enhancing security for your home or business?
            </p>
            <a href="#" class="btn btn-dark text-light">Read More</a>
        </div>
    </div>
</div>


<div class="col-md-4 col-lg-4 mt-5">
    <div class="card custom-card" style="width: 18rem; height: 500px;">
        <img src="{{ asset('assets/img/Cctv-Install-1.jpg') }}" class="card-img-top" alt="..." style="height: 250px;">
        <div class="card-body text-center">
            <h5 class="card-title">CCTV Camera Installation</h5>
            <p class="card-text">
                Are you thinking about enhancing security for your home or business?
            </p>
            <a href="#" class="btn btn-dark text-light">Read More</a>
        </div>
    </div>
</div>


<div class="col-md-4 col-lg-4 mt-5">
    <div class="card custom-card" style="width: 18rem; height: 500px;">
        <img src="{{ asset('assets/img/Cctv-Install-1.jpg') }}" class="card-img-top" alt="..." style="height: 250px;">
        <div class="card-body text-center">
            <h5 class="card-title">CCTV Camera Installation</h5>
            <p class="card-text">
                Are you thinking about enhancing security for your home or business?
            </p>
            <a href="#" class="btn btn-dark text-light">Read More</a>
        </div>
    </div>
</div>


</div>
{{-- row --}}
</div>
{{--container  --}}




{{-- container --}}
<div class="container">
    <div class="row">
        <!-- First Column (4 Images) -->
        <div class="col-md-6 col-lg-4">
            <div class="row">
                <!-- Row 1 -->
                <div class="col-6 text-center">
                    <img src="{{ asset('assets/img/services.png') }}" class="img-fluid" width="100">
                    <h6 class="text-center">Service on the Same Day
                    </h6>
                </div>
                <div class="col-6 text-center">
                    <img src="{{ asset('assets/img/20years.png') }}" class="img-fluid" width="100">
                    <h6 class="text-center">20 Years Experience</h6>

                </div>

                <!-- Row 2 -->
                <div class="col-6 text-center">
                    <img src="{{ asset("assets/img/hand.png")}}" class="img-fluid" width="100">
                    <h6 class="text-center">0 initial cost
                    </h6>

                </div>
                <div class="col-6 text-center">
                    <img src="{{ asset("assets/img/check.png")}}" class="img-fluid" width="100">
                    <h6 class="text-center">Offer for Pensioner and free quote
                    </h6>
                </div>

                <div class="col-6 text-center">
                    <img src="{{ asset("assets/img/dollar.png")}}" class="img-fluid" width="100">
                    <h6 class="text-center">0 initial cost
                    </h6>

                </div>
                <div class="col-6 text-center">
                    <img src="{{ asset("assets/img/tv.png")}}" class="img-fluid" width="100">
                    <h6 class="text-center">Offer for Pensioner and free quote
                    </h6>
                </div>


            </div>
        </div>


        <!-- Second Column (2 Images - One on Top, One Bottom) -->
        <div class="col-md-6 col-lg-4 d-flex flex-column justify-content-between align-items-center">
            <img src="{{ asset('assets/img/Front-post.jpg') }}" style="border-radius:50%; width:300px;" class="img-fluid my-2">
            <img src="{{ asset('assets/img/by.jpg') }}" style="border-radius:50%; width:300px;position:relative;top:-70px;" class="img-fluid my-2">
        </div>


        <!-- Third Column (3 Images) -->
        <div class="col-md-4 col-lg-4">
            <div class="row">
                <div class="col-3">
                    <img src="{{ asset("assets/img/one.png") }}" class="img-fluid my-2" width="100">
                </div>
                <div class="col-3">
                    <img src="{{ asset("assets/img/two.jpeg") }}" class="img-fluid my-2" width="100">
                </div>
                <div class="col-3">
                    <img src="{{ asset("assets/img/one.png") }}" class="img-fluid my-2" width="100">
                </div>
                <div class="col-3">
                    <img src="{{ asset("assets/img/four.jpeg") }}" class="img-fluid my-2" width="100">
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <img src="{{ asset("assets/img/five.jpg") }}" class="img-fluid my-2" width="100">
                </div>
                <div class="col-3">
                    <img src="{{ asset("assets/img/six.png") }}" class="img-fluid my-2" width="100">
                </div>
                <div class="col-3">
                    <img src="{{ asset("assets/img/seven.jpg") }}" class="img-fluid my-2" width="100">
                </div>
                <div class="col-3">
                    <img src="{{ asset("assets/img/eight.png") }}" class="img-fluid my-2" width="100">
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <img src="{{ asset("assets/img/one.png") }}" class="img-fluid my-2" width="100">
                </div>
                <div class="col-3">
                    <img src="{{ asset("assets/img/two.jpeg") }}" class="img-fluid my-2" width="100">
                </div>
                <div class="col-3">
                    <img src="{{ asset("assets/img/one.png") }}" class="img-fluid my-2" width="100">
                </div>
                <div class="col-3">
                    <img src="{{ asset("assets/img/four.jpeg") }}" class="img-fluid my-2" width="100">
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <img src="{{ asset("assets/img/five.jpg") }}" class="img-fluid my-2" width="100">
                </div>
                <div class="col-3">
                    <img src="{{ asset("assets/img/six.png") }}" class="img-fluid my-2" width="100">
                </div>
                <div class="col-3">
                    <img src="{{ asset("assets/img/seven.jpg") }}" class="img-fluid my-2" width="100">
                </div>
                <div class="col-3">
                    <img src="{{ asset("assets/img/eight.png") }}" class="img-fluid my-2" width="100">
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <img src="{{ asset("assets/img/one.png") }}" class="img-fluid my-2" width="100">
                </div>
                <div class="col-3">
                    <img src="{{ asset("assets/img/two.jpeg") }}" class="img-fluid my-2" width="100">
                </div>
                <div class="col-3">
                    <img src="{{ asset("assets/img/one.png") }}" class="img-fluid my-2" width="100">
                </div>
                <div class="col-3">
                    <img src="{{ asset("assets/img/four.jpeg") }}" class="img-fluid my-2" width="100">
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <img src="{{ asset("assets/img/five.jpg") }}" class="img-fluid my-2" width="100">
                </div>
                <div class="col-3">
                    <img src="{{ asset("assets/img/six.png") }}" class="img-fluid my-2" width="100">
                </div>

            </div>


        </div>

    </div>
</div>


{{-- container --}}






{{-- container--}}
<div class="container-fluid" style="background-image: url('assets/img/superhero-banner.png');width:100%;height:500px; background-size: cover; background-position: center; background-repeat: no-repeat; ">
<div class="row">

</div>
</div>
{{-- superheros --}}



{{-- container--}}
<div class="container-fluid mt-5" >

<div class="row">
<div class="col-sm-12 col-md-6 col-lg-6">
<h2>About Our Company
</h2>
<p>At Best Antennas, we're the experts you can rely on for everything related to antennas. With many years of experience in installing antennas, fixing them, and mounting TVs, we've become the top choice for many happy customers.</p>
<h6>We're here to help you out.
</h6>
<p>Our group, known as one of the most trusted in Australia, is dedicated to providing fast and easy solutions for any problems with your antenna.</p>
<a href="#" class="btn text-light" style="background-color:#f4335b;">Read More</a>

</div>


    <!-- Second Column (2 Images - One on Top, One Bottom) -->
    <div class="col-md-6 col-lg-4 d-flex flex-column justify-content-between align-items-center">
        <img src="{{ asset('assets/img/by.jpg') }}" style=" width:300px;height:350px;" class="img-fluid my-2">
        <img src="{{ asset('assets/img/Front-post.jpg') }}" style="width:300px;height:350px;position: relative;top:-70px;left:90px;" class="img-fluid my-2">

    </div>

    </div>
    </div>




<!-- footer -->
<footer>
    <div class="footer-body  mt-5" style="background-color:#161921;">
  <div class="container-fluid">
  <div class="row">
  <div class="col-md-3 text-light mt-5">
   <ul class="navbar-nav">


    <li class="nav-item"><a href="index.html" style="text-decoration: none; color: white;">  <h5> About Our Company </h5> </a></li>
    <li class="nav-item mt-4"><a href="about.html" style="text-decoration: none; color: white;">Best Antennas: Specialists in delivering a perfect TV signal. Our dedication lies in providing best quality, precision, and ensuring customer satisfaction.</a></li>
    <li class="nav-item mt-3"><a href="#" style="text-decoration: none; color: white;"><i style="font-size:25px;" class="fab fa-facebook fa-lg"></i>                <i style="font-size:25px;" class="fab fa-instagram fa-lg"></i>

    </a></li>

   </ul>



  </div>
  <!-- col -->
  <div class="col-md-3 text-light mt-5">
    <ul class="navbar-nav">


     <li class="nav-item "><h6><a href="#" style="text-decoration: none; color: white;" ><h5>Quicks Links </h5> </a></li>
     <li class="nav-item text-light"><a href="#" style="text-decoration: none; color: white;" >Home</a></li>
     <li class="nav-item text-light"><a href="#" style="text-decoration: none; color: white;" >About Us</a></li>
     <li class="nav-item text-light"><a href="#" style="text-decoration: none; color: white;" >Services </a></li>
     <li class="nav-item text-light"> <a href="#" style="text-decoration: none; color: white;" > Contact Us </a></li>
     <li class="nav-item text-light"><a href="#" style="text-decoration: none; color: white;" > Terms and Conditions  </a> </li>

    </ul>



   </div>
   <!-- col -->


   <div class="col-md-3 text-light mt-5">
    <ul class="navbar-nav">


      <li class="nav-item"><a href="#" style="color: white;text-decoration: none;"><h5>Our Services</h5></a></li>
      <li class="nav-item"><a href="#" style="text-decoration: none;color: white;">CCTV Installation</a></li>
      <li class="nav-item"> <a href="#" style="text-decoration: none;color: white;" > Digital Antenna Installation</a></li>
      <li class="nav-item"> <a href="#" style="text-decoration: none;color: white;" >Fextel Installation</a></li>
      <li class="nav-item"> <a href="#" style="text-decoration: none;color: white;" > MATV & Commerical </a></li>
     </ul>

  </div>
   <!-- col -->
   <div class="col-md-3 text-light mt-5">
    <ul class="navbar-nav">
    <li class="nav-item"><a href="#" style="color: white;text-decoration: none;"><h5>Contact Us</h5></a></li>
      <li class="nav-item"><a href="#" style="text-decoration: none;color: white;">   03070501946 </a> </li>
      <li class="nav-item"> <a href="#" style="text-decoration: none;color: white;" >
        info@bestantennas.com.au</a></li>
      <li class="nav-item"> <a href="#" style="text-decoration: none;color: white;">
        Australia </a></li>



     </ul>

  </div>
   <!-- col -->
  <hr class="mt-3" style="border: 2px solid red;">
  <div class="col-md-12 text-light">
    <div class="d-flex align-items-center justify-content-between">
        <img src="{{ asset('assets/img/Logos.png') }}" height="80px">
        <h5 class="mb-0">Copy designed By Benish Nisar Khan</h5>
    </div>
</div>



   <!-- col -->


   <!-- col -->
   <!-- col -->


  </div>

  <!-- row -->

    </div>
    <!-- footerbody -->
   </div>

  </footer>
  <!-- footer -->



</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
