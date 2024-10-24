<div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Blog Post </h1>
            <div class="services_section_2">
               <div class="row">
                  @foreach($post as $post)
                  <div class="col-md-4">
                     <div><img height=400px width=450px src="/postimage/{{$post->image}}" class="services_img"></div>

                     <h4>{{$post->title}}</h4>
                        <p>Post by <b>{{$post->name}}</b></p>
                     <div class="btn_main"><a href="{{url('post_details',$post->id)}}">Read More</a></div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>