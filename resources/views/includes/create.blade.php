<div class="create-post">
        <div class="row">
            <div class="col-md-7 col-sm-7">
            <form action="/p" enctype="multipart/form-data" method="POST">
              @csrf
          <div class="form-group">
            <img src="{{Auth::user()->profile->profileImage()}}" alt="" class="profile-photo-md" />
            <textarea name="caption" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish">
             
            </textarea> 
          </div><img src="" id="profile-img-tag" width="200px" />
        </div>
            <div class="col-md-5 col-sm-5">
          <div class="tools">
            <ul class="publishing-tools list-inline">
              <li> <label for="exampleTextarea"><i class="ion-compose" style="font-size:22px"></i> </label></li>
              <li>
                
                    <div class="image-upload"> 
                      
                       
                        @error('image')image
                       
                        <strong>{{ $message }}</strong>
               
                @enderror
                    </div></li>
              </ul>
            <button class="btn btn-primary pull-right">Publish</button>
          </div>
          <input  type="file" name="image" id="image"/>
        </div>
      </form>
        </div>
    </div>

   
   

   
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript">

    function readURL(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();

            

            reader.onload = function (e) {

                $('#profile-img-tag').attr('src', e.target.result);

            }

            reader.readAsDataURL(input.files[0]);

        }

    }

    $("#image").change(function(){

        readURL(this);

    });

</script>