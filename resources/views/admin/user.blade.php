
@extends('master.admin')

@section('page-title')
  Manage - User
@endsection

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="vue-user">

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid pt-5">

        {{-- <router-view></router-view> --}}
        <user-component>

        </user-component>

        <!-- set progressbar -->
        <vue-progress-bar></vue-progress-bar>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
