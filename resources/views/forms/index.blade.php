@extends('layouts.master')

@section('content')
    <h2 class="card-title text-center">Home</h2>

    <div class="container">
        <a href="{{route('new', ['uniqueID' => $randomNum])}}"><div class="card" style="width: 18rem;">
                <div class="card-body" style="    text-align: center;
    color: #a47cc2;
    font-size: 10rem;">
                    <i class="fa fa-plus"></i>
                    <h6 class="card-subtitle mb-2 text-muted">New Form</h6>
                </div>
            </div></a>

    </div>


    {{--<div class="container">--}}
        {{--<div class="card" style="width: 18rem;">--}}
            {{--<div class="card-body">--}}
                {{--<h5 class="card-title"><i class="fas fa-plus"></i></h5>--}}

                {{--<i class="fa fa-plus"></i>--}}
                {{--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>--}}
                {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                {{--<a href="#" class="card-link">Card link</a>--}}
                {{--<a href="#" class="card-link">Another link</a>--}}
            {{--</div>--}}
        {{--</div>--}}

    </div>




@endsection





