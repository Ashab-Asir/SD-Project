<!DOCTYPE html>
<html>
  <head> 
    <base href='/public'>
    <style>
        .form-deg{
            display:flex;
            flex-direction:column;
            align-items:center;
            gap:20px;
            justify-content:center;
        }
        .post_title{
        font-size:30px;
        font-weight:bold;
        text-align:center;
        padding :30px;
        color:white;
    }
    </style>
   @include('admin.css');
  </head>
  <body>
    @include('admin.header');
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar');
      <!-- Sidebar Navigation end-->
      <div class="page-content">
      <h1 class="post_title">Edit post</h1>
        <form class='form-deg'  action="{{url('user_update_post',$post->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
                    <div>
                        <label for="">Post Title</label>
                        <input type="text" name="title" value="{{$post->title}}">
                    </div>
                    <div>
                        <label for="">Post Description</label>
                        <textarea name="description" id="">{{$post->description}}</textarea>
                    </div>
                    <div>
                        <label for="">Update Image</label>
                        <input type="file" name="image">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary">
                    </div>
        </form>
      </div>
        @include('admin.footer');
  </body>
</html>