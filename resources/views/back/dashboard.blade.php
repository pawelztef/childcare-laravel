@extends('layouts.backend_layout')
@section('content')
  <section class="content-header">
    <h1> <i class="small fa fa-chevron-right"></i> Dashboard</h1>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Users Table</h3>
          </div>
          <img src="/storage/logo_images/{{$site_settings->logo_image}}" alt="">
        </div>
      </div>
    </div>
  </section>
@endsection
