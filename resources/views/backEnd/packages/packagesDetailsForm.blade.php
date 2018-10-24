

{{ $packages[count($packages)-1]->packageName }}

@extends('backEnd.layout.master')
@section('title')
Packages
@endsection


@section('mainContent')




<div class="container">

    <div class="starter-template min_height_all">
        <table class="table table-dark" style="text-align:">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Package Type</th>
                    <th>Package Name</th>
                    <th>Price</th>
                    <th>Trip</th>
                    <th>Registration Deadline</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td><img src="{{ asset('public/images/').'/'.$imgUrl }}" width="100"height="50"></td>
                    <td>{{ $packages[count($packages)-1]->packageType }}</td>
                    <td>{{ $packages[count($packages)-1]->packageName }}</td>
                    <td>{{ $packages[count($packages)-1]->price }}</td>
                    <td>{{ $packages[count($packages)-1]->trip }}</td>
                    <td>{{ $packages[count($packages)-1]->regDeadline }}</td>
                    <td><a href="{{url('/deletePackageSingle'.'/'. $packages[count($packages)-1]->pId)}}" class="btn badge-danger">DELETE</a></td>
                </tr>



            </tbody>
        </table>

        <!--<form action="../src/tourInsert.php" method="POST" class="form-validate" id="test" enctype="multipart/form-data" novalidate>-->

        {{ Form::open(['url' => 'packageDetailsStore', 'method' => 'post','enctype'=>'multipart/form-data','id'=>'test']) }}

        <h1>Package Details Insert</h1>
        
        <input type="hidden" value="{{ $packages[count($packages)-1]->pId }}" name="pId">

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <textarea id="myTextarea" name="pAllData"><img src="{{ asset('public/images/').'/'.$imgUrl }}"></textarea>
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