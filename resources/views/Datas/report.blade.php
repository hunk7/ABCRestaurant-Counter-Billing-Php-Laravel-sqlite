@extends('layouts.app')

@section('content')

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

<?php $TEA = Auth::user()->datas()->where('product','=','TEA')->sum('total_amount');
$COFFEE = Auth::user()->datas()->where('product','=','COFFEE')->sum('total_amount');
$SAMOSA = Auth::user()->datas()->where('product','=','SAMOSA')->sum('total_amount');
$CAKE = Auth::user()->datas()->where('product','=','CAKE')->sum('total_amount');
?>

@foreach(Auth::user()->datas as $data)

@endforeach
<?php

$dataPoints = array( 
    array("label"=>"TEA", "y"=>$TEA),
    array("label"=>"COFFEE", "y"=>$COFFEE),
    array("label"=>"SAMOSA", "y"=>$SAMOSA),
    array("label"=>"CAKE", "y"=>$CAKE),
)
?>

<head>
<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    title: {
        text: "Product wise Sales for TEA , COFFEE , SAMOSA , CAKE"
    },
    subtitles: [{
        text: "Number Indicates total Sales"
    }],
    data: [{
        type: "bar",
        yValueFormatString: "#,##0\"Rs\"",
        indexLabel: "{label} ({y})",
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();
 
}
</script>
</head>

<hr><hr>
<br>
<h2 style="align-items: center; display: flex; justify-content: center"><b>:: Bar Graph ::</b></h2>
<br><br>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>

<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="button" style="padding-top: 30px;">
            <div class="buttonStyle">
                <a href="/p/line" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Line</a>
                <a href="/p/pie" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Pie</a>
            </div>        
        </div>
    </div>
</div>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
@endsection
