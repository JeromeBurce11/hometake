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
        <button class="mr-2 btn btn-primary my-2 my-sm-0 " type="submit">Sign in</button>
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Sign up</button>
        <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
    </div>
</nav>

<div class="text-center">

    <div class="mt-2 mr-5 ml-5 card" style="">
        <div class="card-body">
            <div class="text-center">

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