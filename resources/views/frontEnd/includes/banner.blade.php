<section class="banner">
    <div class="slider">
        <ul class="slider-main">
            @foreach($slides as $slide)
            <li class="slider-panel"> 
                <img alt="{{$slide->title}}" title="{{$slide->title}}" src="{{asset('public/images/slides').'/'.$slide->image}}" class="img-responsive">
                <div class="banner-info">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>{{$slide->title}}</h3>
                            <button name='view' class="btn btn-info slide_details" id="{{$slide->sId }}">
                                <!--<a href="#" class="slide_details" data-toggle="modal" data-target="#large Modal" id="{{$slide->sId}}"></a>-->
                                Read More
                            </button>
                            
                        </div>
                    </div>		
                </div>
            </li>
            @endforeach
        </ul>
        <div class="slider-extra">
            <ul class="slider-nav">
                <li class="slider-item"><p class="sl">1</p></li>
                <li class="slider-item"><p class="sl">2</p></li>
                <li class="slider-item"><p class="sl">3</p></li>
                <li class="slider-item"><p class="sl">4</p></li>
                <li class="slider-item"><p class="sl">5</p></li>
            </ul>
            <div class="slider-page"> <a class="slider-pre" href="javascript:;;">&lt;</a> <a class="slider-next" href="javascript:;;">&gt;</a> </div>
        </div>
        
        <!--Modal Start-->
        
<!--        <div class="modal fade col-md-12 col-sm-12 col-xs-12" id="post_modal">
            <div class=" modal-dialog" style="background: white;">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Package Details</h4>
                </div>
                <div class="modal-body" id="post_detail" style="width: 500px;">

                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>-->
        
        <!--Modal End-->
        
        <div class="modal fade" id="post_modal" >
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" style="color: black;" id="title"></h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6" id="image">
                                <!--<img src="{{asset('public/frontEnd/')}}/images/banner1.jpg" class="img-responsive" alt="w3layouts" title="w3layouts">-->
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <p class="banner-p1" id="description"></p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-lg btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>