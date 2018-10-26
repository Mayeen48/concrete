TEST
        <div class="row">
 {{ Form::open(['url' => '/galleryStore','method' => 'post','id'=>'','enctype'=>'multipart/form-data']) }}
        <div class="form-group row">
            
            <label for="colFormLabel" class="col-sm-2 col-form-label">Image Name</label>
             <div class="col-sm-10">
                <input type="text" class="form-control" name="imageName" placeholder="Please Enter Image Name" maxlength="100" />
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="aboutImage" placeholder="Please Enter About Image" maxlength="200" ></textarea>
                
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="image" />
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <input type="submit" class="form-control btn btn-primary" id="" value="Submit">
            </div>
        </div>
        {{ Form::close() }}
      </div>