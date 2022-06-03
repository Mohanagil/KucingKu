@extends('main.app')
@section('content')
<!-- Donasi Start -->
<div class="container-fluid pt-5">
    <div class="d-flex flex-column text-center mb-5">
        <h5 class="text-primary mb-3">Donasi</h5>
        <h3 class="m-0">Bantu Kami untuk ikut membantu mereka</h1>
    </div>
    <div class="row">
        <div class="col-12 p-0">
            <iframe style="width: 100%; height: 100px;" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="col-12">
            <div class="contact-form bg-white">
                <div id="success"></div>
                <div class="card mb-3">
                    <img src="img/kucing-blog3.jpeg" class="card-img-top" alt="Image">
                        <div class="card-body">
                        <h5 class="card-title">donasi untuk kucing jalanan</h5>
                        <p class="card-text">Mari bersama membantu kucing jalanan melalui donasi ini. Salurkan donasi Anda melalui transfer ke rekening bank kami atau e-money di bawah ini.</p>
                        <p style="text-align: left; font-size: 20px; font-weight: bold; color: black ">Donasi dengan Transfer Rekening Bank</p>
                        <p class="card-text">Rekening ini dikhusukan untuk kegiatan donasi KucingKu</p>
                        <table class="table">
                            <thead>
                                <tr>

                                <th scope="col">Bank</th>
                                <th scope="col">Nomor Rekening</th>
                                <th scope="col">Swift Code</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="img/mandiri1.png" class="rounded float-start" alt="Bank Mandiri" style="width: 90px; height: 30px"></td>
                                    <td>135000 352 763 2 <br> a.n Kucingku Cat Shelter</td>
                                    <td>MANDIRJA</td>
                                </tr>
                                <tr>
                                    <td><img src="img/bca.png" class="rounded float-start" alt="Bank BCA" style="width: 90px; height: 30px"></td>
                                    <td>096 203 6007 <br> a.n Kucingku Cat Shelter</td>
                                    <td>CAJBCAIN</td>
                                </tr>
                                <tr>
                                    <td><img src="img/bni.png" class="rounded float-start" alt="Bank BNI" style="width: 90px; height: 30px"></td>
                                    <td>1555 2007 93<br> a.n Kucingku Cat Shelter</td>
                                    <td>BNIDINJA</td>
                                </tr>

                            </tbody>
                        </table>
                        <p style="text-align: left; font-size: 20px; font-weight: bold; color: black ">Donasi dengan E-Money</p>
                        <p class="card-text">Donasi ini juga dapat dikirimkan melalui e-money di bawah ini</p>
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">E-Money</th>
                                <th scope="col">Nomor </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="img/dana.png" class="rounded float-start" alt="DANA" style="width: 90px; height: 30px"></td>
                                    <td>082336781243 <br> a.n Puji Septiyana </td>

                                </tr>
                                <tr>
                                    <td><img src="img/ovo.png" class="rounded float-start" alt="OVO" style="width: 90px; height: 30px"></td>
                                    <td>081562325789 <br> a.n Mohammad Agil</td>

                                </tr>
                                <tr>
                                    <td><img src="img/gopay.png" class="rounded float-start" alt="GOPAY" style="width: 90px; height: 30px"></td>
                                    <td>085321436781<br> a.n Reynisa Beta</td>

                                </tr>
                                <tr>
                                    <td><img src="img/linkaja.png" class="rounded float-start" alt="LinkAja" style="width: 70px; height: 50px"></td>
                                    <td>082153678921<br> a.n Rendy Pratama</td>

                                </tr>
                            </tbody>
                        </table>
                        <p class="card-text"><small class="text-muted">Terima Kasih Atas Kepedulian Anda</small></p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Donasi End -->
@endsection
