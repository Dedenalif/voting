@extends('master')
@extends('layout.beranda')

@section('content')
<title>{{ $title }}</title>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
                <div style="margin-bottom: 35px;">
                    <div id="container" style="width: 100%; height: 100%; margin: 0 auto"></div>
                </div>
            </div>
            <div class="col-md-4">
                <center>
                <table class="table-hover">
                    @foreach ($hasil as $hs)
                        <tr>
                            <th>{{ $hs['name'] }}</th>
                            <th>:</th>
                            <th>{{ $hs['y'] }}Siswa</th>
                        </tr>
                    @endforeach
                </table>
                </center>
            </div>
        </div>

@include('sweetalert::alert')
@endsection
@section('footer')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Grafik Hasil Voting Kandidat'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: {!! json_encode($hasil) !!}
    }]
});
</script>
      </div>
    </div>

    <footer class="main-footer">
        @include('layout.footer')
    </footer>
</div>
@endsection
