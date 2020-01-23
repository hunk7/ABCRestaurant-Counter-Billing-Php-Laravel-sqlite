@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="align-content: center;">Successful</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     You are logged In <div>Welcome {{ Auth::user()->username }}</div>
                </div>
            </div>
        </div>

        <div class="button" style="padding-top: 30px;">
            <div class="buttonStyle">
                <a href="/p/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add Order</a>
                <a href="/p/report" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">View Report</a>
                <a href="/p/transaction" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Transactions</a>
            </div>        
        </div>
    </div>
</div>

<?php
 
$dataPoints = array( 
    array("label"=>"TEA", "y"=>33.02),
    array("label"=>"COFFEE", "y"=>42.55),
    array("label"=>"SAMOSA", "y"=>13.47),
    array("label"=>"CAKE", "y"=>10.96),
)
?>

<head>
<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    title: {
        text: "people's choice from our Restaurant"
    },
    subtitles: [{
        text: "Year 2018"
    }],
    data: [{
        type: "pie",
        yValueFormatString: "#,##0.00\"%\"",
        indexLabel: "{label} ({y})",
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();
 
}
</script>
</head>

<hr><hr>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

@endsection
