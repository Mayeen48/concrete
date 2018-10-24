



<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>
        @yield('title')
    </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Safari Travel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!--link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"-->
<!-- /font files -->
<style>
    .aT{
  background-image: url("{{asset('public/frontEnd/images/air.jpg')}}"); 
  background-repeat: no-repeat;
  background-size: 100%;
    
}
</style>
<!-- css files -->
<link href="{{asset('public/frontEnd/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('public/frontEnd/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('public/frontEnd/css/jQuery.lightninBox.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('public/frontEnd/css/team.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('public/frontEnd/css/header.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('public/frontEnd/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- /css files -->
<!-- js files -->
<script src="{{asset('public/frontEnd/js/modernizr.js')}}"></script>

<!-- js files -->
</head>
<body id="index.html" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- top bar -->
@include('frontEnd.includes.header.topbar')
<!-- /top bar -->
<!-- navigation -->
@include('frontEnd.includes.header.navigation')
<!-- /navigation -->
<!-- banner section -->
@include('frontEnd.includes.banner')
<!-- /banner section -->
<!-- services section -->
@include('frontEnd.includes.service')
<!-- /services section -->
<!-- Air Ticketing section -->
@include('frontEnd.includes.airTicket')
<!-- /Air Ticketing section -->
<!-- event section-->
@include('frontEnd.includes.events')
<!-- /event section -->
<!-- team section -->
@include('frontEnd.includes.team')
<!-- /team section -->
<!-- work section -->
@include('frontEnd.includes.gallery')
<!-- /work section -->
<!-- testimonial section -->
@include('frontEnd.includes.testimunial')
<!-- /testimonial section -->
<!-- statistics section -->
@include('frontEnd.includes.statistics')
<!-- /statistics section -->
<!-- contact section -->
@include('frontEnd.includes.contact')
<!-- /contact section -->
<!-- map section -->
@include('frontEnd.includes.map')
<!-- /map section -->
<!-- footer section -->
@include('frontEnd.includes.footer')
<!-- /footer section -->
<a href="#0" class="cd-top">Top</a>
<!-- js files -->
<script src="{{asset('public/frontEnd/')}}/js/jquery.min.js"></script>
<script src="{{asset('public/frontEnd/')}}/js/bootstrap.min.js"></script>
<script src="{{asset('public/frontEnd/')}}/js/SmoothScroll.min.js"></script>
<script src="{{asset('public/frontEnd/')}}/js/main.js"></script> 
<script type="text/javascript" src="{{asset('public/frontEnd/js/customJS/nav.js')}}"></script>
<!-- js for statistics -->
<script type="text/javascript" src="{{asset('public/frontEnd/')}}/js/numscroller-1.0.js"></script>
<!-- /js for statistics -->
<!-- js for portfolio -->
<script src="{{asset('public/frontEnd/')}}/js/jQuery.lightninBox.js"></script>
<script type="text/javascript">
	$(".lightninBox").lightninBox();
</script>
<!-- /js for portfolio -->
<!-- js for search button -->
<script src="{{asset('public/frontEnd/')}}/js/index.js"></script>
<!-- /js for search button -->
<!-- js for banner -->
<script src="{{asset('public/frontEnd/')}}/js/zslider-1.0.1.js"></script>
<script type="text/javascript" src="{{asset('public/frontEnd/js/customJS/slide.js')}}"></script>
<!-- /js for banner -->
<!-- /js files -->

<script>
function showPack(id) {
        $('.pack').load('getPackage/' + id);
        
         $('html, body').animate({
    scrollTop: $(".pack").offset().top
  }, 1000);
    }
function showAirTicket() {
         $('html, body').animate({
    scrollTop: $(".aT").offset().top
  }, 1000);
    }
</script>


<script>
$(document).ready(function(){
 
 function fetch_post_data(post_id)
 {
  $.ajax({
   url:"{{url('/packageDetails/')}}"+'/'+post_id,
   method:"GET",
//   data:{post_id},
   success:function(data)
   {
    $('#post_modal').modal('show');
    var response = JSON.parse(data);
//    console.log(response.pId);
    $('#post_detail').html(response.description);
    $('#pName').val(response.packageName);
    $('#pId').val(response.pId);
   }
  });
 }

 $(document).on('click', '.view', function(){
  var post_id = $(this).attr("id");
  fetch_post_data(post_id);
 });

// $(document).on('click', '.previous', function(){
//  var post_id = $(this).attr("id");
//  fetch_post_data(post_id);
// });
//
// $(document).on('click', '.next', function(){
//  var post_id = $(this).attr("id");
//  fetch_post_data(post_id);
// });
 
});
</script>

<script>
$(document).ready(function () {
    $('#booking-form').on('submit', function (event) {
        event.preventDefault();
        $.ajax({
                    url: "{{ route('airTicket') }}",
                    method: "POST",
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data)
                        {
                        $('#ticketMessage').css('display', 'block');
                        $('#ticketMessage').html(data.message);
                        $('#ticketMessage').addClass(data.class_name);
                        if(data.status===1){
                            $("#booking-form")[0].reset();
                        }
                        
                    },error: function () {
                       alert("Error");
                    }
    });
});
});

</script>
</body>
</html>