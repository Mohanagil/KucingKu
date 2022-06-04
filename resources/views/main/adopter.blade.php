@extends('main.app')
@section('content')
<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="d-flex flex-column text-center mb-5">
        <h5 class="text-primary mb-3">Adopter</h5>
    </div>
    <div class="row">
        <div class="col-12 p-0">
            <iframe style="width: 100%; height: 100px;" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="col-12">
            <div class="contact-form bg-white">
                <div id="success"></div>
                <form action="{{route('adopter.store')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" required="">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Alamat Rumah</label>
                      <input type="text" class="form-control" id="alamat" name="alamat" required="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nomor KTP</label>
                        <input type="text" class="form-control" id="no_ktp" name="no_ktp" required="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nomor HP</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" required="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" id="email" name="email" required="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Profesi</label>
                        <input type="text" class="form-control" id="profesi" name="profesi" required="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Sosial Media (FB/IG)</label>
                        <input type="text" class="form-control" id="sosmed" name="sosmed" required="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Pilih Kucing</label>
                        <select class="form-control select2" aria-label="Default select example" name="kucing" id="kucing">
                            <option selected disabled value="">Pilih Kucing</option>
                            @foreach ($kucing as $cat)
                            <option value="{{$cat->id}}">{{$cat->nama}} - {{$cat->ras}}</option>
                            @endforeach
                        </select>
                    </div>
                    <label for="exampleInputPassword1" class="form-label">Syarat dan Ketentuan</label>
                    <div class="mb-3" style="overflow: scroll; height: 120px">Syarat Menjadi Adopter<br>1. Bekerja sama dengan kami mulai dari awal proses tanya jawab, melengkapi dokumen dan persyaratan, hingga seterusnya demi kebaikan hewan adopsi.<br>2. Menandatangani <b>Perjanjian Adopsi KuicngKu</b> saat menjemput kucingnya.<br>3. Menerima kucingnya dalam kondisi apapun mengingat kucing yang diadopsi adalah kucing jalanan.<br>4. Bertanggung jawab penuh atas kehidupan dan kebutuhan hewan adopsi hingga akhir hayatnya.<br>5. Tidak akan dikonsumsi, digunakan sebagai pakan dan/atau dikembangbiakkan.<br>6.Mampu dan bersedia membawa ke dokter hewan dan/atau klinik kesehatan hewan jika sakit dan untuk mendapatkan vaksin, obat cacing, obat kutu dan pemeriksaan kesehatan secara berkala sesuai anjuran dokter hewan.
                            <br>7. Menyetujui kesepakatan sterilisasi sesuai jadwal dan tempat yang disepakati, jika hewan belum disteril saat diadopsi.<br>Ketentuan Menjadi Adopter<br>1. WAJIB membaca dan melengkapi Formulir Perjanjian Adopsi dengan lengkap.<br>2. WAJIB mengisi, menandatangani <b>Perjanjian Adopsi KucingKu</b> saat menjemput hewan adopsi.<br>3. Jika calon orang tua asuh berumur di bawah 18 tahun, masih sekolah dan/atau belum berpenghasilan tetap, maka <b>Perjanjian Adopsi KuicngKu</b> WAJIB ditandatangani oleh wali dari calon orang tua asuh.<br>4. WAJIB mengirimkan video yang memperlihatkan lingkungan rumah dan calon keluarga angkat, jika survei langsung tidak dapat dilakukan, melalui e-mail kucingku@gmail.com.<br>5. WAJIB memberikan kabar mengenai hewan adopsi (termasuk dalam bentuk foto) setidaknya sebulan sekali selama 3 (tiga) bulan pertama sejak diadopsi dan secara periodik, melalui e-mail kucingku@gamil.com.<br>6. Jika tidak menunjukkan itikad baik untuk bekerja sama atau mempersulit upaya komunikasi, maka kami berhak melaporkan kepada pihak yang berwenang untuk meminta pertanggungjawaban sebagai orang tua asuh.
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required="">
                        <label class="form-check-label" for="exampleCheck1">Saya Telah Membaca Syarat dan Ketentuan</label>
                    </div>
                    <button type="submit" class="btn btn-success">Ajukan</button>
                  </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection
@section('js')
<script>
$(document).ready(function() {
    $('.select2').select2();
});
</script>
@endsection
