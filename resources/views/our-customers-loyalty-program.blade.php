@extends('layouts.layout')

@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse  navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">Hidden brand</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">FAQ's <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Support Tickets/Questions? <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Our Customers Loyalty Program <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Video Music Collection <span class="sr-only">(current)</span></a>
            </li>
        </ul>
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
            <h5 class="card-title" style="color:#3751FE">HOW LONG WILL THE APPOINTMENT TAKE?</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">A shoot can take anywhere from 1 to 5 hours depending on the package ordered. We
                normally run a back to back schedule so please arrive prior to your appointment time to stage the home.
                Flythrough 13 and 18 packages are allocated 1 hr., Flythrough 25 packages 1 hr. 15 mins., Showcase
                packages 1 hr. 30 mins., Premier packages 3 hours and Ultimate 5 hours. All times are calculated from
                photographer arrival to departure. Adding ‘Plus, Premium and Supreme' options will add 5, 10 & 15
                minutes to the appointment time respectively.
            </p>
            <!-- <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a> -->
        </div>
    </div>
    <div class="m-5 card" style="">
  <div class="card-body">
    <h5 class="card-title" style="color:#3751FE">HOW LONG WILL THE APPOINTMENT TAKE?</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">A shoot can take anywhere from 1 to 5 hours depending on the package ordered. We normally run a back to back schedule so please arrive prior to your appointment time to stage the home.  Flythrough 13 and 18 packages are allocated 1 hr.,  Flythrough 25 packages 1 hr. 15 mins.,  Showcase packages 1 hr. 30 mins., Premier packages 3 hours and Ultimate 5 hours.  All times are calculated from photographer arrival to departure.  Adding ‘Plus, Premium and Supreme' options will add 5, 10 & 15 minutes to the appointment time respectively. 
</p>
    <!-- <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a> -->
  </div>
</div>

@endsection