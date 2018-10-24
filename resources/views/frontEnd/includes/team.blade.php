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
                            <li><a href="callto:{{$team->mPhone}}"><i class="fa fa-whatsapp"></i></a></li>
                            <li><a href="mailto:{{$team->mEmail}}"><i class="fa fa-envelope"></i></a></li>
                            <li><a href="{{$team->fLink}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            @if($team->tLink=='')
                                <li><a href="{{$team->tLink}}" style="pointer-events: none;"><i class="fa fa-twitter"></i></a></li>
                            @else
                              <li><a href="{{$team->tLink}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            @endif
                            @if($team->gLink=='')
                                <li><a href="{{$team->gLink}}" style="pointer-events: none;"><i class="fa fa-google-plus"></i></a></li>
                            @else
                              <li><a href="{{$team->gLink}}" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            @endif
                            
                        </ul>	
                        <p class="info">{{$team->pName}}</p>
                    </div>
                </div>
            </div>
@endforeach
        </div>
    </div>
</section>