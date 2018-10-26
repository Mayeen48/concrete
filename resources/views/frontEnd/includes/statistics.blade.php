<section class="stats" id="stats">
	<div class="container">	
		<div class="row">
			<div class="col-md-3 col-sm-3 stats-grid stats-grid-1">
				<div class="numscroller" data-slno='1' data-min='0' data-max='{{$countSingle}}' data-delay='1' data-increment="1">0</div>
				<i class="fa fa-money" aria-hidden="true"></i>
				<h4>Todays Visitors</h4>
			</div>
			<div class="col-md-3 col-sm-3 stats-grid stats-grid-2">
				<div class="numscroller" data-slno='1' data-min='0' data-max='{{$countAll}}' data-delay='3' data-increment="1">0</div>
				<i class="fa fa-trophy" aria-hidden="true"></i>
				<h4>Total Visitors</h4>
			</div>
			<div class="col-md-3 col-sm-3 stats-grid stats-grid-3">
				<div class="numscroller" data-slno='1' data-min='0' data-max='{{$hcrs[0]->happyClient}}' data-delay='3' data-increment="1">0</div>
				<i class="fa fa-users" aria-hidden="true"></i>
				<h4>Happy Clients</h4>
			</div>
			<div class="col-md-3 col-sm-3 stats-grid stats-grid-4">
				<div class="numscroller" data-slno='1' data-min='0' data-max='{{$hcrs[0]->rating}}' data-delay='3' data-increment="1">0</div>
				<i class="fa fa-star" aria-hidden="true"></i>
				<h4>Ratings</h4>
			</div>
		</div>
	</div>
</section>