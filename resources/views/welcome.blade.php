@extends("Layout.layout")
@section("Content")

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

<div class="row mt-5">
<div class="col-sm-12 col-md-6 col-lg-6 mt-5">
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


{{-- container --}}
<div class="container-fluid d-flex align-items-center justify-content-center text-center"
    style="background-image: url('assets/img/whitebg.jpg'); width:100%; height:750px; background-size: cover; background-position: center; background-repeat: no-repeat;">

    <div class="row w-100">
        <div class="col-12 d-flex flex-column align-items-center justify-content-center">
            <span style="color: #f4335b; font-size: 20px;">How It’s Work</span>
            <h1>Work assured to be 100% dependable.</h1>

            {{-- Image --}}
            <div>
                <img src="{{ asset('assets/img/mens.png') }}" alt="men" class="img-fluid">
            </div>
            {{-- Image End --}}

        </div>
        {{-- Closing col-12 --}}

{{-- second --}}
<div class="col-12 text-start">
    <h2 class="text-center">The Experts in Local TV Antenna Installation Services in Your Area</h2>

    <p>
        Best Antennas is dedicated to ensuring your utmost satisfaction, providing a 100% assurance on all our services. Moreover, in regard to our antennas crafted right here in Australia, we firmly back their excellence with a lifelong warranty for all fresh installations. Our squad of extensively skilled technicians is not only fully insured but also based in your local vicinity, guaranteeing swift and expert service. They have the know-how needed to offer you competitive rates, excellent service, and invaluable guidance. Here’s a rundown of our antenna installation procedure:
    </p>

    <ol>
        <li>In a thorough process of choosing the right antenna for your requirements.</li>
        <li>We’ll skillfully set it up in the spot you’ve chosen.</li>
        <li>We meticulously test all components within the antenna system and fine-tune your TVs to ensure flawless reception.</li>
        <li>
            <i>Please note that installation methods may vary depending on the type of home structure, whether it’s a tile roof, a Colorbond roof, or a flat roof.</i>
        </li>
    </ol>
</div>



    </div>
    {{-- Closing row --}}
</div>
{{-- Closing container-fluid --}}





<div class="container-fluid bg-overlay" style="background-image: url('assets/img/backgr.webp'); width:100%; height:600px; background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="row">
        <div class="col-md-12 text-light text-center">
            <h2>
                Enhance Your Television Experience With <em>Best Antennas</em>! Get In Touch With Us Today For Crystal-Clear Channels And Flawless Reception
            </h2>
            <div class="btn-group">
                <a href="#" class="btn btn-danger">Contact Us</a>
                <a href="tel:03070501946" class="btn btn-outline-light">03 7050 1946</a>
            </div>
        </div>
    </div>

</div>



@endsection
