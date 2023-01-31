
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- Bootstrap 5 CDN Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Custom File's Link -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive-style.css">
    <link rel="stylesheet" href="resources/css/landing-page.css">

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">
    <!-- Navbar section -->
    <header class="header_wrapper">
    <nav class="navbar navbar-expand-lg bg-black">
    <div class="container">
        <a class="navbar-brand" href="#">
            <h4 class="text-yellow">BH BOOKING AND RESERVATION</h4>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-stream navbar-toggler-icon"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav menu-navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#rooms">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#team">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#price">Price</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#blog">Blog</a>
                </li>
                <li class="nav-item mt-3 mt-lg-0">
                    <a class="main-btn text-white" href="#">Book Now</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    </header>
    <!-- Navbar section exit -->

    <!-- Banner section -->
    <section id="home" class="banner_wrapper p-0">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url(./images/slider/slider2.webp);">
                    <div class="slide-caption text-center">
                        <div>
                            <h1>BH LOCATOR</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url(./images/slider/slider1.webp);">
                    <div class="slide-caption text-center">
                        <div>
                            <h1>welcome to hotel in Dubai</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="container booking-area">
            <form class="row">
                <div class="col-lg mb-3 mb-lg-0">
                    <input type="date" class="form-control" placeholder="Date">
                </div>
                <div class="col-lg mb-3 mb-lg-0">
                    <input type="date" class="form-control" placeholder="Date">
                </div>
                <div class="col-lg mb-3 mb-lg-0">
                    <select class="form-select">
                        <option selected>Adults</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
                <div class="col-lg mb-3 mb-lg-0">
                    <select class="form-select">
                        <option selected>Children</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
                <div class="col-lg mb-3 mb-lg-0">
                    <button type="submit" class="main-btn rounded-2 px-lg-3">Check Availability</button>
                </div>
            </form>
        </div>
    </section>
    <!-- Banner section exit -->

    <!-- About section -->
    <section id="about" class="about_wrapper">
        <div class="container">
            <div class="row flex-lg-row flex-column-reverse ">
                <div class="col-lg-6 text-center text-lg-start">
                    <h3>Welcome to <span>Hotel <br class="d-none d-lg-block">
                            the haven</span> of your weekend</h3>
                    <p>lorum luptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                        dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                        quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>
                    <p>lorum luptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                        dolores eos qui ratione voluptatem</p>
                    <a href="#" class="main-btn mt-4">Explore</a>
                </div>
                <div class="col-lg-6 mb-4 mb-lg-0 ps-lg-4 text-center">
                    <img src="images/about-img.svg" class="img-fluid" alt="About Us">
                </div>

            </div>
        </div>
    </section>
    <!-- About section exit -->

    <!-- Rooms section -->
    <section id="rooms" class="rooms_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 section-title text-center mb-5">
                    <h6>What I can do for you</h6>
                    <h3>Our Favorite Rooms</h3>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-md-4 mb-4 mb-lg-0">
                    <div class="room-item">
                        <img src="./images/room/room1.webp" class="img-fluid">
                        <div class="room-item-wrap">
                            <div class="room-content">
                                <h5 class="text-white mb-lg-5 text-decoration-underline">Royal Suit</h5>
                                <p class="text-white">Discover five of our favourite dresses from our new collection that
                                    are destined to be worn and loved immediately</p>
                                <p class="text-white fw-bold mt-lg-4">$220 / Per Night</p>
                                <a class="main-btn border-white text-white mt-lg-5" href="#">Book now</a>
                            </div>
                        </div> 
                    </div> 
                </div>
                <div class="col-md-4 mb-4 mb-lg-0">
                    <div class="room-item">
                        <img src="./images/room/room2.webp" class="img-fluid">
                        <div class="room-item-wrap">
                            <div class="room-content">
                                <h5 class="text-white mb-lg-5 text-decoration-underline">Royal Suit</h5>
                                <p class="text-white">Discover five of our favourite dresses from our new collection that
                                    are destined to be worn and loved immediately</p>
                                <p class="text-white fw-bold mt-lg-4">$220 / Per Night</p>
                                <a class="main-btn border-white text-white mt-lg-5" href="#">Book now</a>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-md-4 mb-4 mb-lg-0">
                    <div class="room-item">
                        <img src="./images/room/room3.webp" class="img-fluid">
                        <div class="room-item-wrap">
                            <div class="room-content">
                                <h5 class="text-white mb-lg-5 text-decoration-underline">Royal Suit</h5>
                                <p class="text-white">Discover five of our favourite dresses from our new collection that
                                    are destined to be worn and loved immediately</p>
                                <p class="text-white fw-bold mt-lg-4">$220 / Per Night</p>
                                <a class="main-btn border-white text-white mt-lg-5" href="#">Book now</a>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <!-- Rooms Section Exit -->

    <!-- Services section -->
    <section id="services" class="services_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-title text-center mb-5">
                    <h6>We Are Here For You</h6>
                    <h3>Our Awesome Services</h3>
                </div>
            </div>
            <div class="row align-items-center service-item-wrap">
                <div class="col-lg-7 p-lg-0">
                    <!--Service Area Start-->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="spa" role="tabpanel">
                            <img src="./images/services/service1.webp" alt="">
                        </div>
                        <div class="tab-pane fade" id="restaurent" role="tabpanel">
                            <img src="./images/services/service2.webp" alt="">
                        </div>
                        <div class="tab-pane fade" id="swimming" role="tabpanel">
                            <img src="images/services/service3.webp" alt="">
                        </div>
                        <div class="tab-pane fade" id="conference" role="tabpanel">
                            <img src="./images/services/service6.webp" alt="">
                        </div>
                    </div>
                    <!--Service Area End-->
                </div>
                <div class="col-lg-5 position-relative">
                    <!--Service Tab Menu Area Start-->
                    <div class="service-menu-area">
                        <ul class="nav">
                            <li>
                                <a data-bs-toggle="tab" href="#spa" class="active">
                                    <span class="service-icon">
                                        <img src="./images/services/service-icon1.webp" alt="">
                                    </span>
                                    <h5>Spa, beauty & Health</h5>
                                    <p><span>Spa and beauty </span>luptatem quia voluptas sit aspernatur aut odit aut
                                        fugit, sed quia </p>
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#restaurent">
                                    <span class="service-icon">
                                        <img src="./images/services/service-icon2.webp" alt="">
                                    </span>
                                    <h5>Restaurant</h5>
                                    <p><span>Restaurant</span> lup provide grro tatem quia voluptas sit aspernatur aut
                                        odit aut fugit, </p>
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#swimming">
                                    <span class="service-icon">
                                        <img src="./images/services/service-icon3.webp" alt="">
                                    </span>
                                    <h5>Swimming Pool</h5>
                                    <p><span>Swimming</span> pool luptatem quia voluptas sit aspernatur aut odit aut
                                        fugit, sed quia </p>
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#conference">
                                    <span class="service-icon">
                                        <img src="./images/services/service-icon4.webp" alt="">
                                    </span>
                                    <h5>Conference Hall</h5>
                                    <p><span>Conference</span> luptatem quia voluptas sit aspernatur aut odit aut fugit,
                                        sed quia </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--Service Tab Menu Area End-->
                </div>
            </div>
        </div>
        <div class="counter mt-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
                        <h1>
                            <span id="count1"></span>+
                        </h1>
                        <p>Happy Clients</p>
                    </div>
                    <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
                        <h1>
                            <span id="count2"></span>+
                            </h2>
                            <p>New Friendships</p>
                    </div>
                    <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
                        <h1>
                            <span id="count3"></span>+
                            </h2>
                            <p>Five Start Ratings</p>
                    </div>
                    <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
                        <h1>
                            <span id="count4"></span>+
                            </h2>
                            <p>Served Breakfast</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services section Exit -->

    <!-- Team section -->
    <section id="team" class="team_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-title text-center mb-5">
                    <h6>What I can do for you</h6>
                    <h3>Our Special Staff</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-0 rounded-3">
                        <img src="images/team/team1.webp" class="img-fluid rounded-3" />
                        <div class="team-info">
                            <h5>Shirley Gibson</h5>
                            <p>Manager</p>
                            <ul class="social-network">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-0 rounded-3">
                        <img src="images/team/team2.webp" class="img-fluid rounded-3" />
                        <div class="team-info">
                            <h5>Ronald Long</h5>
                            <p>Chif Reciption Officer</p>
                            <ul class="social-network">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-0 rounded-3">
                        <img src="images/team/team3.webp" class="img-fluid rounded-3" />
                        <div class="team-info">
                            <h5>Ashley Sanchez</h5>
                            <p>Master Chef</p>
                            <ul class="social-network">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-0 rounded-3">
                        <img src="images/team/team4.webp" class="img-fluid rounded-3" />
                        <div class="team-info">
                            <h5>Jessica Watson</h5>
                            <p>Housekeeping</p>
                            <ul class="social-network">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section Exit  -->

    <!-- Gallery section -->
    <section id="gallery" class="gallery_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-title text-center mb-5">
                    <h6>Best Pictures Of Our Hotel</h6>
                    <h3>Our Gallery</h3>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-3 col-md-6 gallery-item">
                    <img src="./images/gallery/1.webp" class="img-fluid w-100">
                    <div class="gallery-item-content"></div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-item">
                    <img src="./images/gallery/2.webp" class="img-fluid w-100">
                    <div class="gallery-item-content"></div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-item">
                    <img src="./images/gallery/3.webp" class="img-fluid w-100">
                    <div class="gallery-item-content"></div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-item">
                    <img src="./images/gallery/4.webp" class="img-fluid w-100">
                    <div class="gallery-item-content"></div>
                </div>
                <div class="col-md-6 gallery-item">
                    <img src="./images/gallery/5.webp" class="img-fluid w-100">
                    <div class="gallery-item-content"> </div>
                </div>
                <div class="col-md-6 gallery-item">
                    <img src="./images/gallery/6.webp" class="img-fluid w-100">
                    <div class="gallery-item-content"> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section Exit -->

    <!-- Pricing section -->
    <section id="price" class="price_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-title text-center mb-5">
                    <h6>Best & Affordable Price for you</h6>
                    <h3>Our Pricing</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-4 text-center rounded-3">
                        <h5 class="text-decoration-underline mb-4">Economic</h5>
                        <ul class="list-unstyled">
                            <li>
                                <p>Flight Ticket(2)</p>
                            </li>
                            <li>
                                <p>Music Concert (30% Off)</p>
                            </li>
                            <li>
                                <p>Restaurant (Snacks)</p>
                            </li>
                            <li>
                                <p>Face Make(No)</p>
                            </li>
                        </ul>
                        <hr />
                        <h3>$150<sub class="fs-6 fw-normal">/NIGHT</sub></h3>
                        <a href="#" class="main-btn">Sign Up</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-4 text-center rounded-3">
                        <h5 class="text-decoration-underline mb-4">Economic</h5>
                        <ul class="list-unstyled">
                            <li>
                                <p>Flight Ticket(2)</p>
                            </li>
                            <li>
                                <p>Music Concert (30% Off)</p>
                            </li>
                            <li>
                                <p>Restaurant (Snacks)</p>
                            </li>
                            <li>
                                <p>Face Make(No)</p>
                            </li>
                        </ul>
                        <hr />
                        <h3>$150<sub class="fs-6 fw-normal">/NIGHT</sub></h3>
                        <a href="#" class="main-btn">Sign Up</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-4 text-center rounded-3">
                        <h5 class="text-decoration-underline mb-4">Economic</h5>
                        <ul class="list-unstyled">
                            <li>
                                <p>Flight Ticket(2)</p>
                            </li>
                            <li>
                                <p>Music Concert (30% Off)</p>
                            </li>
                            <li>
                                <p>Restaurant (Snacks)</p>
                            </li>
                            <li>
                                <p>Face Make(No)</p>
                            </li>
                        </ul>
                        <hr />
                        <h3>$150<sub class="fs-6 fw-normal">/NIGHT</sub></h3>
                        <a href="#" class="main-btn">Sign Up</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-4 text-center rounded-3">
                        <h5 class="text-decoration-underline mb-4">Economic</h5>
                        <ul class="list-unstyled">
                            <li>
                                <p>Flight Ticket(2)</p>
                            </li>
                            <li>
                                <p>Music Concert (30% Off)</p>
                            </li>
                            <li>
                                <p>Restaurant (Snacks)</p>
                            </li>
                            <li>
                                <p>Face Make(No)</p>
                            </li>
                        </ul>
                        <hr />
                        <h3>$150<sub class="fs-6 fw-normal">/NIGHT</sub></h3>
                        <a href="#" class="main-btn">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section Exit  -->

    <!-- Pricing section -->
    <section id="blog" class="blog_wrapper pb-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-title text-center mb-5">
                    <h6>Say Hello TO Our Visiters</h6>
                    <h3>Our Blog</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card p-0 border-0 rounded-0">
                        <img src="images/blog/blog1.webp" alt="">
                        <div class="blog-content bg-white p-4">
                            <h5 class="text-decoration-underline mb-4">Relax Zone</h5>
                            <h6>By Admin - February 18, 2018</h6>
                            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, nostrum.
                            </p>
                            <a href="#" class="main-btn mt-2">Read More</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card p-0 border-0 rounded-0">
                        <img src="images/blog/blog2.webp" alt="">
                        <div class="blog-content bg-white p-4">
                            <h5 class="text-decoration-underline mb-4">Relax Zone</h5>
                            <h6>By Admin - February 18, 2018</h6>
                            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, nostrum.
                            </p>
                            <a href="#" class="main-btn mt-2">Read More</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-partner-slider mt-5">
            <div class="container swiper our-partner">
                <div class=" swiper-wrapper">
                    <div class="swiper-slide"><img src="images/partners/brand1.webp"></div>
                    <div class="swiper-slide"><img src="images/partners/brand2.webp"></div>
                    <div class="swiper-slide"><img src="images/partners/brand3.webp"></div>
                    <div class="swiper-slide"><img src="images/partners/brand4.webp"></div>
                    <div class="swiper-slide"><img src="images/partners/brand5.webp"></div>
                    <div class="swiper-slide"><img src="images/partners/brand6.webp"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section Exit  -->

    <!-- Footer section -->
    <section id="contact" class="footer_wrapper mt-3 mt-md-0 pb-0">
        <div class="container pb-3">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h5>Hotel Location</h5>
                    <p class="ps-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim erat ut laoreet
                        pharetra....</p>
                    <div class="contact-info">
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="fa fa-home me-3"></i> No. 96, South City, London</a></li>
                            <li><a href="#"><i class="fa fa-phone me-3"></i>+1 222 3333</a></li>
                            <li><a href="#"><i class="fa fa-envelope me-3"></i>info@example.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>More Links</h5>
                    <ul class="link-widget p-0">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Office</a></li>
                        <li><a href="#">Delivery</a></li>
                        <li><a href="#">Our Store</a></li>
                        <li><a href="#">Guarantee</a></li>
                        <li><a href="#">Buy Gift Card</a></li>
                        <li><a href="#">Return Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Demo Links</h5>
                    <ul class="link-widget p-0">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Office</a></li>
                        <li><a href="#">Delivery</a></li>
                        <li><a href="#">Our Store</a></li>
                        <li><a href="#">Guarantee</a></li>
                        <li><a href="#">Buy Gift Card</a></li>
                        <li><a href="#">Return Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Newsletter</h5>
                    <div class="form-group mb-4">
                        <input type="email" class="form-control bg-transparent" placeholder="enter your email here">
                        <button type="submit" class="main-btn rounded-2 mt-3 border-white text-white">Subscribe</button>
                    </div>
                    <h5>Stay Connected</h5>
                    <ul class="social-network d-flex align-items-center p-0">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright-section">
            <p>Copyright <a href="#">Â© CODE4EDUCATION.</a> All Rights Reserved</p>
        </div>
    </section>
    <script>
        // Header Scroll
let nav = document.querySelector(".navbar");
window.onscroll = function () {
    if (document.documentElement.scrollTop > 50) {
        nav.classList.add("header-scrolled");
    } else {
        nav.classList.remove("header-scrolled");
    }
}

// nav hide 
let navBar = document.querySelectorAll(".nav-link");
let navCollapse = document.querySelector(".navbar-collapse.collapse");
navBar.forEach(function (a) {
    a.addEventListener("click", function () {
        navCollapse.classList.remove("show");
    })
})

// Swiper Slider
var swiper = new Swiper(".mySwiper", {
    direction: "vertical",
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 3500,
    },
});

// counter design
document.addEventListener("DOMContentLoaded", () => {
    function counter(id, start, end, duration) {
        let obj = document.getElementById(id),
            current = start,
            range = end - start,
            increment = end > start ? 1 : -1,
            step = Math.abs(Math.floor(duration / range)),
            timer = setInterval(() => {
                current += increment;
                obj.textContent = current;
                if (current == end) {
                    clearInterval(timer);
                }
            }, step);
    }
    counter("count1", 0, 1287, 3000);
    counter("count2", 100, 5786, 2500);
    counter("count3", 0, 1440, 3000);
    counter("count4", 0, 7110, 3000);
});

// Our Partner
var swiper = new Swiper(".our-partner", {
    slidesPerView: 5,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 2000,
    },
    breakpoints: {
        '991': {
            slidesPerView: 5,
            spaceBetween: 10,
        },
        '767': {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        '320': {
            slidesPerView: 2,
            spaceBetween: 8,
        },


    },
});


    </script>
    <!-- Footer section exit -->

    <!-- Bootstrap 5 JS CDN Links -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Custom Js Link -->
    <script src="js/main.js"></script>
</body>

</html>

