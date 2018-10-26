<section class="work" id="work">
	<h3 class="text-center">Our Gallery</h3>
	<p class="text-center">Concrete Tours and Travels Ltd.</p>
	<div class="gallery-grids">
		<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			
			<div id="myTabContent" class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
					<div class="tab_img">
                                            @foreach($galleries as $gallery)
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="{{asset('public/images/galleries/').'/'.$gallery->image}}" class="lightninBox" data-lb-group="1">
								<img src="{{asset('public/images/galleries/').'/'.$gallery->image}}" class="img-responsive" alt="" />
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5>{{$gallery->imageName}}</h5>
									<p>{{$gallery->aboutImage}}</p>
								</div>
							</a>
						</div>
				              @endforeach
						<div class="clearfix"> </div>
					</div>
					
				</div>
				
			</div>
		</div>
	</div>	
</section>