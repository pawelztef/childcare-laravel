@extends('layouts.backend_layout')
@section('content')
  <section class="content-header">
    <h1> <i class="small fa fa-chevron-right"></i> Show user</h1>
    <a href="/admin/users" id="btn-register-user" class="btn bg-orange btn-flat btn-small pull-right"><span class="fa fa-add"></span> Back </a>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Details</h3>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="row">
                  <div class="col-md-4"> <img src="/storage/profile_images/{{$user->profile_image}}" alt=""></div>
                  <div class="col-md-8">details</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
