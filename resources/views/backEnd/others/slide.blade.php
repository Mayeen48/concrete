@extends('backEnd.layout.master')
@section('title')
Gallery List
@endsection

@section('mainContent')
<br>
<br>
<br>
<br>

    
    <div class="starter-template min_height_all">
        <h3 style="color: green">{{Session::get('message')}}</h3>
        <div class="row">
 {{ Form::open(['url' => 'slideStore','method' => 'post','enctype'=>'multipart/form-data']) }}
        <div class="form-group row">
            
            <label for="colFormLabel" class="col-sm-2 col-form-label">Title</label>
             <div class="col-sm-10">
                <input type="text" class="form-control" name="title" placeholder="Please Enter Title" maxlength="250" />
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="description" placeholder="Please Enter About Image" maxlength="1000" ></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="image" />
                <span>Image Size Must Be Less Than 2MB</span><br/>
                <span>Image Dimension Less Than 1680X945 Pixel</span>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <input type="submit" class="form-control btn btn-primary" id="" value="Submit">
            </div>
        </div>
        {{ Form::close() }}
      </div>
        <div class="row">
            @foreach($slides as $slide)
             <div class="col-lg-3 col-md-3 col-sm-6 team-w3ls">
                <div class="view view-third">
                    <img src="{{asset('public/images/slides/').'/'.$slide->image}}" alt="{{ $slide->title}}" title="{{ $slide->title}}" class="img-responsive">
                    <div class="mask">
                        <h2>{{ $slide->title}}</h2>
                        <h3>{{ $slide->description}}</h3>
                        <a href="{{url('/slideDelete/'.$slide->sId)}}" class="btn btn-danger">DELETE</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>


@endsection