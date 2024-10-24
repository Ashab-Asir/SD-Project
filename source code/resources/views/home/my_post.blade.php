<!DOCTYPE html>
<html lang="en">
   <head>
        <style>
            .post_deg{
                display: flex;
                gap:10px;
                flex-direction:column;
                justify-content:center;
                align-items:center;
                text-align:center;
                color:white;
                background-color:black;
                padding:20px;
            }
            .post_title{
                color:white;
            }
            .img-deg{
                width: 200px;
                height:200px;
            }
        </style>
      @include('home.homecss');
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header');
        @foreach($data as $data)
          <div class="post_deg">
            <img class="img-deg" src="/postimage/{{$data->image}}" alt="">
            <h4 class="post_title">post title :{{$data->title}}</h4>
            <p>post description :{{$data->description}}</p>
            <a href="{{url('my_post_del',$data->id)}}" class="btn btn-danger">Delete</a>
            <a href="{{url('user_edit_post',$data->id)}}" class="btn btn-primary">Update</a>
          </div>
        @endforeach
      </div>
      @include('home.footer');    
   </body>
</html>