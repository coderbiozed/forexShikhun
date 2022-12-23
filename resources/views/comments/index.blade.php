@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 bg-dark rounded">
                    <h1 class="text-warning text-center">Control All Comments From Here</h1>
                </div>
                <div class="col-sm-6 rounded">
                    <a class="btn btn-warning float-right texy=t-dark"
                       href="{{ route('comments.create') }}">
                        Add New Comment
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('comments.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

