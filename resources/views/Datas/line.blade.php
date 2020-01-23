@extends('layouts.app')

@section('content')

@foreach(Auth::user()->datas as $data)

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="align-content: center;">Transactions for {{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>Created at  ::  {{ $data->created_at->format('d/m/Y') }}</div>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>

<?php $one_two = Auth::user()->datas()->where($data->created_at->format('d/m/Y'),'=','12/06/2019')->sum('total_amount');
$one_three = Auth::user()->datas()->where($data->created_at->format('d'),'=','13/06/2019')->sum('total_amount');
$one_four = Auth::user()->datas()->where($data->created_at->format('d'),'=','14/06/2019')->sum('total_amount');
?>


<head>
  <script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title:{
        text: "Line Graph for date wise Sales"
      },
      axisX:{
        interval: 1,
        intervalType: "day"
      },
      data: [
      {
        type: "line",
        dataPoints: [//array
       {
         x: new Date(2012, 06, 11),
         y: <?php $one_one; ?>25,
       }, {
         x: new Date(2012, 06, 12),
         y: <?php $one_two; ?>45,

       },{
         x: new Date(2012, 06, 13),
         y: <?php $one_three; ?>34,

       }, {
         x: new Date(2012, 06, 14),
         y: <?php $one_four; ?>0,   //$one_four;
       }
       ]
     }
     ]
   });
    chart.render();
  }
  </script>
  <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
@endforeach
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="button" style="padding-top: 30px;">
            <div class="buttonStyle">
                <a href="/p/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add Order</a>
                <a href="{{ url('/ABCRestaurant/' . auth()->user()->id) }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Return to Mian content</a>
            </div>        
        </div>
    </div>
</div>

<hr><hr>
<br>
<h2 style="align-items: center; display: flex; justify-content: center"><b>:: Line Graph ::</b></h2>
<br><br>

  <div id="chartContainer" style="height: 300px; width: 100%;">
  </div>

<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="button" style="padding-top: 30px;">
            <div class="buttonStyle">
                <a href="/p/report" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Report</a>
                <a href="/p/pie" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Pie</a>
            </div>        
        </div>
    </div>
</div>

</body>
@endsection
