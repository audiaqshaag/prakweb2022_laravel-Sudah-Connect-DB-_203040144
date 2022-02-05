@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">

        <div class="col-md-4">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close justify-content-right" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

             
            @endif

            <h1 class="h3 mb-3 font-weight-normal text-center">Please Login</h1>
            <form class="form-signin">

                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>



            </form>
            <small class="d-block text-center mt-3">
                Not registered? <a href="register">Register Now!</a>
            </small>

        </div>
    </div>


@endsection
