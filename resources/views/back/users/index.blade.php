@extends('layouts.backend_layout')
@section('content')
  <section class="content-header">
    <h1> <i class="small fa fa-chevron-right"></i> Manage all useres </h1>
    <a href="/admin/register" id="btn-register-user" class="btn bg-orange btn-flat btn-small pull-right"><span class="fa fa-add"></span> Register New User</a>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Users Table</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            @if(count($users) > 0)
              <table id="users-table" class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th style="width: 40px">Action</th>
                </tr>
                @foreach($users as $key=>$user)
                  <tr>
                    <td>{{++$key}}.</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                      {{-- {!! Form::open(['action' => ['UsersController@destroy', $user->id], 'method' => 'POST']) !!} --}}
                      {{-- {{ Form::hidden('_method', 'DELETE') }} --}}
                      {{-- {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) }} --}}
                      {{-- {!! Form::close() !!} --}}
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
          <!-- /.box-body -->
          {{-- <div class="box-footer clearfix"> --}}
          {{--   <ul class="pagination pagination-sm no-margin pull-right"> --}}
          {{--     <li><a href="#">&laquo;</a></li> --}}
          {{--     <li><a href="#">1</a></li> --}}
          {{--     <li><a href="#">2</a></li> --}}
          {{--     <li><a href="#">3</a></li> --}}
          {{--     <li><a href="#">&raquo;</a></li> --}}
          {{--   </ul> --}}
          {{-- </div> --}}
        </div>
        <!-- /.box -->
      </div>
    </div>
  </section>
@endsection
