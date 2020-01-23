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
                <a href="add.order.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add Order</a>
                <a href="view_report.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">View Report</a>
            </div>        
        </div>
    </div>

    <!-- Default form contact -->
        <form class="text-center border border-light p-5">

            <p class="h4 mb-4">:: Add Orders ::</p>

            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                  <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>

                <div class="col-auto my-1">
                  <div class="custom-control custom-checkbox mr-sm-2">
                    <input type="text" class="custom-control-input" id="customControlAutosizing">
                    <label class="custom-control-label" for="customControlAutosizing">Remember my preference</label>
                  </div>
                </div>

                <div class="col-auto my-1">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
        <!-- Default form contact -->

    <div style="padding-bottom: 25px; display: inline-block;">
        <h4>tea:{{ $user->addorder->tea}}</h4>
        <h4>coffee:{{ $user->addorder->coffee}}</h4>
        <h4>samosa:{{ $user->addorder->samosa}}</h4>
        <h4>cake:{{ $user->addorder->cake}}</h4>
    </div>
</div>
@endsection
