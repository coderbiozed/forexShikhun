@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="c_orange">Edit  Lesson</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($Lesson, ['route' => ['Lessons.update', $Lesson->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('lessons.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn b_orange float-right text-light']) !!}
                <a href="{{ route('Lessons.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
