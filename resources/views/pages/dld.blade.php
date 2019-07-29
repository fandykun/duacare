@extends('layouts.landing')

@section('style')

@endsection

@section('content')
  <!--================Hero Banner SM Area Start =================-->
  <section class="hero-banner-sm dld-banner magic-ball magic-ball-banner">
    <div class="container">
      <div class="hero-banner-sm-content">
        <h1>Duacare Loyal Donature (DLD)</h1>
        {{-- <p>Air seed winged lights saw kind whales in sixth best a dont seas dron image so fish all tree on</p> --}}
      </div>
    </div>
  </section>
  <!--================Hero Banner SM Area End =================-->

  <!--================Tour section Start =================-->
@if (\Session::has('success'))
  <div class="alert alert-primary text-center" role="alert">
    Selamat, anda telah menjadi <em>Duacare Loyal Donature</em>, anda akan menerima email dalam kurun waktu tertentu sebagai laporan keuangan duacare. Terimakasih!
  </div>
@elseif (\Session::has('error'))
  <div class="alert alert-danger text-center" role="alert">
    Telah terjadi kesalahan, mohon cek kelengkapan data dan ulangi proses pendaftaran.
  </div>
@endif
  <section class="section-margin">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="tour-card">
            <img class="card-img rounded-0" src="{{ asset('duacare-image/dld/dld4.jpg') }}" alt="">
            <div class="tour-card-overlay">
              <div class="media">
                <div class="media-body">
                  <h4>DFR 2019</h4>
                  <p>Sosialisasi penanaman Kokedama<br>di panti asuhan.</p>
                </div>
                <div class="media-price">
                  <h4 class="text-primary"></h4>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="row">
            <div class="col-lg-10 offset-lg-1">
              <div class="tour-content">
                <h2>Duacare Loyal Donature</h2>
                <p>Duacare loyal donature telah membantu mewujudkan mimpi-mimpi banyak orang bersama duacare melalui serangkaian kegiatan yang telah terlaksana.</p>
              </div>
            </div>
          </div>

          <div class="tour-card">
            <img class="card-img rounded-0" src="{{ asset('duacare-image/dld/dld1.jpg') }}" alt="">
            <div class="tour-card-overlay">
              <div class="media">
                <div class="media-body">
                  <h4 class="text-primary">DGTS 2019</h4>
                  <p>Pelaksanaan Talkshow di<br>di SMA 2 Lumajang.</p>
                </div>
                <div class="media-price">
                  <h4 class="text-primary"></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-7">
          <div class="tour-card">
            <img class="card-img rounded-0" src="{{ asset('duacare-image/dld/dld3.jpg') }}" alt="">
            <div class="tour-card-overlay">
              <div class="media">
                <div class="media-body">
                  <h4 class="text-primary">DFR 2018</h4>
                  <p>Pemberian bantuan kepada<br>masyarakat desa senduro.</p>
                </div>
                <div class="media-price">
                  <h4 class="text-primary"></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5">
          <div class="tour-card">
            <img class="card-img rounded-0" src="{{ asset('duacare-image/dld/dld2.jpg') }}" alt="">
            <div class="tour-card-overlay">
              <div class="media">
                <div class="media-body">
                  <h4 class="text-primary">DFR 2018</h4>
                  <p>Pemeriksaan kesehatan gratis.</p>
                </div>
                <div class="media-price">
                  <h4 class="text-primary"></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Tour section End =================-->

  <section class="section-margin">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <i class="fas fa-clipboard-list icon-gradient"></i>
        <h2>Daftar DLD</h2>
        <hr>
      </div>
      <div class="row">
        <div class="col-lg-6 col-xl-5 align-self-center mb-5 mb-lg-0">
          <div class="search-content">
            <h2 class="text-center mb-5">Bergabunglah menjadi salah satu <em>Duacare Loyal Donature</em></h2>
            <div class="text-center">
              <img class="card-img rounded-0 img-fluid vert-move" style="height: 250px; width: auto; margin: auto;" src="{{ asset('duacare-image/dld.jpg') }}" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-6 offset-xl-1">
          <div class="search-wrapper">
            <h3>Daftar Duacare Loyal Donature</h3>

            <form class="search-form" id="daftar-dld" action="{{ route('submit.dld') }}" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Nama Lengkap" required autocomplete="off" max="124">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="number" min="1977" class="form-control" name="graduation_year" id="graduation_year" placeholder="Tahun lulus SMA" required autocomplete="off" max="<?php echo date("Y")+3; ?>">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" name="origin_address" id="origin_address" placeholder="Alamat di Lumajang" required autocomplete="off" max="124">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-address-book"></i></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" name="current_address" id="origin_address" placeholder="Alamat domisili" required autocomplete="off" max="124">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-address-book"></i></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="No HP/Whatsapp" required autocomplete="off" max="100">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" name="line" placeholder="ID Line (Opsional)" max="100">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fab fa-line"></i></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" name="instagram" placeholder="Instagram (Opsional)" max="100">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <select name="bank" id="bank" required>
                  <option value="disabled" disabled selected>Bank yang digunakan</option>
                  <option value="Bank Mandiri">Bank Mandiri</option>
                  <option value="Bank Negara Indonesia (BNI)">Bank Negara Indonesia (BNI)</option>
                  <option value="Bank Rakyat Indonesia (BRI)">Bank Rakyat Indonesia (BRI)</option>
                  <option value="Bank Central Asia (BCA)">Bank Central Asia (BCA)</option>
                  <option value="Bank Jatim">Bank Jatim</option>
                  <option value="Bank BNI Syariah">Bank BNI Syariah</option>
                  <option value="Bank Syariah Mandiri">Bank Syariah Mandiri</option>
                  <option value="BCA Syariah">BCA Syariah</option>
                  <option value="Bank BRI Syariah">Bank BRI Syariah</option>
                </select>
              </div>
              <div class="form-group">
                <select id="donation_type" name="donation_type" required>
                  <option value="disabled" disabled selected>Jenis Donasi</option>
                  <option value="Bulanan">Bulanan</option>
                  <option value="Insidental">Insidental</option>
                </select>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control amount" name="amount" id="amount" placeholder="Jumlah donasi">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-coins"></i></span>
                  </div>
                </div>
              </div>
              <a href="javascript:void(0)" class="text-primary snk">syarat & ketentuan</a>
              <div class="form-group">
                <button class="button border-0 mt-3 save" type="button">Jadikan saya DLD!</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </section>

@include('partials.contact')

@endsection

@section('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  <script>
    $("#nav-dld").addClass("active");
    $(document).ready(function(){
        $('.amount').mask('0.000.000.000.000', {reverse: true});
    });

    $(document).on('click', '.save', function(){
      swal({
        title: "Apakah Anda Yakin?",
        text: "Dengan ini anda menyetujui syarat-syarat yang berlaku",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((submitted) => {
        if (submitted) {
          if (($('#name').val() == '') || ($('#graduation_year').val() == '') || ($('#origin_address').val() == '') || ($('#origin_address').val() == '') || ($('#email').val() == '') || ($('#phone_number').val() == '') || ($('#bank').val() == '') || ($('#donation_type').val() == '') || ($('#amount').val() == '')) {
            swal("Mohon cek kembali kelengkapan data anda, data tidak boleh kosong", {
              icon: "warning",
            });
            return;
          }

          $('#daftar-dld').submit();
        } else {
          swal("Silahkan melengkapi kelengkapan data anda");
        }
      });
    });

    $(document).on('click', '.snk', function(){
      swal("Syarat & Ketentuan", "- Menerima email rutin dari duacare perihal kegiatan dan hal-hal lain\n- Penggunaan 10% dari dana donasi untuk operasional Duacare");
    });

  </script>

@endsection