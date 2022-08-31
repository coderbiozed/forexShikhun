@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="c_de_re">Edit Subscribe</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($subscribe, ['route' => ['subscribes.update', $subscribe->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('subscribes.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn b_c_de_re text-light']) !!}
                <a href="{{ route('subscribes.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
