<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">

        <title>
            @yield('title')
        </title>

        <!-- <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
        <!--<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        <!-- Bootstrap core CSS -->
        <link href="{{asset('public/backEnd/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="{{asset('public/backEnd/css/starter-template.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('public/backEnd/css/style.css')}}">



    </head>

    <body>
        @include('backEnd.includes.header')
        <div class="container">
            @yield('mainContent') 
        </div>
        @include('backEnd.includes.footer')

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <script src="{{asset('public/backEnd/js/bootstrap.min.js')}}"></script>
        <script  src="{{asset('public/backEnd/js/index.js')}}"></script>
        <script  src="{{asset('public/backEnd/custom/packageCall.js')}}"></script>
        <script src='https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=5g5faf78gvk6yfq9bd3bbfjo858kjx1q8o0nbiwtygo2e4er'></script>
        <script>
$(document).ready(function () {

    function fetch_post_data(post_id)
    {
        $.ajax({
            url: "{{url('/packageDetails/')}}" + '/' + post_id,
            method: "GET",
//   data:{post_id},
            success: function (data)
            {
                $('#post_modal').modal('show');
                var response = JSON.parse(data);
//    console.log(response.pId);
                $('#post_detail').html(response.description);
            }
        });
    }

    $(document).on('click', '.view', function () {
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

            tinymce.init({
                selector: '#myTextarea',
                height: 500,
                theme: 'modern',
                plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image code link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
                toolbar: 'undo redo | link image | code | formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
                image_advtab: true,
                templates: [
                    {title: 'Test template 1', content: 'Test 1'},
                    {title: 'Test template 2', content: 'Test 2'}
                ],
                content_css: [
                    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                    '//www.tinymce.com/css/codepen.min.css'
                ]
            });

        </script>
    </body>

</html>
