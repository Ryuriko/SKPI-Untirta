@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10 col-8 text-center shadow-lg rounded-5 pt-4 bg-dark">
        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-light">User Registration</h1>
            <hr class="bg-light">
            <form method="post" action="" class="row jutify-content center text-light m-3 rounded-5">
                @csrf
                <div class="col-md-6">
                    <div class="form-floating">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-floating">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim">
                    </div>
                    <div class="form-floating">
                        <label for="gender">Gender</label>
                        <input type="text" class="form-control" id="gender" name="gender">
                    </div>
                    <div class="form-floating">
                        <label for="major">Major</label>
                        <input type="text" class="form-control" id="major" name="major">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <label for="faculty">Faculty</label>
                        <input type="text" class="form-control" id="faculty" name="faculty">
                    </div>
                    <div class="form-floating">
                        <label for="batch">Batch Registration (years)</label>
                        <input type="text" class="form-control" id="batch" name="batch">
                    </div>                
                    <div class="form-floating">
                        <label for="pp">Profile Picture</label>
                        <input type="file" class="form-control" id="pp" name="pp">
                    </div>             
                </div>                   
                
                {{-- <div class="checkbox mb-3">
                    <label>
                    <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div> --}}

                <button class="w-100 btn btn-lg btn-primary mt-4 mb-2 mx-5" type="submit">Sign in</button>
            </form>

            <hr class="bg-light">

            <div class="form-floating my-3 mx-auto text-center">
                <a href="/" class="">Log in</a>
            </div>

            <p class="mb-3 mx-auto text-body-secondary">&copy; 2017-2023</p>
        </main>
    </div>
</div> 
@endsection