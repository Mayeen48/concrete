
<section class="service" id="service">
    <div class="container">
        @if($packages=='[]')
        <h2 class="text-center">No Packages are Available</h2>
        @else
        <h2 class="text-center">{{$packages[0]->packageType}}</h2>
        <p class="text-center">{{count($packages)}} Packages are Available</p>
        <div class="row">

            @foreach($packages as $pack)
            <div class="col-lg-3 col-md-3 serv-w3ls">
                <h4>{{$pack->packageName}}</h4>
                <p class="serv-p">
                    <button name='view' class="btn btn-info view" id="{{$pack->pId }}">
                        <img src="{{asset('public/images/').'/'.$pack->image}}" width="200" height="150">
                    </button>
                </p>
            </div>
            @endforeach

        </div>
        @endif


        <div class="modal fade col-md-12 col-sm-12 col-xs-12" id="post_modal">
            <div class=" modal-dialog" style="background: white;">
                <!--<div class="modal-content">-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Package Details</h4>
                </div>
                <div class="modal-body" id="post_detail" style="width: 500px;">

                </div>
                <div class="" >
                    <div class="inquery_area" >
                        <center>
                            <div class="alert" id="message" style="display: none"></div>
                            {{ Form::open(['method' => 'post','id'=>'inquiry_form']) }}
                        <h4> Inquiry Form</h4>
                        <table width="100%" border="1"style="background: orange; color: black !important; width: 80%;">
                            <tr>
                                <td></td>
                                <td><input type="hidden" id="pId" class="form-control" name="pId"></td>
                            </tr>
                            <tr>
                                <td>Package Name:</td>
                                <td><input type="text" id="pName" class="form-control" disabled></td>
                            </tr>
                            <tr>
                                <td>Name: *</td>
                                <td><input type="text" id="iName" name="iName" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>E-Mail: *</td>
                                <td><input type="email" id="iEmail" name="iEmail" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Contact No.: *</td>
                                <td><input type="text" id="iContact" name="iContact" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td>@include('frontEnd.includes.countries')</td>
                            </tr>
                            <tr>
                                <td>Message</td>
                                <td><textarea class="form-control" id="iMessage" name="iMessage"> </textarea></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit" name="upload" id="upload" class="btn btn-primary" value="SUBMIT">
                         
                                </td>
                            </tr>
                        </table>
                         {{ Form::close() }}
                        
                        </center>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                <!--</div>-->
            </div>
        </div>


    </div>
</section>
<hr/>

<script>
$(document).ready(function () {
//    alert(444);
    $('#inquiry_form').on('submit', function (event) {
        event.preventDefault();
//        alert("{{ route('inquiry') }}");
//return false;
        $.ajax({
                    url: "{{ route('inquiry') }}",
                    method: "POST",
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data)
                        {

                        $('#message').css('display', 'block');
                        $('#message').html(data.message);
                        $('#message').addClass(data.class_name);
                        if(data.status===1){
                            $("#inquiry_form")[0].reset();
                        }
                        
                        
//                        $('html, body').animate({
//                        scrollTop: $("#message").offset().top
//                        }, 1000);
                    },error: function () {
//                        $('html, body').animate({
//                        scrollTop: $("#message").offset().top
//                        }, 1000);
                       alert("Error");
                    }
    });
});
});

</script>