@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="c_green">Edit Course</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($course, ['route' => ['courses.update', $course->id], 'method' => 'patch', 'enctype' => 'multipart/form-data' ]) !!} 
           
            <div class="card-body">
                <div class="row">
                    @include('courses.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn bg-c_green text-light']) !!}
                <a href="{{ route('courses.index') }}" class="btn btn-default ">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
