@extends('backEnd.layout.master')
@section('title')
Gallery List
@endsection

@section('mainContent')
<br>
<br>
<br>
<br>
<div class="container">
    <h3 style="color: green">{{Session::get('message')}}</h3>
    <div class="starter-template min_height_all">
        {{ Form::open(['url' => '/galleryStore', 'method' => 'post']) }}

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Image Name</label>
             <div class="col-sm-10">
                <input type="text" class="form-control" name="imageName" placeholder="Please Enter Image Name" maxlength="100" required/>
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="aboutImage" placeholder="Please Enter About Image" maxlength="200" required></textarea>
                
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="image" required/>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <input type="submit" class="form-control btn btn-primary" id="" value="Submit">
            </div>
        </div>
        {{ Form::close() }}
        <div class="row">
            @foreach($galleries as $gallery)
             <div class="col-lg-3 col-md-3 col-sm-6 team-w3ls">
                <div class="view view-third">
                    <img src="{{asset('public/images/galleries/').'/'.$gallery->image}}" alt="{{ $gallery->imageName}}" title="{{ $gallery->imageName}}" class="img-responsive">
                    <div class="mask">
                        <h2>{{ $gallery->imageName}}</h2>
                        <h3>{{ $gallery->aboutImage}}</h3>
                        <a href="{{url('/districtDelete/'.$gallery->dId)}}" class="btn btn-danger">DELETE</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
</div>

@endsection
