@extends('backend.master')
@section('content')
        <!-- Main Content -->
<div class="container-fluid">
    <div class="side-body">
        <div class="row">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="title ">@yield('title', 'Danh sách')</span>
                        </div>
                    </div>
                    <div class="card-body">
                        @yield('body')
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Main Content -->
@endsection