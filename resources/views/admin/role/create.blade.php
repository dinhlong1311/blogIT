@extends('admin.layouts.index')
@section('title_admin', 'Tạo mới 1 role')
@section('table', 'roles')
@section('summary_table', 'Trang tạo mới')
@section('link')
  {{route('role.create')}}
@endsection

@section('content')
  <div class="main-content">
    <h3>Tạo mới 1 role</h3>
    <form action="{{route('role.store')}}" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
       	<i class="fa fa-briefcase prefix"></i>
        <input type="text" name="role" value="{{old('role')}}" id="role" class="form-control">
        <label for="role" class="">Type role name</label>
        @if (count($errors->first('role')) > 0)
          <span>{{ $errors->first('role') }}</span>
        @endif
      </div>
      <button type="submit" class="btn btn-primary btn-submit">Submit</button>
    </form>
  </div>
  <div class="notice">
    <h3>Role</h3>
    <ul class="notice-list">
      <li>Không được để trống</li>
      <li>Ít nhất 2 ký tự, không quá 50 ký tự</li>
      <li>Chỉ gồm chữ và số, không có ký tự đặc biệt</li>
    </ul>
  </div>
@endsection
