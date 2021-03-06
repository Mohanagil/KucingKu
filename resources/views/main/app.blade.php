<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KucingKu - Cat Adoption</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="{{asset('img/favicon.ico')}}" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="{{asset('lib/flaticon/font/flaticon.css')}}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
</head>

<body class="bg-white">
    @include('sweetalert::alert')
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left">
                <div class="d-inline-flex align-items-center">
                    <p class="mr-2 mb-2 mb-lg-0 text-white">Jam Buka:</p>
                    <span class="mb-2 mb-lg-0 text-white">08.00 - 20.00</span>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <p class="m-0 mr-1 text-white">Follow Us:</p>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="{{route('main.index')}}" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-capitalize font-italic"><span class="text-primary">Kucing</span>Ku</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="d-inline-flex flex-column text-center pr-3 border-right">
                        <h6>Our Shelter</h6>
                        <p class="m-0">Jl. Ketintang Baru 08, Surabaya</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center px-3 border-right">
                        <h6>Email Us</h6>
                        <p class="m-0">kucingku@gmail.com</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center pl-3">
                        <h6>Call Us</h6>
                        <p class="m-0">+62 5213 4455 890</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid p-0 mb-5">
        <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-0">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Safety</span>First</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav m-auto py-4">
                    <a href="{{route('main.index')}}" class="nav-item nav-link">Beranda</a>
                    <a href="{{route('main.about')}}" class="nav-item nav-link">Tentang Kami</a>
                    <a href="{{route('main.kucing')}}" class="nav-item nav-link">Data Kucing</a>
                    <a href="{{route('main.donasi')}}" class="nav-item nav-link">Donasi</a>
                    <a href="{{route('main.adopt')}}" class="nav-item nav-link">Adopter</a>
                    <a href="{{route('main.blog')}}" class="nav-item nav-link">Blog</a>
                    <a href="{{route('main.kontak')}}" class="nav-item nav-link">Kontak</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Content -->
    @yield('content')
    <!-- End Content -->

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize font-italic text-white"><span class="text-primary">Kucing</span>Ku</h1>
                <p class="m-0">KucingKu merupakan sebuah cat shalter di Kota Surabaya yang memberikan pelayanan baik secara offline maupun online yang memiliki tujuan utama, yaitu membantu para kucing jalanan di lingkungan sekitar yang membutuhkan bantuan.</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Fitur KucingKu</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="{{route('main.index')}}"><i class="fa fa-angle-right mr-2"></i>Beranda</a>
                            <a class="text-white mb-2" href="{{route('main.about')}}"><i class="fa fa-angle-right mr-2"></i>Tentang Kami</a>
                            <a class="text-white mb-2" href="{{route('main.kucing')}}"><i class="fa fa-angle-right mr-2"></i>Data Kucing</a>
                            <a class="text-white mb-2" href="{{route('main.donasi')}}"><i class="fa fa-angle-right mr-2"></i>Donasi</a>
                            <a class="text-white mb-2" href="{{route('main.adopt')}}"><i class="fa fa-angle-right mr-2"></i>Adopter</a>
                            <a class="text-white" href="{{route('main.kontak')}}"><i class="fa fa-angle-right mr-2"></i>Kontak</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Fitur Popular</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="{{route('main.index')}}"><i class="fa fa-angle-right mr-2"></i>Beranda</a>
                            <a class="text-white mb-2" href="{{route('main.kucing')}}"><i class="fa fa-angle-right mr-2"></i>Data Kucing</a>
                            <a class="text-white mb-2" href="{{route('main.donasi')}}"><i class="fa fa-angle-right mr-2"></i>Donasi</a>
                            <a class="text-white mb-2" href="{{route('main.adopt')}}"><i class="fa fa-angle-right mr-2"></i>Adopter</a>
                            <a class="text-white" href="{{route('main.kontak')}}"><i class="fa fa-angle-right mr-2"></i>Kontak</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Terhubung dengan Kami!</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Jl. Ketintang Baru 08, Surabaya</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+62 5213 4455 890</p>
                        <p><i class="fa fa-envelope mr-2"></i>kucingku@gmail.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">KucingKu</a>. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary border back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
    @yield('js')
</body>

</html>
