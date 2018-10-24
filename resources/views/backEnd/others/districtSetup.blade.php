@extends('backEnd.layout.master')
@section('title')
Country List
@endsection

@section('mainContent')
<div class="container">
    <h3 style="color: green">{{Session::get('message')}}</h3>
    <div class="starter-template min_height_all">
        {{ Form::open(['url' => 'districtSetup', 'method' => 'post']) }}

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Select Country</label>
            <div class="col-sm-10">
                <select name="cId" required="" class="form-control">
                    <option value="">---Please Select---</option>
                    @foreach($countries as $country)
                    <option value="{{$country->cId}}">{{$country->countryName}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Enter District</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="districtName" placeholder="Please Enter District" required/>
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
                    <th>District Id</th>
                    <th>Country Name</th>
                    <th>District Name</th>
                    <th>Operation</th>
                </tr>
            </thead>
            @foreach($countryDistricts as $countryDistrict)

            <tr>
                <td>{{ $countryDistrict->dId}}</td>
                <td>{{ $countryDistrict->countryName}}</td>
                <td>{{ $countryDistrict->districtName}}</td>
                <td><a href="{{url('/districtDelete/'.$countryDistrict->dId)}}" class="btn btn-danger">DELETE</a></td>
            </tr>
            @endforeach


            </tbody>

        </table>

    </div>
</div>

@endsection
