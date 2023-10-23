
@extends('welcome')
@section('content')

<div class="container">
    <br><br><a href="{{ url('/form') }}" class="btn btn-success" style="text-align: right; float: right;">+Add Student</a>

  <br><br>  <h4 style="text-align: center">Student List</h4><br><br>
<table class="table">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>


      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
        <td>
            <a href="" class="btn btn-info"><i class="fas fa-info">Edit</i></a>
            <a href="" class="btn btn-danger"><i class="fas fa-trash">Delete</i></a>

        </td>
      </tr>
    </tbody>
  </table>

</div>
@endsection
