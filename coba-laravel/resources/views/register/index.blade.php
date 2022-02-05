@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">

        <div class="col-md-5">
            <h1 class="h3 mb-3 font-weight-normal text-center">Registration Form</h1>
            <form class="form-registration">

                <div class="form-floating">
                    <input type="text" name="name" id="name" class="form-control rounded-top" placeholder="Name" >
                    <label for="name">Name</label>
                </div>

                <div class="form-floating">
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" >
                    <label for="name">Username</label>
                </div>

                <div class="form-floating">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" >
                    <label for="name">Email</label>
                </div>

                <div class="form-floating">
                    <input type="password" name="password" id="password" class="form-control rounded-bottom" placeholder="Password" >
                    <label for="name">Password</label>
                </div>

              
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>



            </form>
            <small class="d-block text-center mt-3">
                Not registered? <a href="register">Register Now!</a>
            </small>

        </div>
    </div>


@endsection
