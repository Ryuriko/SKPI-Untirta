@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <h2 class="h2">Add New Submission</h2>
        <div class="col-9 p-4 shadow-lg">
            <form method="post" action="/submissions">
                @csrf
                <div class="mb-3">
                  <label for="subject" class="form-label">Subject</label>
                  <input type="text" class="form-control border border-secondary rounded-pill" id="subject" name="subject">
                  {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>
                <div class="mb-3">
                    <label for="certificate-numbers" class="form-label">Certificate Numbers</label>
                    <input type="text" class="form-control border border-secondary rounded-pill" id="certificate-numbers" name="certificate-numbers">
                  </div>
                <div class="mb-3">
                  <label for="mbkm" class="form-label">MBKM</label>
                  <input type="text" class="form-control border border-secondary rounded-pill" id="mbkm" name="mbkm">
                </div>
                <div class="mb-3">
                  <label for="date" class="form-label">Date of MBKM</label>
                  <input type="date" class="form-control border border-secondary rounded-pill" id="date" name="date">
                </div>
                <div class="mb-3">
                  <label for="file" class="form-label">Add File</label>
                  <input type="file" class="form-control" id="file" name="file">
                </div>
                {{-- <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <a href="/submissions" class="btn btn-dark"><i class="bi bi-arrow-left-square-fill"></i> Back</a>
            </div>
        </div>
@endsection