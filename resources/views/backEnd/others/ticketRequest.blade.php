@extends('backEnd.layout.master')
@section('title')
Ticket Requests
@endsection


@section('mainContent')

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="container">
  
    <div class="starter-template min_height_all">
        
<h3 style="color: green">{{Session::get('message')}}</h3> 
        <table class="table table-dark" style="text-align:">
            <thead>
                <tr>
                    <th>Request Id</th>
                    <th>Person Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Departure</th>
                    <th>Return</th>
                    <th>Trip</th>
                    <th>Person</th>
                    <th>Seen/Unseen</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
@foreach($ticket_requests as $ticket_request)
@if(($ticket_request->status)==1)
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
    <td>{{$ticket_request->trid}}</td>
    <td>{{$ticket_request->name}}</td>
    <td>{{$ticket_request->email}}</td>
    <td>{{$ticket_request->phone}}</td>
    <td>{{$ticket_request->departure}}</td>
    <td>{{$ticket_request->destination}}</td>
    <td>{{$ticket_request->depDate}}</td>
    <td>{{$ticket_request->desDate}}</td>
    <td>{{$ticket_request->trip}}</td>
    <td>{{$ticket_request->person}}</td>
    <td>
        <abbr title="{{ $abbr }}"><a href="{{url('/ChengeTicketStatus').'/'. $ticket_request->trid}}" class="btn btn-info">Status</a></abbr>
    </td>
   
    <td><a href="{{url('/deleteTicketRequest').'/'. $ticket_request->trid}}" class="btn btn-danger">DELETE</a></td>
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