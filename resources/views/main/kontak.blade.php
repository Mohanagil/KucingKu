@extends('main.app')
@section('content')
<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="d-flex flex-column text-center mb-5">
        <h5 class="text-primary mb-3">Kontak Kami</h5>
        <h1 class="m-0">Mari terhubung dengan Kucingku!</h1>
    </div>
    <div class="row">
        <div class="col-12 p-0">
            <iframe style="width: 100%; height: 500px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.3152353279006!2d112.72896259999999!3d-7.318442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb6fc2bf989f%3A0x257dfde873f2ee4!2sJl.%20Ketintang%20Baru%20No.8%2C%20Ketintang%2C%20Kec.%20Gayungan%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060231!5e0!3m2!1sen!2sid!4v1654185402932!5m2!1sen!2sid" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="col-12">
            <div class="contact-form bg-white">
                <div id="success"></div>
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                <div class="text-center">
                    <h4 class="text-primary mb-3">Contact Us</h4>
                </div>
                    <div class="card-deck">
                        <div class="card text-center">
                            <div class="card-header">
                                <h6 class="card-title">Whatsapp</h6>
                              </div>
                             <img class="card-img-center">
                          <img class="card-img-top" src="img/wasq.png" alt="Card image cap" style="height: 300px;width: 300px">
                          <div class="card-body">
                            <div class="card-footer">
                                <b>+62 5213 4455 890</b>
                            </div>
                          </div>
                        </div>

                        <div class="card text-center">
                            <div class="card-header">
                                <h6 class="card-title">Gmail</h6>
                              </div>
                          <img class="card-img-top" src="img/gmailsq.png" alt="Card image cap" style="height: 300px;width: 300px" >
                          <div class="card-body">
                            <div class="card-footer">
                                <b>kucingku@gmail.com</b>
                            </div>
                          </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
  
@endsection