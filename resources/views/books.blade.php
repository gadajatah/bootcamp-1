@extends('layouts.app')
@section('title', 'Books')

@section('content')
    <div class="container mt-3">
    <div class="row">
        <div class="col-8">
        <div class="card">
  <div class="card-header">
    <a href="{{ route('books.create') }}" class="btn btn-success btn-sm">Add New Book</a>
  </div>
  <div class="card-body">
     <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Pencipta</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td >
                                <a href="#" class="btn btn-sm btn-primary">Show</a>
                                <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                            </tr>
                        </tbody>
                        </table>
  </div>
</div>
        </div>
    </div>
    </div>
@endsection
