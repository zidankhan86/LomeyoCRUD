@extends('welcome')
@section('content')
<br>
<form action="{{ url('/student-edit-create',$student->id) }}" method="post" enctype="multipart/form-data">
    @csrf

    <h2>Student Edit Form</h2>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <label>
        <p class="label-txt">ENTER YOUR EMAIL</p>
        <input type="text" value="{{ $student->email }}" name="email" class="input">
        <div class="line-box">
            <div class="line"></div>
        </div>
    </label>
    <label>
        <p class="label-txt">ENTER YOUR NAME</p>
        <input type="text" value="{{ $student->name }}" name="name" class="input">
        <div class="line-box">
            <div class="line"></div>
        </div>
    </label>
    <label for="image-upload" style="cursor: pointer;">
        <p class="label-txt">Choose Image</p>
        <img height="100px" width="100px" id="image-preview" src="{{ asset('storage/uploads/' . $student->image) }}" alt="Student Image">

        <input type="file" id="image-upload" name="image" accept="image/*" style="display: none;">
    </label>

    <label>
        <p class="label-txt">ENTER YOUR PASSWORD</p>
        <input type="password" name="password" class="input">
        <div class="line-box">
            <div class="line"></div>
        </div>
    </label>
    <button type="submit">Save Changes</button>
</form>

@endsection
