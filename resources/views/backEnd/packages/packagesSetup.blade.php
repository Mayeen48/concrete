@extends('backEnd.layout.master')
@section('title')
Packages
@endsection


@section('mainContent')




<div class="container">

    <div class="starter-template min_height_all">
        <h3 style="color: green">{{Session::get('message')}}</h3>
 
        <!--<form action="../src/tourInsert.php" method="POST" class="form-validate" id="test" enctype="multipart/form-data" novalidate>-->
        
        {{ Form::open(['url' => 'packageStore', 'method' => 'post','enctype'=>'multipart/form-data','id'=>'test']) }}
         
             <h1>Packages</h1>

        <div class="form-group row" style="font-size: 20px;">
            <label for="colFormLabel" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
               <label class="radio-inline"><input type="radio" name="packageType" value="Tour" required>Tour</label>
               <label class="radio-inline"><input type="radio" name="packageType" value="HajjAndOmra" required>Hajj And Omra</label>
               <label class="radio-inline"><input type="radio" name="packageType" value="AirTicketing" required>Air Ticketing</label>
               <label class="radio-inline"><input type="radio" name="packageType" value="HotelBooking" required>Hotel Booking</label>
               <label class="radio-inline"><input type="radio" name="packageType" value="VisaProcessing" required>Visa Processing</label>
            </div>
        </div>
              
       <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Package Name</label>
            <div class="col-sm-10">
                <input type="text" placeholder="Enter Your Package name" class="form-control" name="pName">
            </div>
       </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Trip</label>
            <div class="col-sm-10">
                <select class="form-control" name="pTrip">
                    <option value="">----Trip---</option>
                    <option value="One Way">One Way</option>
                    <option value="Two Way">Two Way</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Select Country</label>
            <div class="col-sm-10">
                <select class="form-control" name="pCountry" onchange="dist(this.value)">
                    <option value="">----Select Country---</option>
                    @foreach($countries as $country)
                    <option value="{{$country->cId}}">{{$country->countryName}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Select District</label>
            <div class="col-sm-10 di">
                <select class="form-control" name="pDistrict">
                    <option value="">----Select District---</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Enter Price</label>
            <div class="col-sm-10">
                <input type="text" placeholder="Enter Your Package Price" class="form-control" name="pPrice">
            </div>
        </div>

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Enter Registration Deadline</label>
            <div class="col-sm-10">
                <input type="date" placeholder="Enter Registration Deadline" class="form-control" name="pDeadline">
            </div>
        </div>

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Upload File</label>
            <div class="col-sm-10">
                <input type="file" placeholder="Enter Image Here" class="form-control" name="image">
            </div>
        </div>

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
               <input type="submit" value="Save" class="btn btn-primary  form-control">
            </div>
        </div>


        {{ Form::close() }}
        <!--</form>-->




    </div>

</div>
@endsection