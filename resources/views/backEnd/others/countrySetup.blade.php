@extends('backEnd.layout.master')
@section('title')
Country List
@endsection


@section('mainContent')
<div class="container">
    <h3 style="color: green">{{Session::get('message')}}</h3>
    <div class="starter-template min_height_all">

        {{ Form::open(['url' => 'countrySetup', 'method' => 'post']) }}
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Enter District</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="country" placeholder="Please Enter District" required/>
            </div>
        </div>
        <div class="form-group row">

            <div class="col-sm-2"></div>


            <div class="col-sm-10">
                <input type="submit" class="form-control btn btn-primary" id="" value="Submit">
            </div>
        </div>
        

        {{ Form::close() }}

        <table class="table">
            <thead>
                <tr>
                    <th>Country Id</th>
                    <th>Country Name</th>
                    <th>Operation</th>
                </tr>
            </thead>
  @foreach($countries as $country)
  <tr>
      <td>{{$country->cId}}</td>
      <td>{{$country->countryName}}</td>
      <td><a href="{{url('/countryDelete/'.$country->cId)}}" class="btn btn-danger">DELETE</a></td>
  </tr>
  
  @endforeach
        </table>


    </div>
</div>


@endsection