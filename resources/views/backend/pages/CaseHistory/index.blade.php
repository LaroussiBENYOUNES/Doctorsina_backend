@extends('backend.layouts.master')

@section('content')

<div class="container">
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
    <div class="form-group">
        <label for="track">Select </label>
        <select name="track" id="track" class="form-control mt-2">
            <option >Select </option>
            <option value="weight">Weight</option>
            <option value="glucose">Glucose</option>
            <option value="blood_pressure">Blood Pressure</option>
        </select>
    </div>

    <div id="weight" style="display:none">
        <form action="{{route('weight.store')}}" method="POST">
        {{ csrf_field() }}
            <div class="form-group mt-2">
                <label for="weight">Add Your Weight</label>
                <input class="form-control" type="number" name="weight" id="weight" placeholder="enter your weight">
                <input type="submit" value="add" class="btn btn-success mt-1">
            </div>
        </form>
    </div>

    <div id="glucose" style="display:none">
        <form action="{{route('glucose.store')}}" method="post">
        {{ csrf_field() }}
            <div class="form-group mt-2">
                <label for="glucose">Add Your glucose</label>
                <input class="form-control" type="number" name="glucose" id="glucose" placeholder="enter your glucose">
                <input type="submit" value="add" class="btn btn-success mt-1">
            </div>
        </form>
    </div>

    <div id="blood_pressure" style="display:none">
        <form action="{{route('bloodPressure.store')}}" method="post">
        {{ csrf_field() }}
            <div class="form-group mt-2">
                <label for="blood_pressure">Add Your blood pressure</label>
                <input class="form-control" type="number" name="blood_pressure" id="blood_pressure" placeholder="enter your blood pressure">
                <input type="submit" value="add" class="btn btn-success mt-1">
            </div>
        </form>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
<script>
      $('#track').on('change',function(){
        if( $(this).val()==="weight"){
        $("#weight").show()
        $("#glucose").hide()
        $("#blood_pressure").hide()
        }
        else if ( $(this).val()==="glucose"){
        $("#glucose").show()    
        $("#weight").hide()
        $("#blood_pressure").hide()
        }
        else if ( $(this).val()==="blood_pressure"){
        $("#blood_pressure").show()    
        $("#weight").hide()
        $("#glucose").hide()
        }
        else{
        $("#weight").hide()    
        $("#blood_pressure").hide()
        $("#glucose").hide()
        }
    });
</script>

 

@endsection