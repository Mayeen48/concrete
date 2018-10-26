<section class="contact" id="contact">
	<div class="container">
		<div class="col-lg-6 col-md-6 contact-wthree1">
			<h3 class="head1">Contact Info</h3>
			<div class="contact-w3ls">
				<div class="row">
					<div class="col-xs-4 contact-agile1">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<div class="col-xs-8 contact-agile2">
						<div class="address">
							<h4>Visit Us</h4>
							<p>concretetoursebd.com</p>
						</div>	
					</div>	
				</div>
				<div class="row">
					<div class="col-xs-4 contact-agile1">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
					</div>
					<div class="col-xs-8 contact-agile2">
						<div class="address">
							<h4>Mail Us</h4>
							<p><a href="mailto:concretetours@gmail.com">concretetours@gmail.com</a></p>
						</div>	
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 contact-agile1">
						<i class="fa fa-mobile" aria-hidden="true"></i>
					</div>
					<div class="col-xs-8 contact-agile2">
						<div class="address">
							<h4>Call Us</h4>
							<p>008801750 000 308</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 contact-agile1">
						<i class="fa fa-clock-o" aria-hidden="true"></i>
					</div>
					<div class="col-xs-8 contact-agile2">
						<div class="address">
							<h4>Our Working Hours</h4>
							<p>Saturday - Thursday : 09 AM - 06 PM</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 contact-wthree2">
			<h3 class="head2">Your Comments</h3>
			
				<div class="row">
                                    <div class="alert" id="messageContact" style="display: none"></div>
                                    {{ Form::open(['method' => 'post','id'=>'contact_form']) }}
					<div class="form-group col-lg-6 col-md-6 col-sm-6 slideanim">
						<input type="text" class="form-control first-name" name="firstName" placeholder="First Name"/>
					</div>
					<div class="form-group col-lg-6 col-md-6 col-sm-6 slideanim">
						<input type="text" class="form-control last-name" name="lastName" placeholder="Last Name"/>
					</div>
					<div class="form-group col-lg-6 col-md-6 col-sm-6 slideanim">
						<input type="email" class="form-control mail" name="email" placeholder="Your Email"/>
					</div>
					<div class="form-group col-lg-6 col-md-6 col-sm-6 slideanim">
						<input type="tel" class="form-control pno" name="phone" placeholder="Your Phone Number"/>
					</div>
					<div class="clearfix"></div>
					<div class="form-group col-lg-12 slideanim">
						<textarea class="form-control" rows="6" name="message" placeholder="Your Message"></textarea>
					</div>
					<div class="form-group col-lg-12 slideanim">
						<button type="submit" class="btn btn-lg btn-outline">Send Message</button>
					</div>
                                        {{ Form::close() }}
				</div>
			
		</div>
	</div><script>
$(document).ready(function () {
//    alert(444);
    $('#contact_form').on('submit', function (event) {
        event.preventDefault();
//        alert("{{ route('inquiry') }}");
//return false;
        $.ajax({
                    url: "{{ route('contact') }}",
                    method: "POST",
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data)
                        {

                        $('#messageContact').css('display', 'block');
                        $('#messageContact').html(data.message);
                        $('#messageContact').addClass(data.class_name);
                        if(data.status===1){
                            $("#contact_form")[0].reset();
                        }
                        
                        
                        $('html, body').animate({
                        scrollTop: $("#messageContact").offset().top
                        }, 1000);
                    },error: function () {
                        $('html, body').animate({
                        scrollTop: $("#messageContact").offset().top
                        }, 1000);
                       alert("Error");
                    }
    });
});
});

</script>
</section>