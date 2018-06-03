@extends('layouts.master')

@section('content')

    <h2 class="card-title text-center">Register</h2>




    <div class="container">
        <div class="row">
            <div class="col-sm">

                @include('layouts/errors')

            </div>
            <div class="col-sm">
                <form method="POST" action="/register">
                    {{csrf_field()}}

                    <div class="form-group">

                        <label for="name">Name:</label>

                        <input type="text" class="form-control" id="name" name="name" required >

                    </div>

                    <div class="form-group">

                        <label for="email">Email:</label>

                        <input type="email" class="form-control" id="email" name="email" required>

                    </div>

                    <div class="form-group">

                        <label for="password">Password:</label>

                        <input type="password" class="form-control" id="password" name="password" required>

                    </div>
                    <div class="form-group">

                        <label for="password_confirmation">Confirm Password:</label>

                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" >

                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn btn-primary">Register</button>

                    </div>



                </form>
            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>




    </div>


@endsection

