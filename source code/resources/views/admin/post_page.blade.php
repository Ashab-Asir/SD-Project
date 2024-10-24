<!DOCTYPE html>
<html>

<head>
    @include('admin.css');

   <style>
    .post_title{
        font-size:30px;
        font-weight:bold;
        text-align:center;
        padding :30px;
        color:white;
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

            <h1 class="post_title">Add post</h1>
            <div>
                <form action="{{url('add_post')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="">Post Title</label>
                        <input type="text" name="title">
                    </div>
                    <div>
                        <label for="">Post Description</label>
                        <textarea name="description" id=""></textarea>
                    </div>
                    <div>
                        <label for="">Post Image</label>
                        <input type="file" name="image">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
        @include('admin.footer');
</body>

</html>