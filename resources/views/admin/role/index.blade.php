@extends('admin.layouts.index')
@section('title_admin', 'Danh sách roles')
@section('table', 'roles')
@section('summary_table', 'Trang danh sách')
@section('link')
  {{route('role.create')}}
@endsection

@section('content')
  <div class="section-content-page">
    <table id="table-blogIT" class="cell-border row-border order-column stripe" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>ID</th>
          <th>Role</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>ID</th>
          <th>Role</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </tfoot>
      <tbody>
        @foreach ($roles as $role)
          <tr>
            <td><a href="roles/{{$role->id}}">{{$role->id}}</a></td>
            <td><a href="roles/{{$role->id}}">{{$role->role}}</a></td>
            <td class="text-center">
              <a href="roles/{{$role->id}}/edit">
                <i class="fa fa-pencil-square-o edit" aria-hidden="true"></i>
                Edit
              </a>
            </td>
            <td class="text-center">
              <a href="roles/{{$role->id}}" data-method="delete" data-confirm="Are you sure?">
                <i class="fa fa-trash-o delete" aria-hidden="true"></i>
                Delete
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
