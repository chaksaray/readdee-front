@extends('layouts.auth')

@section('title', 'Register')

@section('content')

    <div class="container">
        
        <div class="auth-panel mx-auto mt-4">

            <h1 class="font-weight-500 text-center mb-2 mt-2">
                Join Asvawat
            </h1>

            <form method="post" action="#">
                @csrf
                <div class="form-group b-3">
                    <input type="email" name="email" class="form-control" value="" placeholder="Email">
                    @error('email')
                         <p class="font-size-12 text-danger mb-1">message</p>
                    @enderror
                </div>
                <div class="form-group b-3">
                    <input type="password" name="password" class="form-control" placeholder="password">
                    @error('password')
                         <p class="font-size-12 text-danger mb-1">message</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-block btn-success mt-4 text-capitalize">
                    <span class="d-block py-1 font-weight-500 text-capitalize">Register</span>
                </button>
                <p class="text-muted mt-2 text-right"><a href="/register">Forgot password?</a> <a href="/register">Register</a></p>
            </form>

        </div>

    </div>

@endsection