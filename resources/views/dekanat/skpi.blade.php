@extends('layouts.main')

@section('content')
  <div class="row justify-content-center">
    <div class="col text-center">
        <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Subjects</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Something</td>
                <td>
                    <a href="#" class="btn btn-info rounded-pill">See detail</a>
                </td>
              </tr>
            </tbody>
          </table>
    </div>
  </div>
@endsection