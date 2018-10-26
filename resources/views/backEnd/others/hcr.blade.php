@extends('backEnd.layout.master')
@section('title')
Gallery List
@endsection

@section('mainContent')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

    
    <div class="starter-template min_height_all">
        <h3 style="color: green">{{Session::get('message')}}</h3>
        <div class="row">
 {{ Form::open(['url' => 'hcrSetup','method' => 'post']) }}
        <div class="form-group row">
            <input type="hidden" value="{{$hcr[0]->hId}}" class="form-control" name="hId" />
            <label for="colFormLabel" class="col-sm-2 col-form-label">Happy Client</label>
             <div class="col-sm-10">
                 <input type="number" value="{{$hcr[0]->happyClient}}" class="form-control" name="happyClient" />
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Ratings</label>
            <div class="col-sm-10">
                <input type="number" value="{{$hcr[0]->rating}}" class="form-control" name="rating" />

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
       
        
    </div>


@endsection