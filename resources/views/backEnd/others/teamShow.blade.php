
@extends('backEnd.layout.master')
@section('title')
Packages
@endsection


@section('mainContent')


<div class="container">

    <div class="starter-template min_height_all">

        <h3 style="color: green">{{Session::get('message')}}</h3> 
        <section class="team" id="team">
            <div class="container">
                <h3 class="text-center">Our Team</h3>
                <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="row">

@foreach($teams as $team)
                    <div class="col-lg-3 col-md-3 col-sm-6 team-w3ls">
                        <div class="view view-third">
                            <img src="{{asset('public/images/members/')}}/{{$team->image}}" alt="{{$team->mName}}" title="{{$team->pName}}" class="img-responsive">
                            <div class="mask">
                                <h4>{{$team->mName}}</h4>
                                <ul class="social-icons2">
                                    <li><a href="#"><i class="fa fa-facebook"></i>{{$team->mPhone}}</a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i>{{$team->mEmail}}</a></li>
                                    <li><a href="#"><i class="fa fa-whatsapp"></i>{{$team->fLink}}</a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i>{{$team->tLink}}</a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i>{{$team->gLink}}</a></li>
                                </ul>	
                                <p class="info">{{$team->pName}}</p>
                                <a href="{{url('/teamDelete/'.$team->tId)}}" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
@endforeach
                </div>
            </div>
        </section>

    </div>

</div>
@endsection
