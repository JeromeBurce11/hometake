@extends('layouts.layout')

@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse  navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#"><img src="https://www.hometakesvideos.com/orders/img/logo.png"
                style="width:180px;height:32px;" alt=""></a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/websitehome')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <!-- <a href = "{{url('/admin/showCourses')}}" class="btn btn-primary ">View List</a><br> -->
                <a class="nav-link" href="{{url('/faq')}}">FAQ's <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/stq')}}">Support Tickets/Questions? <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/oclp')}}">Our Customers Loyalty Program <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/vmc')}}">Video Music Collection <span
                        class="sr-only">(current)</span></a>
            </li>
        </ul>
        
        <a href="/sign-up" class="btn btn-xs btn-primary pull-right">Edit</a>

        <button class="mr-2 btn btn-primary my-2 my-sm-0 " type="submit">Sign in</button>
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" href="{{url('/sign-up')}}">Sign up</button>
    </div>
</nav>

<div class="text-center">
    <button class="text center btn btn-primary btn-lg my-2 my-sm-0 mt-2 " type="submit">CLICK HERE TO EXPERIENCE A
        <b>MATTERPORT 3D TOUR NOW</b></button>

    <div class="mt-2 mr-5 ml-5 card" style="">
        <div class="card-body">
            <div class="text-center">
            <div class="m-3" style="display:inline-block;">
                    <iframe src="https://player.vimeo.com/video/195969264" width="300" height="300" frameborder="0"
                        webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                </div>
                <div class="m-2" style="display:inline-block;">
                    <iframe src="https://player.vimeo.com/video/196067628" width="300" height="300" frameborder="0"
                        webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                </div>
                <div class="m-2" style="display:inline-block;">
                    <iframe src="https://player.vimeo.com/video/196067628" width="300" height="300" frameborder="0"
                        webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                </div>
                <div class="m-2" style="display:inline-block;">
                    <iframe src="https://player.vimeo.com/video/196067628" width="300" height="300" frameborder="0"
                        webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                </div>
                <iframe src="https://www.youtube.com/embed/_ACuzw7BaW8?rel=0&modestbranding=1&showinfo=1&enablejsapi=1&autoplay=0&html5=1" width="1280" height="720"
                webkitallowfullscreen=""     mozallowfullscreen="" allowfullscreen="" controls></iframe>

            </div>
        </div>
    </div>
    <div class="mt-2 mr-5 ml-5 card" style="">
        <div class="card-body">

        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    var audio = document.getElementById('audio');
    audio.src = 'music/' + document.getElementById('jazzMusic').getAttribute('data-value');
    audio.load();
    // var jazzMusic = $("input[name='jazzMusic']").val();
    // alert("Burce is here: " + $("#jazzMusic").val());
    // console.log("Burce is here: " + $("#jazzMusic").val())
});
</script>

@endsection