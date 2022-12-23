@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="c_orange">Lessons</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn b_orange float-right text-light"
                       href="{{ route('Lessons.create') }}">
                        Add New
                    </a>
                    <!---- search nav -- -->
                    {{-- <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                        <button class="btn btn-sidebar bg-info">
                        <i class="fas fa-search fa-fw nav-icon"></i>
                        </button>
                        </div>
                        </div>
                    </div> --}}
                    <!-- need to remove if unessential   -->
                    
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('lessons.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
        <span>
            {{ $Lessons->Links()}}
          </span>
    </div>

@endsection

