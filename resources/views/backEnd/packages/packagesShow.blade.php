@extends('backEnd.layout.master')
@section('title')
Packages
@endsection


@section('mainContent')


<div class="container">
  
    <div class="starter-template min_height_all">
        
<h3 style="color: green">{{Session::get('message')}}</h3> 
        <table class="table table-dark" style="text-align:">
            <thead>
                <tr>
                    <th>Package Type</th>
                    <th>Package Name</th>
                    <th>Price</th>
                    <th>Trip</th>
                    <th>Registration Deadline</th>
                    <th>Description</th>
                    <th colspan="2">Operation</th>
                </tr>
            </thead>
            <tbody>
@foreach($packages as $pack)
<tr>
    <td>{{$pack->packageType}}</td>
    <td>{{$pack->packageName}}</td>
    <td>{{$pack->price}}</td>
    <td>{{$pack->trip}}</td>
    <td>{{$pack->regDeadline}}</td>
     <!--<td style="height: 200px; overflow: scroll;">{!! $pack->description !!}</td>-->
    <td><button type="button" name='view' class="btn btn-info view" id="{{$pack->pId }}">Details</button></td>
    <td>EDIT</td>
    <td><a href="{{url('/deletePackageFull').'/'. $pack->pId}}" class="btn badge-danger">DELETE</a></td>
</tr>

@endforeach

            </tbody>
        </table>







<div class="modal fade col-md-12 col-sm-12 col-xs-12" id="post_modal">
    <div class=" modal-dialog" style="background: white;">
                <!--<div class="modal-content">-->
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      <h4 class="modal-title">Package Details</h4>
                  </div>
                <div class="modal-body" id="post_detail" style="width: 500px;">
                   
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                <!--</div>-->
  </div>
</div>




    </div>

</div>
@endsection