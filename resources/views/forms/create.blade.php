@extends('layouts.master')

@section('content')
    <h2 class="card-title text-center">You should see your saved forms here or create a new one </h2>
    <h5>https://www.dropbox.com/s/bssn44cu1rmfjtg/Screenshot%202018-06-03%2006.58.05.png?dl=0</h5>

    <div>
        <h>Create Form</h>

        <div class="container">



        <form action="/saveForm" method="POST">
            {{csrf_field()}}
            <div class="form-group">
            
                <label for="form_id">form_id:</label>
            
                <input type="text" class="form-control" id="form_id" name="form_id" >
            
            </div>

            <div class="form-group">
            
                <label for="user_id">user_id:</label>
            
                <input type="text" class="form-control" id="user_id" name="user_id" >
            
            </div>
            <div class="form-group">
            
                <label for="title">title:</label>
            
                <input type="text" class="form-control" id="title" name="title" >
            
            </div>
            <div class="form-group">
            
                <label for="questions">questions:</label>
            
                <input type="text" class="form-control" id="questions" name="questions" >
            
            </div>
            <div class="form-group">
            

            
                <button type="submit" class="btn btn-primary">Create</button>
            
            </div>
        </form>
        </div>
        <div id="example" data='{{ $data }}' currentUser='{{auth()->user()}}'></div>







    </div>

@endsection





