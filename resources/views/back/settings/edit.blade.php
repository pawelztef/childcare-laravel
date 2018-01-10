@extends('layouts.backend_layout')

@section('content')
  <section class="content-header">
    <h1> <i class="small fa fa-chevron-right"></i> Change your settings</h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="box box-default color-palette-box">
      <div class="box-header with-border">
        <h3 class="box-title"> Settings form </h3>
      </div>
      <div class="box-body"> 
        <div class="row">
          <div class="col-md-12">
            {!! Form::open(['action' => ["SettingsController@update", $settings->id], "method" => "POST", 'enctype' => 'multipart/form-data', "class"=>"form-horizontal"]) !!}
            {{Form::hidden('_method', 'PUT')}}
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">Logo</a></li>
                <li><a href="#tab_2" data-toggle="tab">Address</a></li>
                <li><a href="#tab_3" data-toggle="tab">Links</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group" >
                            {{ Form::label('logo_image', 'logo',['class'=>'control-label img-lb'])}}
                            <div class="profile-image-con" style="background-image:url('/storage/logo_images/{{$settings->logo_image}}')">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="form-group">
                            {{ Form::label('site_name', 'Site name',['class'=>'control-label '])}}
                            {{ Form::text('site_name', $settings->site_name, ['class' => 'form-control', 'placeholder' => ''])}}
                            {{ Form::label('catchphrase_line1', 'Catchphrase line 1',['class'=>'control-label '])}}
                            {{ Form::text('catchphrase_line1', $settings->catchphrase_line1, ['class' => 'form-control', 'placeholder' => ''])}}
                            {{ Form::label('catchphrase_line2', 'Catchphrase line 2',['class'=>'control-label '])}}
                            {{ Form::text('catchphrase_line2', $settings->catchphrase_line2, ['class' => 'form-control', 'placeholder' => ''])}}
                            {{Form::file('logo_image')}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab_2">
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                      <div class="row">
                        <div class="col-md-6">
                          {{ Form::label('address_line1', 'Address line 1', ['class'=>'control-label']) }}
                          {{ Form::text('address_line1', $settings->address_line1, ['class'=>'form-control', 'placeholder'=>'']) }}
                        </div>
                        <div class="col-md-6">
                          {{ Form::label('address_line2', 'Address line 2', ['class'=>'control-label']) }}
                          {{ Form::text('address_line2', $settings->address_line2, ['class'=>'form-control']) }}
                        </div>
                        <div class='col-md-4'>
                          {{ Form::label('town', 'Town', ['class'=>'control-label']) }}
                          {{ Form::text('town', $settings->town, ['class'=>'form-control']) }}
                        </div>
                        <div class='col-md-4'>
                          {{ Form::label('county', 'County', ['class'=>'control-label']) }}
                          {{ Form::text('county', $settings->county, ['class'=>'form-control']) }}
                        </div>
                        <div class='col-md-4'>
                          {{ Form::label('code', 'Postal code', ['class'=>'control-label']) }}
                          {{ Form::text('code', $settings->code, ['class'=>'form-control']) }}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab_3">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                  when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                  It has survived not only five centuries, but also the leap into electronic typesetting,
                  remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                  sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                  like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
              </div>
              <!-- /.tab-content -->
              <!-- nav-tabs-custom -->

              {{-- <div class="col-md-3"> --}}
                {{--   {{ Form::label('profile_image', 'Profile image',['class'=>'control-label img-lb'])}} --}}
                {{--   <div class="profile-image-con" style="background-image:url('/storage/profile_images/{{$user->profile_image}}')"> --}}
                  {{--   </div> --}}
                {{-- </div> --}}
              {{-- <div class="col-md-8"> --}}
                {{--   <div class="form-group"> --}}
                  {{--     {{ Form::label('name', 'Fullname',['class'=>'control-label '])}} --}}
                  {{--     {{ Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'fullname'])}} --}}
                  {{--   </div> --}}
                {{--   <div class="form-group"> --}}
                  {{--     {{ Form::label('email', 'Email',['class'=>'control-label '])}} --}}
                  {{--     {{ Form::text('email', $user->email, [ 'class' => 'form-control', 'placeholder' => 'email'])}} --}}
                  {{--   </div> --}}
                {{--   <div class="form-group" > --}}
                  {{--     {{ Form::label('profile_image', 'Profile image',['class'=>'control-label '])}} --}}
                  {{--     {{Form::file('profile_image')}} --}}
                  {{--   </div> --}}
                {{-- </div> --}}
              {{-- </div> --}}

          </div>
        </div>
        <div class='pull-right fr-btns-wrp'>
          <a href="/admin/dashboard" class='btn bg-orange btn-flat'>Cancel</a>
          {{Form::submit('Submit', ['class'=>'btn bg-orange btn-flat'])}}
        </div>
        {!! Form::close() !!}
      </div>
  </section>
@endsection
