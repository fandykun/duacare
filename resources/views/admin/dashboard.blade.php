@extends('layouts.admin')

@section('style')
<style>
</style>    
@endsection

@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">

  </div>
  <!-- /.container-fluid -->
@endsection


@section('script')
  <!-- Page level plugins -->
  <script src="{{ asset('sb-admin/vendor/chart.js/Chart.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('sb-admin/js/demo/chart-area-demo.js') }}"></script>
  <script src="{{ asset('sb-admin/js/demo/chart-pie-demo.js') }}"></script>

<script>
    $("#nav-dashboard").addClass("active");
</script>
@endsection