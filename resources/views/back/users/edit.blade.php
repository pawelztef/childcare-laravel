@extends('layouts.backend_layout')

@section('content')
  <section class="content-header">
    <h1> <i class="small fa fa-chevron-right"></i> User profile</h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Edit details form</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
                {!! Form::open(['action' => ["UsersController@update", $user->id], "method" => "POST", 'enctype' => 'multipart/form-data', "class"=>"form-horizontal"]) !!}
                <div class="col-md-3">
                  {{ Form::label('profile_image', 'Profile image',['class'=>'control-label img-lb'])}}
                  <div class="profile-image-con" style="background-image:url('/storage/profile_images/{{$user->profile_image}}')">
                  </div>
                </div>
                <div class="col-md-8">

                  {{Form::hidden('_method', 'PUT')}}

                  <div class="form-group">
                    {{ Form::label('name', 'Fullname',['class'=>'control-label '])}}
                    {{ Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'fullname'])}}
                  </div>
                  <div class="form-group">
                    {{ Form::label('email', 'Email',['class'=>'control-label '])}}
                    {{ Form::text('email', $user->email, [ 'class' => 'form-control', 'placeholder' => 'email'])}}
                  </div>
                  <div class="form-group" >
                    {{ Form::label('profile_image', 'Profile image',['class'=>'control-label '])}}
                    {{Form::file('profile_image')}}
                  </div>
                </div>
              </div>
              <div class="col-md-11">
                <div class="form-group pull-right">
                  <a href="/admin/users" class='btn bg-orange btn-flat'>Cancel</a>
                  {{Form::submit('Submit', ['class'=>'btn bg-orange btn-flat'])}}
                </div>
              </div>

              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>
@endsection
