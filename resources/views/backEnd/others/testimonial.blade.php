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
 {{ Form::open(['url' => '/testimonialStore','method' => 'post','enctype'=>'multipart/form-data']) }}
        <div class="form-group row">
            
            <label for="colFormLabel" class="col-sm-2 col-form-label">Name</label>
             <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="Please Enter Name" maxlength="100" />
            </div>
        </div>
        <div class="form-group row">
            
            <label for="colFormLabel" class="col-sm-2 col-form-label">Designation</label>
             <div class="col-sm-10">
                <input type="text" class="form-control" name="designation" placeholder="Please Enter Designation" maxlength="150" />
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Comments</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="comments" placeholder="Please Enter Comments" maxlength="500" ></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="image" />
                <span>Image Size Must Me Up to 2MB</span><br/>
                <span>Image Dimension Less Than 200X200 Pixel</span>
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
            @foreach($testimonials as $testimonial)
             <div class="col-lg-3 col-md-3 col-sm-6 team-w3ls">
                <div class="view view-third">
                    <img src="{{asset('public/images/testimonials/').'/'.$testimonial->image}}" alt="{{ $testimonial->name}}" title="{{ $testimonial->designation}}" class="img-responsive">
                    <div class="mask">
                        <h2>{{ $testimonial->name}}</h2>
                        <h3>{{ $testimonial->designation}}</h3>
                        <h4>{{ $testimonial->comments}}</h4>
                        <a href="{{url('/testimonialDelete/'.$testimonial->tId)}}" class="btn btn-danger">DELETE</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>


@endsection