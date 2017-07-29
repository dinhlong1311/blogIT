@extends('admin.layouts.index')
@section('title_admin', 'Tạo mới 1 user')
@section('table', 'users')
@section('summary_table', 'Trang tạo mới')
@section('link')
  {{route('user.create')}}
@endsection

@section('content')
  <div class="main-content">
    <h3>Tạo mới 1 user</h3>
    <form action="{{route('user.store')}}" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
       	<i class="fa fa-user prefix"></i>
        <input type="text" name="name" value="{{old('name')}}" id="name" class="form-control">
        <label for="name" class="">Type new name</label>
        @if (count($errors->first('name')))
          <span>{{ $errors->first('name') }}</span>
        @endif
      </div>
      <div class="form-group">
       	<i class="fa fa-envelope prefix"></i>
        <input type="email" name="email" value="{{old('email')}}" id="email" class="form-control">
        <label for="email" class="">Type email</label>
        @if (count($errors->first('email')))
          <span>{{ $errors->first('email') }}</span>
        @endif
      </div>
      <div class="form-group">
       	<i class="fa fa-lock prefix"></i>
        <input type="password" name="password" value="" id="password" class="form-control">
        <label for="password" class="">Type new password</label>
        @if (count($errors->first('password')))
          <span>{{ $errors->first('password') }}</span>
        @endif
      </div>
      <div class="form-group">
       	<i class="fa fa-lock prefix"></i>
        <input type="password" name="password_again" value="" id="password_again" class="form-control">
        <label for="password_again" class="">Type password again</label>
        @if (count($errors->first('password_again')))
          <span>{{ $errors->first('password_again') }}</span>
        @endif
      </div>
      <button type="submit" class="btn btn-primary btn-submit">Submit</button>
    </form>
  </div>
  <div class="notice">
    <h3>User</h3>
  </div>
@endsection
