
@extends('welcome')
@section('content')
<br><form action="{{ url('/student-form-create') }}" method="post" enctype="multipart/form-data">
    @csrf


    <h2>Student Form</h2>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <label>
      <p class="label-txt">ENTER YOUR EMAIL</p>
      <input type="text" name="email" class="input">
      <div class="line-box">
        @error('email')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="line"></div>
      </div>
    </label>
    <label>
      <p class="label-txt">ENTER YOUR NAME</p>
      <input type="text" name="name" class="input">
      <div class="line-box">
        @error('name')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="line"></div>
      </div>
    </label>
    <label>
      <p class="label-txt">Choose Image</p>
      <input type="file" name="image" class="input">
      <div class="line-box">
        @error('image')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="line"></div>
      </div>
    </label>
    <label>
        <p class="label-txt">ENTER YOUR PASSWORD</p>
        <input type="password" name="password" class="input">
        <div class="line-box">
            @error('password')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          <div class="line"></div>
        </div>
      </label>
    <button type="submit">submit</button>
  </form>


  @endsection
