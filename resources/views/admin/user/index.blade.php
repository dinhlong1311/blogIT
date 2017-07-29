@extends('admin.layouts.index')
@section('title_admin', 'Danh sách users')
@section('table', 'users')
@section('summary_table', 'Trang danh sách')
@section('link')
  {{route('user.create')}}
@endsection

@section('content')
  <div class="section-content-page">
    <table id="table-blogIT" class="cell-border row-border order-column stripe" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </tfoot>
      <tbody>
        @foreach ($users as $user)
          <tr>
            <td><a href="{{route('user.show', $user->id)}}">{{$user->id}}</a></td>
            <td><a href="{{route('user.show', $user->id)}}">{{$user->name}}</a></td>
            <td><a href="{{route('user.show', $user->id)}}">{{$user->email}}</a></td>
            <td class="text-center">
              <a href="roles/{{$user->id}}/edit">
                <i class="fa fa-pencil-square-o edit" aria-hidden="true"></i>
                Edit
              </a>
            </td>
            <td class="text-center">
              <a href="{{route('role.destroy', $user->id)}}" data-method="DELETE"
                data-token="{{csrf_token()}}" data-confirm="Are you sure?">
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
