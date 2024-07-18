<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Personal Portofolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/my-login.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MeFamily
  * Template URL: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
        .div-6 {
      color: #fff;
      white-space: nowrap;
      justify-content: center;
      border-radius: 100px;
      box-shadow: 2px 4px 4px 0px rgba(0, 0, 0, 0.25);
      background-color: #669fd6;
      flex-grow: 1;
      padding: 15px 31px;
      font: 600 20px Poppins, sans-serif;
      border: none;
      outline: none;
      cursor: pointer;
      margin-left: 10px;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html"style="font-family: 'Garamond', sans-serif;">PERSONAL PORTOFOLIO</a></h1>
      <nav id="navbar" class="navbar">
  <!-- Uncomment below if you prefer to use an image logo -->
  <!-- <a href="index.html" class="logo"><img src="{{ asset('') }}img/logo.png" alt="" class="img-fluid"></a> -->
        <ul>
          <li><a href="/" class="nav-link">Home</a></li>
          <li><a href="profile" class="nav-link">Profile</a></li>
          <li><a href="contact" class="nav-link">Contact</a></li>
        </ul>

        <button onclick="location.href='login'" class="btn btn-primary login-btn">Login</button>

        <i class="bi bi-list mobile-nav-toggle"></i>
                      <style>
                      .navbar {
                      background-color:none;
                      padding: 1rem;
                      display: flex;
                      justify-content: space-between;
                      align-items: center;
                    }

                    .nav-link {
                      color: #fff;
                      text-decoration: none;
                      transition: color 0.2s ease;
                    }

                    .nav-link:hover {
                      color: #ccc;
                    }

                    .login-btn {
                      background-color: #337ab7;
                      color: #fff;
                      border: none;
                      padding: 0.5rem 1rem;
                      font-size: 1rem;
                      cursor: pointer;
                    }

                    .login-btn:hover {
                      background-color: #23527c;
                    }
                    </style>
</nav>
    </div>
  </header><!-- End Header -->

        <!-- Konten -->
        @yield('content')

        <footer id="footer" style="background-color: #FFFFF;">
          <div class="container">
             <h3 style="font-family: 'Garamond', sans-serif;">PERSONAL PORTOFOLIO</h3>
             <div class="social-links">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        <div class="copyright">
            &copy; Copyright <strong><span>Maharani</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/ -->
            Designed by <a href="https://bootstrapmade.com/">Bootstrap</a>
        </div>
    </div>
</footer><!-- End Footer -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>