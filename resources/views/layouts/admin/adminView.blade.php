@extends('layouts.app')
@section('content')
<div id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper" class="d-flex">
    @include('layouts.admin.adminSidebar')
    <!-- Content Wrapper -->
    <div class="container-fluid">
      @include('layouts.admin.adminHeader')
      <!-- Content Row -->
      @yield('adminContent')
    </div>
  </div>
</div>
@endsection
