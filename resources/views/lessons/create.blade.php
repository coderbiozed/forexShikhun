@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="c_orange">Create  Lesson</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'Lessons.store']) !!}

            <div class="card-body">
                
                <div class="row">
                    @include('lessons.fields')
                </div>
               
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn b_orange text-light']) !!}
                <a href="{{ route('Lessons.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
