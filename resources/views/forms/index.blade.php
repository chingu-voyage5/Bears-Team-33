@extends('layouts.master')

@section('content')
    <h2 class="card-title text-center">You should see your saved forms here or create a new one </h2>
    <h5>https://www.dropbox.com/s/bssn44cu1rmfjtg/Screenshot%202018-06-03%2006.58.05.png?dl=0</h5>

    <h>Forms</h>

    <div id="example" data='{{ $data }}' currentUser='{{auth()->user()}}'></div>

@endsection





