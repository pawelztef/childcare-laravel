@extends('layouts.backend_layout')
@section('content')
  <section class="content-header">
    <h1> <i class="small fa fa-chevron-right"></i> Manage all useres </h1>
    <a href="/admin/register" id="btn-register-user" class="btn bg-orange btn-flat btn-small pull-right"><span class="fa fa-add"></span> Register New User</a>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Users Table</h3>
          </div>
          <div class="box-body">
            @if(count($users) > 0)
              <table id="users-table" class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th style="width: 115px">Action</th>
                </tr>
                @foreach($users as $key=>$user)
                  <tr>
                    <td>{{++$key}}.</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                      <a href="/admin/users/{{$user->id}}/edit" class="btn btn-flat bg-orange btn-xs">Edit</a>
                      {!! Form::open(['action' => ['UsersController@destroy', $user->id], 'method' => 'POST', 'class' => 'delete-form']) !!}
                      {{ Form::hidden('_method', 'DELETE') }}
                      {{ Form::submit('Delete', ['class' => 'btn btn-flat btn-danger btn-xs']) }}
                      {!! Form::close() !!}
                    </td>
                  </tr>
                @endforeach
              </table>
              <div class="pull-right">
                {{$users->links()}}
              </div>
              @else
                <p>No posts found</p>
              @endif
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
