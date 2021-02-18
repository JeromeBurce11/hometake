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
                <a class="nav-link" href="{{url('/stq')}}">Support Tickets/Questions? <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/oclp')}}">Our Customers Loyalty Program <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/vmc')}}">Video Music Collection <span class="sr-only">(current)</span></a>
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
<h2 class="ml-5 mt-5 card-title" style="color:#3751FE">Our Customers Loyalty Program</h2>
<div class="align-items-center" style="text-center">
    <div class="m-5 card" style="">
        <div class="card-body">
            <!-- <h5 class="card-title" style="color:#3751FE">HOW LONG WILL THE APPOINTMENT TAKE?</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
            <p class="card-text">Make us your Exclusive Tour Provider by joining our Customer Loyalty Program and we'll
                give you the keys to unlock our full library of "Town and Amenity Videos" to place on your Website* for
                FREE! Yes, we said for FREE!
            </p>

            <p class="card-text"> Keep visitors on your website longer by engaging them in Video. Out of State and even
                Local visitors
                (buyers) want to know about any amenities that a Community or Condominium has to offer. This information
                is vital to listings that are located in communities where there are amenities so why would you want to
                leave it off of your website. Here are 11 Reasons why video is better than any other medium for showing
                your web visitors around town and inside communities.
            </p>
            <p class="card-text"> Want to see what they could look like on your website? Take a look here to see how one
                of our clients
                has implemented them on their web site.
            </p>
            <p class="card-text"> To join and see our complete list of Amenity & Town tour Videos (over 200) simply
                click here to email us
                with the subject line saying “I’m Interested in your Loyalty Program”.
            </p>
            <p class="card-text"> * Loyalty Program does not apply to Real Estate Brokerages.
            </p>
        </div>
    </div>
</div>
    @endsection