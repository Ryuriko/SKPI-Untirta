@extends('layouts.main')

@section('content')
  <div class="row justify-content-center">
    <div class="col text-center">
        <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">NIM</th>
                <th scope="col">Major</th>
                <th scope="col">Faculty</th>
                <th scope="col">Batch</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Something</td>
                <td>Something</td>
                <td>Something</td>
                <td>Something</td>
                <td>Something</td>
                <td>
                    <a href="#" class="btn btn-primary rounded-circle"><i class="bi bi-check2-circle"></i></a>
                    <a href="#" class="btn btn-danger rounded-circle"><i class="bi bi-x-circle"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
    </div>
  </div>
@endsection