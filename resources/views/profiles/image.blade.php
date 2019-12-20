@include('includes.head')
@include('includes.header')
<div class="container">
 
   
           
             
             
       
         <div id="page-contents">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-7"><ul class="album-photos
                @foreach ($user->posts as $post)
  
                <!-- Photo Album
                ================================================= -->
                ">
                  <li>
                    <div class="img-wrapper" data-toggle="modal" data-target=".photo-1">
                        <a href="/p/{{$post->id}}"><img src="/uploads/{{$post->image}}" class="w-100"></a>
                    </div>
                    <div class="modal fade photo-1" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <a href="/p/{{$post->id}}"><img src="/uploads/{{$post->image}}" class="w-100"></a>
                        </div>
                      </div>
                    </div>
                  </li>
                 
                    @endforeach
                    </ul>
              </div>
            </div>
        </div>
</div>
