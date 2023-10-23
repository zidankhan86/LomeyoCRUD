
@extends('welcome')
@section('content')
<style>
    img{
        height: 100px;
        width: 100px;
    }
</style>
<div class="container">
    <br><br><a href="{{ url('/form') }}" class="btn btn-success" style="text-align: right; float: right;">+Add Student</a>

  <br><br>  <h4 style="text-align: center">Student List</h4><br><br>
  
<table class="table">
    <thead>
      <tr>
        <th></th>
        <th></th>
        <th></th>
        <th scope="col">SL</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($students as $student)
        <tr><th></th><th></th><th></th>
            <th scope="row">{{ $student->id }}</th>
            <td>Larry</td>
            <td><img src="{{ url('/storage/uploads',$student->image) }}" alt=""></td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->email }}</td>
            <td>
                <a href="{{ url('/student-edit',$student->id) }}" class="btn btn-info"><i class="fas fa-info"></i>Edit</a>
                <a href="" class="btn btn-danger ml-auto"><i class="fas fa-trash"></i>Delete</a>
            </td>
        </tr>
        @endforeach

    </tbody>
  </table>

</div>
@endsection
