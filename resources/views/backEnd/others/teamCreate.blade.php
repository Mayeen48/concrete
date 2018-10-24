@extends('backEnd.layout.master')
@section('title')
Packages
@endsection


@section('mainContent')
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<div class="container">
    <div class="alert" id="message" style="display: none"></div>
    <div class="starter-template min_height_all">

        {{ Form::open(['method' => 'post','id'=>'upload_form','enctype'=>'multipart/form-data']) }}

        <h1>Team Member Create</h1>

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Post Name</label>
            <div class="col-sm-10">
                <input type="text" placeholder="Enter Your Post name" id="pName" class="form-control" name="pName">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Member Name</label>
            <div class="col-sm-10">
                <input type="text" placeholder="Enter Your Package name" class="form-control" name="mName">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Member Phone</label>
            <div class="col-sm-10">
                <input type="number" placeholder="Enter Your Package name" class="form-control" name="mPhone">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Member Email</label>
            <div class="col-sm-10">
                <input type="text" placeholder="Enter Your Package name" class="form-control" name="mEmail">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Facebook Link</label>
            <div class="col-sm-10">
                <input type="text" placeholder="Enter Facebook Link" class="form-control" name="fLink">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Twitter Link</label>
            <div class="col-sm-10">
                <input type="text" placeholder="Enter Twitter Link" class="form-control" name="tLink">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">google Plus Link</label>
            <div class="col-sm-10 di">
                <input type="text" placeholder="Enter Google Plus Link" class="form-control" name="gLink">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Upload Image</label>
            <div class="col-sm-10">
                <input type="file" name="image" id="select_file" class="form-control">
                <p>Image Size must be 300X400</p>
                <span class="text-muted">jpg, png, gif</span>
            </div>
        </div>

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <input type="submit" name="upload" id="upload" class="btn btn-primary" value="Upload">
            </div>
        </div>


        {{ Form::close() }}
        </form>

    </div>

    <script>
        $(document).ready(function () {

            $('#upload_form').on('submit', function (event) {
                event.preventDefault();
                $.ajax({
                    url: "{{ route('teamStore') }}",
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
                            $("#upload_form")[0].reset();
                        }
                        
                        $('html, body').animate({
                        scrollTop: $("#message").offset().top
                        }, 1000);
                    },error: function () {
                        $('html, body').animate({
                        scrollTop: $("#message").offset().top
                        }, 1000);
                    }
                });
            });

        });
    </script>





</div>
@endsection