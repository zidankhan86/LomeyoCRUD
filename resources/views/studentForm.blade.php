
@extends('welcome')
@section('content')
<br><form action="{{ url('/student-form-create') }}" method="post" enctype="multipart/form-data">
    @csrf

    <h2>Student Form</h2>
    <label>
      <p class="label-txt">ENTER YOUR EMAIL</p>
      <input type="text" name="email" class="input">
      <div class="line-box">
        <div class="line"></div>
      </div>
    </label>
    <label>
      <p class="label-txt">ENTER YOUR NAME</p>
      <input type="text" name="name" class="input">
      <div class="line-box">
        <div class="line"></div>
      </div>
    </label>
    <label>
      <p class="label-txt">Choose Image</p>
      <input type="file" name="image" class="input">
      <div class="line-box">
        <div class="line"></div>
      </div>
    </label>
    <label>
        <p class="label-txt">ENTER YOUR PASSWORD</p>
        <input type="password" name="password" class="input">
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
    <button type="submit">submit</button>
  </form>


  @endsection
