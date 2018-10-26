<section class="test">
	<div class="container">
		<h3 class="text-center">Our Testimonials</h3>
		<p class="text-center">Concrete Tours and Travels Ltd.</p>
		<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="hover">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="test-details">	
								<div class="test-w3ls">
									<p class="test-p1">{{$testimonials[0]->comments}}</p>
								</div>
								<div class="test-agile">
									<img src="{{asset('public/images/testimonials/')}}/{{$testimonials[0]->image}}" class="img-circle img-responsive">
									<h4>{{$testimonials[0]->name}},<span>{{$testimonials[0]->designation}}</span></h4>
									<div class="clearfix"></div>	
								</div>
							</div>	
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="test-details">
								<div class="test-w3ls">
									<p class="test-p1">{{$testimonials[1]->comments}}</p>
								</div>
								<div class="test-agile">
									<img src="{{asset('public/images/testimonials/')}}/{{$testimonials[1]->image}}"  class="img-circle img-responsive">
									<h4>{{$testimonials[1]->name}},<span>{{$testimonials[1]->designation}}</span></h4>
									<div class="clearfix"></div>	
								</div>
							</div>
						</div>
					</div>
				</div>	
				<div class="item">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="test-details">
								<div class="test-w3ls">
									<p class="test-p1">{{$testimonials[2]->comments}}</p>
								</div>
								<div class="test-agile">
									<img src="{{asset('public/images/testimonials/')}}/{{$testimonials[2]->image}}" class="img-circle img-responsive">
									<h4>{{$testimonials[2]->name}},<span>{{$testimonials[2]->designation}}</span></h4>
									<div class="clearfix"></div>	
								</div>
							</div>
						</div>	
						<div class="col-lg-6 col-md-6">
							<div class="test-details">	
								<div class="test-w3ls">
									<p class="test-p1">{{$testimonials[3]->comments}}</p>
								</div>
								<div class="test-agile">
									<img src="{{asset('public/images/testimonials/')}}/{{$testimonials[3]->image}}" class="img-circle img-responsive">
									<h4>{{$testimonials[3]->name}},<span>{{$testimonials[3]->designation}}</span></h4>
									<div class="clearfix"></div>	
								</div>
							</div>
						</div>
					</div> 
				</div>	
				<div class="item">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="test-details">	
								<div class="test-w3ls">
									<p class="test-p1">{{$testimonials[4]->comments}}</p>
								</div>
								<div class="test-agile">
									<img src="{{asset('public/images/testimonials/')}}/{{$testimonials[4]->image}}" class="img-circle img-responsive">
									<h4>{{$testimonials[4]->name}},<span>{{$testimonials[4]->designation}}</span></h4>
									<div class="clearfix"></div>	
								</div>
							</div>
						</div>	
						<div class="col-lg-6 col-md-6">
							<div class="test-details">	
								<div class="test-w3ls">
									<p class="test-p1">{{$testimonials[5]->comments}}</p>
								</div>
								<div class="test-agile">
									<img src="{{asset('public/images/testimonials/')}}/{{$testimonials[5]->image}}" class="img-circle img-responsive">
									<h4>{{$testimonials[5]->name}},<span>{{$testimonials[5]->designation}}</span></h4>
									<div class="clearfix"></div>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>