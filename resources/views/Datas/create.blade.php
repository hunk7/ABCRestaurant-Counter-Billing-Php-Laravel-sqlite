@extends('layouts.app')

@section('content')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">   </script>
        <script>

            $(document).ready(function(){

                $(document).on("change","#selectboxnumbers",function(){
                    //user is user picks new option
                    var value1 =0,value2 = 0;

                    value1 = $("#selectboxnumbers option:selected").attr("value") * 1;
                    value2 = $("#quantity").val() * 1;

                    if(value1 != "" && value2 != "" && value1 != "undefined" && value2 != "undefined"){
                        $("#totalamount").html("" + Math.round(value1 * value2));
                    }
                });
                $("input").on("keyup change",function(){
                    //user is typing so will trigger this
                    var value1 =0,value2 = 0;

                    value1 = $("#selectboxnumbers option:selected").attr("value");
                    value2 = $("#quantity").val();

                    if(value1 != "" && value2 != "" && value1 != "undefined" && value2 != "undefined"){
                        $("#totalamount").html("" + Math.round(value1 * value2));
                    }
                });
            });
        </script>

                <!-- Default form contact -->
        <form action="/p" enctype="multipart/form-data" class="text-center border border-light p-5" method="POST">

            @csrf

            <p class="h4 mb-4">:: Add Orders ::</p>

            <div class="form-row align-items-center " style="display: flex;">
                <div class="col-auto my-1">
                  <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect"></label >
                  <select class="custom-select mr-sm-2" id="product" name="product" value="{{ old('product') }}" required="required">
                    
                    <option selected id="1" value="TEA">TEA</option>
                    <option id="2" value="COFFEE">COFFEE</option>
                    <option id="3" value="SAMOSA">SAMOSA</option>
                    <option id="4" value="CAKE">CAKE</option>
                  </select>
                </div>

                <div class="col-auto my-1">
                  <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label >
                  <select class="custom-select mr-sm-2" id="selectboxnumbers" required="selected">
                    <option selected>Choose...</option>
                    <option id="1" value="10">TEA 10Rs</option>
                    <option id="2" value="10">COFFEE 10Rs</option>
                    <option id="3" value="15">SAMOSA 15RS</option>
                    <option id="4" value="15">CAKE 15RS</option>
                  </select>
                </div>

                    <div class="form-group row" style="padding-top: 23px;">
                            <label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('quantity') }}</label>

                            <div class="col-md-6">
                                <input id="quantity" type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}" required autocomplete="quantity" autofocus>

                                @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                <div class="col-auto my-1" style="padding-bottom: 2px;">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                <div class="col-auto my-1" style="padding-bottom: 2px;">
                  <button type="submit" class="btn btn-primary">Total Amount (Rs) :</button>
                </div>

                <div class="col-auto my-1" style="padding-bottom: 2px;">
                  <textarea id="totalamount" type="number" class="form-control @error('total_amount') is-invalid @enderror" name="total_amount" value="{{ old('total_amount') }}" required autocomplete="total_amount" autofocus style="width: 210px;"></textarea>
                </div>

                @error('total_amount')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
            </div>
        </form>
        <!-- Default form contact -->
    </div>
</div>
@endsection
