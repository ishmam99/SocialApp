{{-- @foreach ($posts as $post)
            
    <div class="article">
       
        <div class="row pt-2">    
            <div class="col-6 offset-3">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-4">
                         <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width:35px">
               
                    </div>
                    <div>
                         <a href="/profile/{{$post->user->id}}" style="font-weight-bolder">{{$post->user->username}}</a> |
                        
                         
                    </div>
               </div>
               <hr>
               <p>{{$post->caption}}</p>
                
            </div>

           
           
            
            </div>
        </div>
        <div class="row pb-4">
                <div class="col-6 offset-3">
                        <a href="/p/{{$post->id}}">  <img src="/storage/{{$post->image}}" class="w-100"></a>
                   
                </div>
        </div>
            </div>
        @endforeach --}}


        <div class="post-content">
              @foreach ($posts as $post)
           
              <a href="/p/{{$post->id}}">
                <img src="/uploads/{{$post->image}}" alt="post-image" class="img-responsive post-image" />
              </a> <div class="post-container">
                <img src="{{$post->user->profile->profileImage()}}" alt="user" class="profile-photo-md pull-left" />
                <div class="post-detail">
                  <div class="user-info">
                    <h5><a href="/profile/{{$post->user->id}}" class="profile-link">{{$post->user->username}}</a> <span class="following">following</span></h5>
                  <p class="text-muted">Published a photo {{$post->created_at}}</p>
                  </div>
                  
                  <div class="line-divider"></div>
                  <div class="post-text">
                    <p>{{$post->caption}} <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                  </div>
                  <div class="line-divider"></div>
                  
                  
                  
                </div>
              </div>
               @endforeach
            </div>
          <script src="{{asset('js/like.js')}}"></script>
          <script>
          var token = '{{Session::token()}}';
          var urlLike = '{{route('like')}}';</script>