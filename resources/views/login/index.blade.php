@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-signin mt-5">
                <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                <form>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-success" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-2">Not Registered? <a href="/register"
                        class="text-decoration-none">Register
                        Now!</a></small>
            </main>
        </div>
    </div>
@endsection
