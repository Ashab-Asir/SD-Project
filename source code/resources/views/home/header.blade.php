<style>
    .logo-text{
        color:white;
        font-weight:bold;
    }
    li{
         font-size:40px;
    }
</style>
<div class="header_main">
    <div class="mobile_menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo_mobile"><a href="index.html"><h1 class="logo-text">Food Recipe World</h1></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>         
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('register')}}">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="logo"><a href="/"><h1 class="logo-text">Food Recipe World</h1></a></div>
        <div class="menu_main">
            <ul>
                <li class="active"><a href="/">Home</a></li>
                @if (Route::has('login'))
                @auth
                <li>
                    <x-app-layout>
                    </x-app-layout>
                </li>
                <li><a href="{{url('my_post')}}">My Post</a></li>
                <li><a href="{{url('create_post')}}">Create Post</a></li>
                @else
                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="{{route('register')}}">Register</a></li>
                @endauth
                @endif
            </ul>
        </div>
    </div>
</div>