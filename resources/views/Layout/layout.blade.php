<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Antennas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- favicon --}}
    <link rel="shortcut icon" href="{{ asset("assets/img/Logos.png") }}" type="image/x-icon">

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

@yield("Content")

<!-- footer -->



<footer>
    <div class="footer-body" style="background-color:#161921;">
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
        <h5 class="mb-0">Copyright © 2024 Best Antennas Developed By
<a style="text-decoration:none;" href="#">Web Octane</a>
        </h5>
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
