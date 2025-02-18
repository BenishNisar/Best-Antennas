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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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

    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>


</div>
</div>

</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
