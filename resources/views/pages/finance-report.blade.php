@extends('layouts.landing')

@section('style')
<link rel="stylesheet" href="{{ asset('sb-admin/css/sb-admin-2.css') }}">
<link rel="stylesheet" href="{{ asset('sb-admin/vendor/datatables/dataTables.bootstrap4.min.css') }}">
  <style>

  </style>
@endsection

@section('content')
<!--================Hero Banner SM Area Start =================-->
<section class="hero-banner-sm magic-ball magic-ball-banner" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 0px -80px" data-top-bottom="background-position: 0 100px">
  <div class="container">
      <div class="hero-banner-sm-content">
      <h1>Laporan Keuangan</h1>
      </div>
  </div>
</section>
  <!--================Hero Banner SM Area End =================-->
<section class="section-padding magic-ball magic-ball-sm magic-ball-about">
  <div class="container">
    <div class="section-title text-center center mb-4">
        <h2>Laporan Keuangan Duacare</h2>
        <div class="clearfix"></div>
    </div>
    <div class="row justify-content-md-center table-responsive">
      <table class="table table-hover" id="dataTable">
        <thead>
          <tr>
            <th>Bulan</th>
            <th>Tahun</th>
            <th>Link</th> 
          </tr>
        </thead>
        @foreach($financialReports as $fr)
          <tr>
            <td>{{ $fr->month }}</td>
            <td>{{ $fr->year }}</td>
            <td>{{ $fr->link_url }}</td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
</section>

  
@endsection

@section('script')
<script src="{{ asset('sb-admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('sb-admin/js/sb-admin-2.min.js') }}"></script>
<!-- Page level plugins -->
<script src="{{ asset('sb-admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('sb-admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('sb-admin/js/demo/datatables-demo.js') }}"></script>

  <script>
  </script>
@endsection