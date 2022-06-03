@extends('main.app')
@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="blog-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/bgkucingku.jpg" alt="Image" style="height: 800px;width: 1366px">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h4 class="text-primary m-0">Ayo bantu kucing di wilayah Kota Surabaya!</h4>
                    <h4 class="display-4 m-0 mt-2 mt-md-3 text-white">KUCING BUTUH BANTUANMU</h4>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/thumb.jpg" alt="Image" style="height: 800px;width: 1366px">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h4 class="text-primary m-0">Ayo beraksi nyata untuk membantu mereka!</h4>
                    <h4 class="display-4 m-0 mt-2 mt-md-3 text-white">Yuk, bantu mereka lewat KucingKu!</h4>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
            <div class="btn btn-primary rounded-circle" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
            <div class="btn btn-primary rounded-circle" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>
<!-- Carousel End -->


<!-- Features Start -->
<div class="container-fluid py-5 py-lg-0 feature">
    <div class="row py-5 py-lg-0">
        <div class="col-lg-4 p-0">
            <div class="feature-item d-flex align-items-center border-right px-5 mb-4 mb-lg-0">
                <i class="flaticon-home display-3 text-primary mr-4"></i>
                <div class="">
                    <br><h5 class="mb-3">Donasi</h5>
                    <p class="m-0" style="text-align: justify;">Terima kasih atas kepedulian Anda melalui donasi untuk memberikan kasih sayang dan kehidupan kucing jalanan. Donasi yang kami terima akan dimanfaatkan untuk memberikan makan kucing jalanan, pengobatan kucing yang sakit, sterilisasi, dan tempat tinggal yang layak. Kami akan berupaya untuk memberikan fasilitas dan layanan yang baik dan layak bagi kucing jalanan.
                    </p>
                </div>
            </div>
            <br>
        </div>
        <div class="col-lg-4 p-0">
            <div class="feature-item d-flex align-items-center px-5">
                <i class="flaticon-surveillance display-3 text-primary mr-4"></i>
                <div class="">
                    <h5 class="mb-3">Informasi</h5>
                    <p class="m-0" style="text-align: justify;">Temukan sekilas informasi di menu Blog kami. Kami menyediakan berbagai informasi mengenai cara memelihara kucing, perawatan kucing, dan informasi lainnya dalam bentuk konten di Blog kami. Artikel dalam blog kami dapat dibaca dan disebarluaskan kembali.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 p-0">
            <div class="feature-item d-flex align-items-center border-right px-5 mb-4 mb-lg-0">
                <i class="flaticon-home display-3 text-primary mr-4"></i>
                <div class="">
                    <br><h5 class="mb-3">Adopsi</h5>
                    <p class="m-0" style="text-align: justify;">KucingKu memiliki program adopsi yang diperuntukan bagi Anda yang ingin mengadopsi para kucing jalanan di wilayah Suarabaya. Kami berupaya mencari adopter yang mau menerima kucing dengan tangan terbuka dalam kondisi apa pun. Jika Anda berminat menjadi adopter maka baca ketentuan dan mengisi formulir adopsi kucing.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


<!-- About Start -->
<div class="container-fluid mb-5" style="background: #f6f6f6;">
    <div class="row align-items-center">
        <div class="col-lg-6 px-0">
            <img width="100%" class="img-fluid" src="img/kucing-jalanan.jpg" alt="Image">
        </div>
        <div class="col-lg-6 py-5 py-lg-0 px-3 px-lg-5">
            <h1 class="mb-4">AYO SELAMATKAN MEREKA</h1>
            <p>Mari bantu para kucing jalanan melalui KucingKu dengan mengadopsi mereka atau berdonasi, sehingga dapat membantu kami dalam memberikan cinta kepada mereka.</p>
            <div class="row py-2">
                <div class="col-sm-6">
                    <i class="flaticon-approved display-3 text-primary"></i>
                    <h5 class="mt-2">Izin Resmi</h5>
                    <p>KucingKu telah memiliki izin resmi dari Izin Tempat Sementara Penampungan Hewan yang telah ditandatangani oleh Kepala Sub Bagian Umum dan BAPT.</p>
                </div>
                <div class="col-sm-6">
                    <i class="flaticon-medal display-3 text-primary"></i>
                    <h5 class="mt-2">Penghargaan</h5>
                    <p>KucingKu telah mendapatkan berbagai penghargaan dalam memberikan cinta kepada para kucing yang memerlukan bantuan</p>
                </div>
            </div>
  
        </div>
    </div>
</div>
<!-- About End -->


<!-- Services Start -->
<div class="container pt-5">
    <div class="d-flex flex-column text-center mb-5">
        <h5 class="text-primary mb-3">Pelayanan Kami</h5>
        <h1 class="m-0">Pelayanan Premium KucingKU</h1>
    </div>
    <div class="row pb-3">
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card mb-2 p-3">
                <img class="card-img-top" src="img/konsul.jpg" alt="">
                <div class="card-body bg-secondary d-flex align-items-center p-0">
                    <h3 class="flaticon-desk font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                    <h6 class="card-title text-white text-truncate m-0">Consultation</h6>
                </div>
                <div class="card-footer">
                    Layanan konsultasi dapat memudahkan Anda untuk berdiskusi dengan para ahli mengenai masalah apapun terkait kucing.
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card mb-2 p-3">
                <img class="card-img-top" src="img/vaksin.jpg" alt="">
                <div class="card-body bg-secondary d-flex align-items-center p-0">
                    <h3 class="flaticon-desk font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                    <h6 class="card-title text-white text-truncate m-0">Vaccination</h6>
                </div>
                <div class="card-footer">
                    Layanan vaksinasi kepada kucing agar tubuh mereka memiliki sistem kekebalan tubuh yang lebih kuat, sehingga terjaga kesehatannya.
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card mb-2 p-3">
                <img class="card-img-top" src="img/treat.jpg" alt="">
                <div class="card-body bg-secondary d-flex align-items-center p-0">
                    <h3 class="flaticon-desk font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                    <h6 class="card-title text-white text-truncate m-0">Treatment</h6>
                </div>
                <div class="card-footer">
                    Layanan perawatan kepada kucing untuk menjaga kesehatan dan kebersihan kucing, sehingga mereka dapat beraktivitas dengan ceria.
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card mb-2 p-3">
                <img class="card-img-top" src="img/groom.jpg" alt="">
                <div class="card-body bg-secondary d-flex align-items-center p-0">
                    <h3 class="flaticon-desk font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                    <h6 class="card-title text-white text-truncate m-0">Grooming</h6>
                </div>
                <div class="card-footer">
                    Layanan grooming pada kucing agar dapat membantu pemilik untuk meningkatkan hubungan dengan kucing kesayangan.
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card mb-2 p-3">
                <img class="card-img-top" src="img/examinate.jpg" alt="">
                <div class="card-body bg-secondary d-flex align-items-center p-0">
                    <h3 class="flaticon-desk font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                    <h6 class="card-title text-white text-truncate m-0">Physical Examination</h6>
                </div>
                <div class="card-footer">
                    Layanan pemeriksaan fisik kepada kucing secara rutin dapat membantu pemilik untuk mengetahui kondisi kucing kesayangannya.
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card mb-2 p-3">
                <img class="card-img-top" src="img/ad.jpg" alt="">
                <div class="card-body bg-secondary d-flex align-items-center p-0">
                    <h3 class="flaticon-desk font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                    <h6 class="card-title text-white text-truncate m-0">AD - Adoption & Donation</h6>
                </div>
                <div class="card-footer">
                    Layanan AD bertujuan pada layanan pengadopasian kucing pada shelter kami maupun berdonasi untuk keperluan mereka.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

<!-- Team Start -->
<div class="container pt-5 pb-3">
    <div class="d-flex flex-column text-center mb-5">
        <h5 class="text-primary mb-3">Karywan Kucingku</h5>
        <h1 class="m-0">Yuk, berkenalan dengan mereka!</h1>
    </div>
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="row mb-2 align-items-center">
                <div class="col-6 text-right">
                    <h6>Puji Septiyana Nautika</h6>
                    <h6>NIM. 20051214036</h6>
                    <h6 class="text-muted font-weight-normal text-capitalize mb-2">Animal Caretaker</h6>
                    <p> Kami akan selalu memastikan kesehatan dan kebahagian semua kucing yang berada di cat shelter kami. Stay healthy and paw-sitive!</p>
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
                    <h6>Reynisa Beta Nurlyan</h6>
                    <h6>NIM. 20051214044</h6>
                    <h6 class="text-muted font-weight-normal text-capitalize mb-2">Costumer Service</h6>
                    <p>Kami akan selalu sedia untuk memberikan kualitas pelayanan yang terbaik kepada Anda dengan penuh cinta setiap saat. Have a purr-fect day!</p>
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
                    <h6>Muhammad Agil Maulana</h6>
                    <h6>NIM. 20051214074</h6>
                    <h6 class="text-muted font-weight-normal text-capitalize mb-2">Donation Coordinator</h6>
                    <p>Kami akan selalu berusaha untuk menyalurkan cinta kasih yang telah Anda berikan kepada pada kucing dengan baik. We love cats the meow-st!.</p>
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
                    <h6>Rendy Pratama</h6>
                    <h6>NIM. 20051214088</h6>
                    <h6 class="text-muted font-weight-normal text-capitalize mb-2">Adoption Coordinator</h6>
                    <p>Kami berharap melalui KucingKu, kami dapat mempertemukan mereka kepada keluarga baru yang menyambut dengan penuh cinta. Be happy fur-ever! </p>
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

<!-- Blog Start -->
<div class="container pt-5">
    <div class="d-flex flex-column text-center mb-5">
        <h5 class="text-primary mb-3">Recent Blog</h5>
        <h1 class="m-0">Latest From Our Blog</h1>
    </div>
    <div class="row pb-3">
        <div class="col-lg-4 mb-4">
            <div class="card mb-2 p-3">
                <img class="card-img-top" src="img/blog-1.jpg" alt="">
                <div class="card-body bg-secondary d-flex align-items-center p-0">
                    <h6 class="card-title text-white text-truncate m-0 ml-3">Diam amet eos at no eos</h6>
                    <a href="" class="fa fa-link d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white text-decoration-none m-0 ml-auto" style="width: 45px; height: 45px;"></a>
                </div>
                <div class="card-footer py-3 px-4">
                    <div class="d-flex mb-2">
                        <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                        <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                        <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                    </div>
                    <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo et.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card mb-2 p-3">
                <img class="card-img-top" src="img/blog-2.jpg" alt="">
                <div class="card-body bg-secondary d-flex align-items-center p-0">
                    <h6 class="card-title text-white text-truncate m-0 ml-3">Diam amet eos at no eos</h6>
                    <a href="" class="fa fa-link d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white text-decoration-none m-0 ml-auto" style="width: 45px; height: 45px;"></a>
                </div>
                <div class="card-footer py-3 px-4">
                    <div class="d-flex mb-2">
                        <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                        <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                        <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                    </div>
                    <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo et.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card mb-2 p-3">
                <img class="card-img-top" src="img/blog-3.jpg" alt="">
                <div class="card-body bg-secondary d-flex align-items-center p-0">
                    <h6 class="card-title text-white text-truncate m-0 ml-3">Diam amet eos at no eos</h6>
                    <a href="" class="fa fa-link d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white text-decoration-none m-0 ml-auto" style="width: 45px; height: 45px;"></a>
                </div>
                <div class="card-footer py-3 px-4">
                    <div class="d-flex mb-2">
                        <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                        <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                        <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                    </div>
                    <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo et.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
@endsection
