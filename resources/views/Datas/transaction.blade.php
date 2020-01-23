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
<br>

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
                    
                    <div>Product  ::  {{ $data->product }}</div>
                    <div>Quantity  ::  {{ $data->quantity }}</div>
                    <div>Total_Amount  ::  {{ $data->total_amount }}</div>
                    <div>Created at  ::  {{ $data->created_at->format('d/m/Y H:i:s') }}</div>
                    <div>Order Id  ::  {{ $data->id }}</div>
                </div>
            </div>
            <br>
        </div>

@endforeach
    </div>
</div>
@endsection
