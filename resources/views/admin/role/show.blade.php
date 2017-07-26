@extends('admin.layouts.index')
@section('title_admin', 'Hiển thị role')
@section('table', 'roles')
@section('summary_table', 'Trang hiển thị')
@section('link')
  {{route('role.create')}}
@endsection

@section('content')
  <div class="section-content-page">
    <h3>Thông tin role</h3>
    <p><strong>ID:</strong> {{$role->id}}</p>
    <p><strong>Role:</strong> {{$role->role}}</p>
    <p>
      <strong>Created at:</strong>
      {{$role->created_at? $role->created_at->format('d/m/Y H:i:s') : "---"}}
    </p>
    <p>
      <strong>Updated at:</strong>
      {{$role->updated_at? $role->updated_at->format('d/m/Y H:i:s') : "---"}}
    </p>
  </div>
@endsection
