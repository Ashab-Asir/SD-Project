<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.homecss');
    <style>
    .post_title {
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        padding: 30px;
        color: black;
    }
    .div_deg{
       text-align:center;
    }
    </style>
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        @include('home.header');
    </div>
    <div class="div_deg">
        <h1 class="post_title">Add post</h1>
        <form action="{{url('user_post')}}" method="POST" enctype="multipart/form-data">
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

    @include('home.footer');
</body>

</html>