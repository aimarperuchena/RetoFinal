@extends('layouts.app')
@section('content')
<div class="container-fluid">
        <div class="row">
            @include('layouts.admin.adminSidebar')

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <!-- Content Row -->
                <br>
                <br><br>
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Panel de Control</h1>
                </div>
                @include('layouts.admin.adminHeader')

             
                @yield('adminContent')
            </main>
        </div>
    </div>
@endsection
