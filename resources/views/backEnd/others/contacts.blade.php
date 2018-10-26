@extends('backEnd.layout.master')
@section('title')
Contact Information
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
                    <th>Contact Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Time</th>
                    <th>Status</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
@foreach($contacts as $contact)
@if(($contact->status)==1)
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
    <td>{{$contact->cId}}</td>
    <td>{{$contact->firstName}}</td>
    <td>{{$contact->lastName}}</td>
    <td>{{$contact->email}}</td>
    <td>{{$contact->phone}}</td>
    <td>{{$contact->message}}</td>
    <td>{{$contact->created_at}}</td>
    <td>
        <abbr title="{{ $abbr }}"><a href="{{url('/ContactStatus').'/'. $contact->cId}}" class="btn btn-info">Seen/Unseen</a></abbr>
    </td>
   
    <td><a href="{{url('/ContactDelete').'/'. $contact->cId}}" class="btn btn-danger">DELETE</a></td>
</tr>

@endforeach

            </tbody>
        </table>

    </div>

</div>
@endsection