@extends('layouts.landing')

@section('style')
<link rel="stylesheet" href="{{ asset('sb-admin/css/sb-admin-2.css') }}">
<link rel="stylesheet" href="{{ asset('sb-admin/vendor/datatables/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
@endsection

@section('content')
<section class="hero-banner-sm finance-banner magic-ball magic-ball-banner" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 0px -80px" data-top-bottom="background-position: 0 100px">
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
      <canvas id="finance"></canvas>
      <br><hr><br>
      <table class="table table-hover" id="dataTable">
        <thead>
          <tr>
            <th>Bulan</th>
            <th>Tahun</th>
            <th>Link</th> 
            <th>Pemasukan</th>  
            <th>Pengeluaran</th>  
          </tr>
        </thead>
        @foreach($financialReports as $fr)
          <tr>
            <td>{{ $fr->month }}</td>
            <td>{{ $fr->year }}</td>
            <td><a style="text-decoration: none;" class="text-info" href="{{ $fr->link_url }}" target="_black">{{ $fr->link_url }}</a></td>
            <td>Rp. {{ $fr->income }}</td> 
            <td>Rp. {{ $fr->outcome }}</td>
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
$(function() {
    $.ajax({
        dataType: 'json',
        url: `/v1/get-finance-report`,
        type: 'GET',
        success:
            function (res) {
              populateChartData(res, 'finance')
            },
        error: 
            function (xhr, textStatus, errortdrown) {
                response = xhr.responseText;
                jsonResponse = JSON.parse(response);
                console.log("error",jsonResponse)
                swal ("Oops", "Cant fetch data", "error");
        },
    });
});

function populateChartData(pack = [], element = '') {
  label = []
  income = []
  outcome = []
  data = []
  for (var i = 0; i < pack.length; i++) {
    label.push(`${pack[i].month} ${pack[i].year}`)
    income.push(pack[i].income)
    outcome.push(pack[i].outcome)
  }
  data.push({'data': income, 'label': 'Pemasukan'})
  data.push({'data': outcome, 'label': 'Pengeluaran'})
  initChart(label, data, element)
}

function initChart(label = [], data = [], element = '') {
  var colors= ['#FF0000', '#FF7F00', '#FFFF00', '#00FF00', '#0000FF', '#4B0082', '#9400D3', '#DCEDC8', '#F1F8E9'];
  datasets = []
  var ctx = document.getElementById(element);
  for (var i = 0; i < data.length; i++) {
    colour = colors[Math.floor(Math.random()*(colors.length+1))];
    datasets.push({
      fill: 'false',
      backgroundColor: colour,
      borderColor: colour,
      label: data[i].label,
      data: data[i].data,
      borderWidth: 3
    })
  }
  var financeChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: label,
          datasets: datasets
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  }
              }],
              xAxes: [{
                  gridLines: { display: false },
              }]
          }
      }
  });  
}
</script>
@endsection