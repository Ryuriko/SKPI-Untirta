@extends('layouts.main')

@section('css')
    <style>
        body{
            background-image: url('https://fisip.untirta.ac.id/wp-content/uploads/slider2/untirta-sindangsari.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
        }
        h1 {
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
    </style>
@endsection

@section('content')
    <div class="row justify-content-end">
        <div class="col-md-1 col-3">
            <a href="/login" class="btn border border-dark">Login</a>
        </div>
    </div>
    <div class="row justify-content-center pt-5">
        <div class="col-md-7 text-center pt-5">
            <h1 class="mb-5">Selamat Datang di Website SKPI FT UNTIRTA</h1>
            <a href="/submissions" class="btn btn-dark mt-5">Lets Go!</a>
        </div>
    </div>
@endsection