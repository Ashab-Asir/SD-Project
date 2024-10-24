<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('home.homecss');

<body>
    <!-- header section start -->
    <div class="header_section">
        @include('home.header');
        <!-- banner section start -->

    </div>
    <div style="text-align:center" class="col-md-10">
        <div><img style="padding:20px; margin:auto" src="/postimage/{{$post->image}}" class="services_img"></div>

        <h4>{{$post->title}}</h4>
        <h4>{{$post->description}}</h4>
        <p>Post by <b>{{$post->name}}</b></p>
    </div>
    @include('home.footer');
</body>

</html>