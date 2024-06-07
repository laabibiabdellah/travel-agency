<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Tourist - Travel Agency HTML Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="keywords" />
        <meta content="" name="description" />

        <!-- Favicon -->
        <link href="{{asset('img/favicon.ico')}}" rel="icon" />

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
            rel="stylesheet"
        />

        <!-- Icon Font Stylesheet -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
            rel="stylesheet"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
            rel="stylesheet"
        />

        <!-- Libraries Stylesheet -->
        <link
            href="{{asset('lib/animate/animate.min.css')}}"
            rel="stylesheet"
        />
        <link
            href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}"
            rel="stylesheet"
        />
        
        <link
            href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}"
            rel="stylesheet"
        />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />

        <!-- Template Stylesheet -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet" />


    </head>

    <body>
                <!-- Spinner Start -->
                <div
                id="spinner"
                class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
            >
                <div
                    class="spinner-border text-primary"
                    style="width: 3rem; height: 3rem"
                    role="status"
                >
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->
    
            <!-- Topbar Start -->
            <div class="container-fluid bg-dark px-5 d-none d-lg-block">
                <div class="row gx-0">
                    <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                        <div
                            class="d-inline-flex align-items-center"
                            style="height: 45px"
                        >
                            <small class="me-3 text-light"
                                ><i class="fa fa-map-marker-alt me-2"></i>123
                                Street, New York, USA</small
                            >
                            <small class="me-3 text-light"
                                ><i class="fa fa-phone-alt me-2"></i>+012 345
                                6789</small
                            >
                            <small class="text-light"
                                ><i class="fa fa-envelope-open me-2"></i
                                >info@example.com</small
                            >
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <div
                            class="d-inline-flex align-items-center"
                            style="height: 45px"
                        >
                            <a
                                class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                                href=""
                                ><i class="fab fa-twitter fw-normal"></i
                            ></a>
                            <a
                                class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                                href=""
                                ><i class="fab fa-facebook-f fw-normal"></i
                            ></a>
                            <a
                                class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                                href=""
                                ><i class="fab fa-linkedin-in fw-normal"></i
                            ></a>
                            <a
                                class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                                href=""
                                ><i class="fab fa-instagram fw-normal"></i
                            ></a>
                            <a
                                class="btn btn-sm btn-outline-light btn-sm-square rounded-circle"
                                href=""
                                ><i class="fab fa-youtube fw-normal"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Topbar End -->
    
            <!-- Navbar & Hero Start -->
            <div class="container-fluid position-relative p-0">
                <nav
                    class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0"
                >
                    <a href="" class="navbar-brand p-0">
                        <img src="{{asset('img/logo.png')}}" width="100%" height="100px" alt="logo">
                    </a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse"
                    >
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0">
                            <a href="{{route('home')}}" class="nav-item nav-link active"
                                >Home</a
                            >
                            <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                            <a href="{{route('hotels')}}" class="nav-item nav-link"
                                >Hotels</a
                            >
                            <a href="{{asset('packages')}}" class="nav-item nav-link"
                                >Packages</a
                            >
                            <div class="nav-item dropdown">
                                <a
                                    href="None"
                                    class="nav-link dropdown-toggle"
                                    data-bs-toggle="dropdown"
                                    >Pages</a
                                >
                                <div class="dropdown-menu m-0">
                                    <a href="{{asset('destination')}}" class="dropdown-item"
                                        >Destination</a
                                    >
                                </div>
                            </div>
                            <a href="{{asset('contact')}}" class="nav-item nav-link"
                                >Contact</a
                            >
                        </div>
                        @auth
                        <div class="nav-item dropdown">
                            <a
                                href="None"
                                class="nav-link dropdown-toggle text-white"
                                data-bs-toggle="dropdown"
                                >Profile</a
                            >
                            <div class="dropdown-menu m-0">
                                <a href="{{route('home')}}" class="dropdown-item"
                                    >Settings</a
                                >
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button class="dropdown-item">Logout</button>
                                  </form>
                            </div>
                        </div>
                        @endauth
                        @guest
                            <div>
                                <a href="{{route('register.index')}}" class="btn btn-primary rounded-pill py-2 px-4"
                                >Register</a>
                                <a href="{{route('login')}}" id="login" class="btn btn-white text-primary border border-primary rounded-pill py-2 px-4"
                                >Login</a>
                            </div>
                        @endguest
                    </div>
                </nav>
    
                <div class="container-fluid bg-primary py-5 mb-5 hero-header">
                    <div class="container py-5">
                        <div class="row justify-content-center py-5">
                            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                                <h1
                                    class="display-3 text-white mb-3 animated slideInDown"
                                >
                                    Enjoy Your Vacation With Us
                                </h1>
                                <p
                                    class="fs-4 text-white mb-4 animated slideInDown"
                                >
                                    Tempor erat elitr rebum at clita diam amet diam
                                    et eos erat ipsum lorem sit
                                </p>
                                <div
                                    class="position-relative w-75 mx-auto animated slideInDown"
                                >
                                    <input
                                        class="search-inp form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5"
                                        type="text"
                                        placeholder="Casablanca"
                                    />
                                    <button
                                        type="button"
                                        class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2"
                                        style="margin-top: 7px"
                                    >
                                        Search
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navbar & Hero End -->
        {{$slot}}
                    <!-- Footer Start -->
        <div
        class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn"
        data-wow-delay="0.1s"
    >
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2">
                        <i class="fa fa-map-marker-alt me-3"></i>123 Street,
                        New York, USA
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-phone-alt me-3"></i>+012 345 67890
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-envelope me-3"></i>info@example.com
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""
                            ><i class="fab fa-twitter"></i
                        ></a>
                        <a class="btn btn-outline-light btn-social" href=""
                            ><i class="fab fa-facebook-f"></i
                        ></a>
                        <a class="btn btn-outline-light btn-social" href=""
                            ><i class="fab fa-youtube"></i
                        ></a>
                        <a class="btn btn-outline-light btn-social" href=""
                            ><i class="fab fa-linkedin-in"></i
                        ></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img
                                class="img-fluid bg-light p-1"
                                src="img/package-1.jpg"
                                alt=""
                            />
                        </div>
                        <div class="col-4">
                            <img
                                class="img-fluid bg-light p-1"
                                src="img/package-2.jpg"
                                alt=""
                            />
                        </div>
                        <div class="col-4">
                            <img
                                class="img-fluid bg-light p-1"
                                src="img/package-3.jpg"
                                alt=""
                            />
                        </div>
                        <div class="col-4">
                            <img
                                class="img-fluid bg-light p-1"
                                src="img/package-2.jpg"
                                alt=""
                            />
                        </div>
                        <div class="col-4">
                            <img
                                class="img-fluid bg-light p-1"
                                src="img/package-3.jpg"
                                alt=""
                            />
                        </div>
                        <div class="col-4">
                            <img
                                class="img-fluid bg-light p-1"
                                src="img/package-1.jpg"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>
                        Dolor amet sit justo amet elitr clita ipsum elitr
                        est.
                    </p>
                    <div
                        class="position-relative mx-auto"
                        style="max-width: 400px"
                    >
                        <input
                            class="form-control border-primary w-100 py-3 ps-4 pe-5"
                            type="text"
                            placeholder="Your email"
                        />
                        <button
                            type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
                        >
                            SignUp
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div
                        class="col-md-6 text-center text-md-start mb-3 mb-md-0"
                    >
                        &copy;
                        <a class="border-bottom" href="#">Your Site Name</a
                        >, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By
                        <a
                            class="border-bottom"
                            href="https://htmlcodex.com"
                            >HTML Codex</a
                        >
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
        ><i class="bi bi-arrow-up"></i
    ></a>

        <!-- JavaScript Libraries -->
        <script src="{{asset('https://code.jquery.com/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('lib/wow/wow.min.js')}}"></script>
        <script src="{{asset('lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('lib/tempusdominus/js/moment.min.js')}}"></script>
        <script src="{{asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
        <script src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('js/main.js')}}"></script>
        <script>        
              let links = document.querySelectorAll('.nav-link')
              links.forEach(element => {
                element.pathname == window.location.pathname?
                element.classList.add("active"):
                element.classList.remove("active")
              });
        </script>
    </body>
</html>
