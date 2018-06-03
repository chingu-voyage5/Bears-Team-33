@extends('layouts.master')

@section('content')

    <h2 class="card-title text-center">Login</h2>




    <div class="container">
        <div class="row">
            <div class="col-sm">

                @include('layouts/errors')

            </div>
            <div class="col-sm">
                <form method="POST" action="/login">
                    {{csrf_field()}}

                   <div class="form-group">

                       <label for="email">Email:</label>

                       <input type="text" class="form-control" id="email" name="email" >

                   </div>

                    <div class="form-group">

                        <label for="password">Password:</label>

                        <input type="password" class="form-control" id="password" name="password" >

                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn btn-primary">Login</button>

                    </div>



                </form>
            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>




    </div>


@endsection

