@extends('layouts.main')

@section('css')
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-3 col-8 text-center shadow-lg rounded-5 pt-4 my-5">
        <main class="form-signin w-100 m-auto">
            <form class="">
                <h1 class="h3 mb-3 fw-normal">Please Log in</h1>
            
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
            
                {{-- <div class="checkbox mb-3">
                    <label>
                    <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div> --}}
                <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
                <p class="mt-5 mb-3 text-body-secondary">&copy; 2017-2023</p>
            </form>
        </main>
    </div>
</div> 
@endsection

@section('js')
    
@endsection