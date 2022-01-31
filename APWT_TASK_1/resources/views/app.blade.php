<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- BootStrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom CSS  -->
    <link href="css/globalcss.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- NavBar Started -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light container">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('service')}}">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('teams')}}">Our Teams</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('aboutUs')}}">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contact')}}">Contact us</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
    <!-- NavBar Ended -->
    <div class="container mb-5">
        <div class="text-center">
            @yield('content')
        </div>
    </div>
    <!-- Footed Started -->
    <footer className="mt-5 mb-2 text-white custom-bg-footer pt-5 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4 classList='text-white'>Company Name <span className='text-danger'>Up</span></h4>
                        <p><small>4967 Sardis Sta, Victoria 8007, Montreal.</small></p>
                        <p><small>+1 246-345-0695</small></p>
                        <p><small>Info@company.Com</small></p>
                    </div>
                    <div class="col">
                        <h5>Navigations</h5>
                        <p>About Us</p>
                        <p>Blog</p>
                        <p>Services</p>
                        <p>FAQs Page</p>
                    </div>
                    <div class="col">
                        <h5>Help & Support</h5>
                        <p>Documentation</p>
                        <p>Live Chat</p>
                        <p>Privacy</p>
                        <p>Mail Us</p>
                    </div>
                    <div class="col">
                        <h5>Download Apps</h5>
                        <div className="border-3">
                            <h6>Google Play</h6>
                            <p><small>Get it Now</small></p>
                        </div>
                        <div className="border-3">
                            <h6>App Store</h6>
                            <p><small>Now it Available</small></p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </footer>
    <!-- Footed edned -->
</body>
<!-- BootStrap JS  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>