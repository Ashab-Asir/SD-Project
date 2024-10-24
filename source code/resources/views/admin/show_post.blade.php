<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css');
   <style type='text/css'>
    .title_deg{
        font-size:30px;
        font-weight:bold;
        color:white;
        padding:30px;
        text-align:center
    }
    .table_deg{
        border:1px solid white;
        width: 90%;
        text-align:center;
        margin-left:30px;
    }
    .th_deg{
        background-color:skyblue
    }
    .img_deg{
        height:100px;
        width: 150px;
        padding:20px;
    }
   </style>
  </head>
  <body>
    @include('admin.header');
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar');
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <h1 class="title_deg">All post</h1>
        <table class="table_deg">
            <tr class="th_deg">
                <th>Post Title</th>
                <th>Description</th>
                <th>Post by</th>
                <th>Post Status</th>
                <th>User type </th>
                <th>Image</th>
                <th>Delete</th>
                <th>Edit</th>
                <th>Accept</th>
                <th>Reject</th>
            </tr>
            @foreach($post as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>{{$post->name}}</td>
                <td>{{$post->post_staus}}</td>
                <td>{{$post->usertype}}</td>
                <td><img class="img_deg" src="postimage/{{$post->image}}" alt=""></td>
                <td><a href="{{url('delete_post',$post->id)}}" class="btn btn-danger">Delete</a></td>
                <td><a href="{{url('edit_post',$post->id)}}" class="btn btn-success">Edit</a></td>
                <td><a href="{{url('accept_post',$post->id)}}" class="btn btn-primary">Accept</a></td>
                <td><a href="{{url('reject_post',$post->id)}}" class="btn btn-outline-secondary">Reject</a></td>
            </tr>
            @endforeach
        </table>
    </div>
        @include('admin.footer');
  </body>
</html>