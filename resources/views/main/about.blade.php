@extends('main.app')
@section('content')
<!-- About Start -->
<div class="container-fluid mb-5 py-5">
    <div class="row align-items-center">
        <div class="col-lg-6 px-0">
            <img width="100%" class="img-fluid" src="img/tentangkami.jpg" alt="Image">
        </div>
        <div class="col-lg-6 py-5 py-lg-0 px-3 px-lg-5">
            <h5 class="text-primary mb-3">TENTANG KAMI</h5>
            <h1 class="mb-4">KucingKu - Cat Shelter</h1>
            <p>KucingKu merupakan tempat bagi para kucing yang membutuhkan bantuan, terutama untuk kucing jalanan yang berada di wilayah Kota Surabaya.</p>
            <div class="row py-2">
                <div class="col-sm-6">
                    <i class="flaticon-approved display-3 text-primary"></i>
                    <h5 class="mt-2">Izin Resmi</h5>
                    <p>KucingKu telah memiliki izin resmi dari Izin Tempat Sementara Penampungan Hewan yang telah ditandatangani oleh Kepala Sub Bagian Umum dan BAPT.</p>
                </div>
                <div class="col-sm-6">
                    <i class="flaticon-medal display-3 text-primary"></i>
                    <h5 class="mt-2">Penghargaan</h5>
                    <p>KucingKu telah mendapatkan berbagai penghargaan dalam memberikan cinta kepada para kucing yang memerlukan bantuan.</p>
                </div>
            </div>
            <a href="" class="btn btn-lg px-4 btn-primary">Pelajari Selengkapnya</a>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Facts Start -->
<div class="container-fluid bg-primary my-5 py-5 text-center">
    <div class="row pt-5">
        <div class="col-lg-3 col-sm-6 mb-5">
            <h5 class="fa fa-user-shield mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white" style="width: 50px; height: 50px;"></h5>
            <h4 class="display-4 text-white mb-3" data-toggle="counter-up">4</h4>
            <h6 class="text-white m-0">Karyawan</h6>
        </div>
        <div class="col-lg-3 col-sm-6 mb-5">
            <h5 class="fa fa-users mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white" style="width: 50px; height: 50px;"></h5>
            <h4 class="display-4 text-white mb-3" data-toggle="counter-up">20</h4>
            <h6 class="text-white m-0">Adopter</h6>
        </div>
        <div class="col-lg-3 col-sm-6 mb-5">
            <h5 class="fa fa-credit-card mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white" style="width: 50px; height: 50px;"></h5>
            <h4 class="display-4 text-white mb-3" data-toggle="counter-up">50</h4>
            <h6 class="text-white m-0">Donatur</h6>
        </div>
        <div class="col-lg-3 col-sm-6 mb-5">
            <h5 class="fa fa-paw mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white" style="width: 50px; height: 50px;"></h5>
            <h4 class="display-4 text-white mb-3" data-toggle="counter-up">125</h4>
            <h6 class="text-white m-0">Kucing</h6>
        </div>
    </div>
</div>
<!-- Facts End -->


<!-- Features Start -->
<div class="container pt-5">
    <div class="row">
        <div class="col-lg-5 mb-5">
            <h5 class="text-primary mb-3">Kenapa Anda sebaiknya memilih KucingKu?</h5>
            <h1 class="mb-4">Cat Shelter di Kota Surabaya!</h1>
            <img class="img-thumbnail mb-4 p-3" src="img/catshelter.jpg" alt="Image">
            <p>
                KucingKu merupakan sebuah tempat penampungan kucing yang terletak di Kota Surabaya pertama yang memberikan pelayanan secara online. Lalu, 
            </p>
            <a href="" class="btn btn-lg btn-primary mt-2">Lanjutkan membaca</a>
        </div>
        <div class="col-lg-7">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center mb-3">
                            <h3 class="flaticon-approved font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                            <h6 class="text-truncate m-0">Izin Resmi</h6>
                        </div>
                        <p>KucingKu telah memiliki izin resmi dari pemerintah, sehingga segala aktivitas yang terjadi merupakan aktivitas yang legal.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center mb-3">
                            <h3 class="flaticon-health font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                            <h6 class="text-truncate m-0">Kesehatan dan Kebersihan</h6>
                        </div>
                        <p>Para kucing yang mendapatkan cinta dan kasih sayang dari para karyawan, sehingga kesehatan dan kebersihan kucing tentu terjaga.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center mb-3">
                            <h3 class="flaticon-staff font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                            <h6 class="text-truncate m-0">Karyawan Terpilih</h6>
                        </div>
                        <p>Karyawan yang bekerja sebagai penjaga cat shelter telah memenuhi syarat dan ketentuan resmi, sehingga kualitas pelayanannya terjamin.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center mb-3">
                            <h3 class="flaticon-website font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                            <h6 class="text-truncate m-0">Website Resmi</h6>
                        </div>
                        <p>Selain pelayanan secara offline, KucingKu juga memiliki website resmi yang dapat diakses setiap saat.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center mb-3">
                            <h3 class="flaticon-security font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                            <h6 class="text-truncate m-0">Keamanan dan Kerahasiaan</h6>
                        </div>
                        <p>Kucingku memberikan jaminan terhadap keamanan maupun kerahasiaan terkait data yang berhubungan dengan kucing maupun pengguna.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center mb-3">
                            <h3 class="flaticon-service font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                            <h6 class="text-truncate m-0">Pelayanan Terbaik</h6>
                        </div>
                        <p>Kucingku selalu siap memberikan pelayanan setiap saat dengan karyawan terbaik untuk menjawab berbagai pertanyaan yang ada.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


<!-- Subscribe Start -->
<div class="container-fluid bg-primary my-5 py-5 text-center">
    <h1 class="text-white font-weight-bold mt-5 mb-3">Subscribe Our Newsletter</h1>
    <p class="text-white mb-4">Subscribe and get Our latest article in your inbox</p>
    <form class="form-inline justify-content-center mb-5">
        <div class="input-group">
            <input type="text" class="form-control-lg" placeholder="Your Email">
            <div class="input-group-append">
                <button class="btn btn-secondary" type="submit">Subscribe</button>
            </div>
        </div>
    </form>
</div>
<!-- Subscribe End -->


<!-- Team Start -->
<div class="container pt-5 pb-3">
    <div class="d-flex flex-column text-center mb-5">
        <h5 class="text-primary mb-3">Security Officers</h5>
        <h1 class="m-0">Meet Our Security Officers</h1>
    </div>
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="row mb-2 align-items-center">
                <div class="col-6 text-right">
                    <h6>Officer Name</h6>
                    <h6 class="text-muted font-weight-normal text-capitalize mb-2">Designation</h6>
                    <p>Ipsum tempor tempor dolor no est diam duo dolore, dolor eos dolor amet erat clita amet.</p>
                    <div class="d-flex justify-content-end">
                        <a href=""><i class="fab fa-twitter mr-3"></i></a>
                        <a href=""><i class="fab fa-facebook-f mr-3"></i></a>
                        <a href=""><i class="fab fa-linkedin-in mr-3"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-6">
                    <img class="img-thumbnail p-3" src="img/team-1.jpg" alt="Image">
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="row mb-2 align-items-center">
                <div class="col-6">
                    <img class="img-thumbnail p-3" src="img/team-2.jpg" alt="Image">
                </div>
                <div class="col-6 text-left">
                    <h6>Officer Name</h6>
                    <h6 class="text-muted font-weight-normal text-capitalize mb-2">Designation</h6>
                    <p>Ipsum tempor tempor dolor no est diam duo dolore, dolor eos dolor amet erat clita amet.</p>
                    <div class="d-flex justify-content-start">
                        <a href=""><i class="fab fa-twitter mr-3"></i></a>
                        <a href=""><i class="fab fa-facebook-f mr-3"></i></a>
                        <a href=""><i class="fab fa-linkedin-in mr-3"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="row mb-2 align-items-center">
                <div class="col-6 text-right">
                    <h6>Officer Name</h6>
                    <h6 class="text-muted font-weight-normal text-capitalize mb-2">Designation</h6>
                    <p>Ipsum tempor tempor dolor no est diam duo dolore, dolor eos dolor amet erat clita amet.</p>
                    <div class="d-flex justify-content-end">
                        <a href=""><i class="fab fa-twitter mr-3"></i></a>
                        <a href=""><i class="fab fa-facebook-f mr-3"></i></a>
                        <a href=""><i class="fab fa-linkedin-in mr-3"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-6">
                    <img class="img-thumbnail p-3" src="img/team-3.jpg" alt="Image">
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="row mb-2 align-items-center">
                <div class="col-6">
                    <img class="img-thumbnail p-3" src="img/team-4.jpg" alt="Image">
                </div>
                <div class="col-6 text-left">
                    <h6>Officer Name</h6>
                    <h6 class="text-muted font-weight-normal text-capitalize mb-2">Designation</h6>
                    <p>Ipsum tempor tempor dolor no est diam duo dolore, dolor eos dolor amet erat clita amet.</p>
                    <div class="d-flex justify-content-start">
                        <a href=""><i class="fab fa-twitter mr-3"></i></a>
                        <a href=""><i class="fab fa-facebook-f mr-3"></i></a>
                        <a href=""><i class="fab fa-linkedin-in mr-3"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
@endsection
