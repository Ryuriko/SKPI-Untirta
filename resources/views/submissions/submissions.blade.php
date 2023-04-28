@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-10 text-center">
            <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Subect</th>
                    <th scope="col">Date</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Something</td>
                    <td>26 April 2023</td>
                    <td>
                        <a href="/track" class="btn btn-primary rounded-circle"><i class="bi bi-zoom-in"></i></a>
                        <a href="/" class="btn btn-success rounded-circle my-2 my-md-0"><i class="bi bi-pencil-square"></i></a>
                        <a href="/" class="btn btn-danger rounded-circle"><i class="bi bi-x-circle"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col text-center">
          <a href="/submissions/create" class="btn btn-dark"><i class="bi bi-patch-plus-fill d-block"></i> Add new submission</a>
        </div>
      </div>
@endsection