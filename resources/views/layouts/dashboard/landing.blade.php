<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Create a stylish landing page for your business startup and get leads for the offered services with this free HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>TA - Muhamad Rian Aprilyawan</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext"
        rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/arkatama.png">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

        <!-- Image Logo -->
        {{-- <a class="navbar-brand logo-image" href="index.html"><img src="images/arkatama1.svg" alt="alternative"></a> --}}

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="https://github.com/RianAprilyawan">Contact</a>
                </li>

                @if (auth()->check())
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ route('logout') }}">Logout</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ route('register') }}"></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ route('login') }}">Login</a>
                    </li>
                @endif


            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x twitter"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1><span class="turquoise">Selamat Datang </span> Welcome Welcome </h1>
                            <p class="p-large">Lorem ipsum is a placeholder text commonly used to demonstrate the visual
                                form of a document or a typeface without relying on meaningful content.
                                Lorem ipsum may be used as a placeholder before the final copy is available.</p>


                            @if (Auth::check())
                                <a class="btn-solid-lg page-scroll" href="{{ route('dashboard') }}">Dashboard</a>
                            @else
                                <a class="btn-solid-lg page-scroll" href="{{ route('login') }}">Login</a>
                            @endif


                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="images/header-teamwork.svg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->

    </div> <!-- end of col -->
    </div> <!-- end of row -->
    </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->

    </div> <!-- end of col -->
    </div> <!-- end of row -->
    </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->


    </div> <!-- end of swiper-container -->
    </div> <!-- end of slider-container -->
    <!-- end of card slider -->

    </div> <!-- end of col -->
    </div> <!-- end of row -->
    </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of testimonials -->


    <!-- About -->
    <div id="about" class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>About The Team</h2>
                    <p class="p-heading p-large">Meat our team of specialized marketers and business developers which
                        will help
                        you research new products and launch them in new emerging markets</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">



                    <!-- Contact -->
                    <div id="contact" class="form-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>Contact Information</h2>
                                    <ul class="list-unstyled li-space-lg">
                                        <li class="address">Don't hesitate to give us a call or send us a contact form
                                            message</li>
                                        <li><i class="fas fa-map-marker-alt"></i>22 Innovative Area, San Francisco, CA
                                            94043, US</li>
                                        <li><i class="fas fa-phone"></i><a class="turquoise"
                                                href="tel:003024630820">+81 720 2212</a></li>
                                        <li><i class="fas fa-envelope"></i><a class="turquoise"
                                                href="mailto:office@evolo.com">office@evolo.com</a>
                                        </li>
                                    </ul>
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->

                            <!-- <div class="col-lg-6"> -->

                            <!-- Contact Form -->
                            <!-- <form id="contactForm" data-toggle="validator" data-focus="false">
            <div class="form-group">
              <input type="text" class="form-control-input" id="cname" required>
              <label class="label-control" for="cname">Name</label>
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control-input" id="cemail" required>
              <label class="label-control" for="cemail">Email</label>
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control-textarea" id="cmessage" required></textarea>
              <label class="label-control" for="cmessage">Your message</label>
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group checkbox">
              <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I have read and agree with Evolo's
              stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms
                Conditions</a>
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
            </div>
            <div class="form-message">
              <div id="cmsgSubmit" class="h3 text-center hidden"></div>
            </div>
          </form> -->
                            <!-- end of contact form -->

                            <!-- </div> end of col -->
                        </div> <!-- end of row -->
                    </div> <!-- end of container -->
                </div> <!-- end of form-2 -->
                <!-- end of contact -->



                <!-- Scripts -->
                <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
                <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
                <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
                <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
                <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
                <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
                <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
                <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>
