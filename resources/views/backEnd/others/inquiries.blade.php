@extends('backEnd.layout.master')
@section('title')
Inquiries
@endsection


@section('mainContent')


<div class="container">
  
    <div class="starter-template min_height_all">
        
<h3 style="color: green">{{Session::get('message')}}</h3> 
        <table class="table table-dark" style="text-align:">
            <thead>
                <tr>
                    <th>Inquiry Id</th>
                    <th>Person Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Country</th>
                    <th>Message</th>
                    <th>Time</th>
                    <th>Package Details</th>
                    <th>Seen/Unseen</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
@foreach($inquiries as $inquiry)
@if(($inquiry->status)==1)
   @php
       $color="green";
       $abbr="Seen"
   @endphp
@else 
   @php
       $color="gray";
       $abbr="Not Seen"
   @endphp
 
@endif
<tr style="background: {{ $color }};">
    <td>{{$inquiry->iId}}</td>
    <td>{{$inquiry->iName}}</td>
    <td>{{$inquiry->iEmail}}</td>
    <td>{{$inquiry->iContact}}</td>
    <td>{{$inquiry->iCountry}}</td>
    <td>{{$inquiry->iMessage}}</td>
    <td>{{$inquiry->created_at}}</td>
    <td><button type="button" name='view' class="btn btn-info view" id="{{$inquiry->pId }}">Details</button></td>
    <td>
        <abbr title="{{ $abbr }}"><a href="{{url('/ChengeStatus').'/'. $inquiry->iId}}" class="btn btn-info">Status</a></abbr>
    </td>
   
    <td><a href="{{url('/deleteInquiries').'/'. $inquiry->iId}}" class="btn btn-danger">DELETE</a></td>
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