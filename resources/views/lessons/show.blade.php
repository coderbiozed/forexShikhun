@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="c_orange"> Lesson Details</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn b_orange float-right text-light "
                       href="{{ route('Lessons.index') }}">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @include('lessons.show_fields')
                </div>
            </div>
        </div>
    </div>
@endsection
