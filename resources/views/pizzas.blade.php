@extends('layouts.layout')

@section('content')
<div>
    <div class="content">
        <div class="title m-b-md">
            <h1>Pizza List</h1></div>
    </div>
    <!-- @for($i = 0; $i < count($pizzas); $i++)
        <p> {{ $pizzas[$i]['type']}}</p>
    @endfor -->
    @foreach($pizzas as $pizza)
        <div>
            {{ $loop->index}} {{ $pizza['type'] }} - {{ $pizza['base'] }}
            @if($loop -> first)
            <span>-first in the loop.</span>
            @endif
            @if($loop -> last)
            <span>-last in the loop</span>
            @endif
        </div>
    @endforeach
    </div>
@endsection