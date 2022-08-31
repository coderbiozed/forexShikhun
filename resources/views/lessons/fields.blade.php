<!-- Course Id Field -->
 {{-- <div class="form-group col-sm-6">
    {!! Form::label('course_id', 'Course Name:') !!}
    {!! Form::number('course_id',  null, ['class' => 'form-control']) !!}
</div>  --}}
<!-- Course Id Field -->
<div class="form-group col-sm-6" id="lessons">
    {!! Form::label('course_id', 'Course Name:') !!}
    {!! Form::select('course_id', $course,  null, ['class' => 'form-control']) !!}
</div> 

<!-- Lesson No Field -->

<div class="form-group col-sm-6" id="lessons">
    {!! Form::label('lesson_no', 'Lesson No:') !!}
    {!! Form::text('lesson_no', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6" id="lessons">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6" id="lessons">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Short Des Field -->
<div class="form-group col-sm-12 col-lg-12" id="lessons">
    {!! Form::label('short_des', 'Short Des:') !!}
    {!! Form::textarea('short_des', null, ['class' => 'ckeditor form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12" id="lessons">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'ckeditor form-control']) !!}
</div>

<!-- Image Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div> --}}
{{-- <div class="form-group col-sm-6">
    {!! Form::label('image', 'Images:') !!}

    @csrf
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="user-image mb-3 text-center">
                <div class="imgPreview"> </div>
            </div>            

            <div class="custom-file">
                <input type="file" name="Image[]" class="custom-file-input" id="images" multiple="multiple">
                <label class="custom-file-label" for="images">Choose image (Size: 1000x600)</label>
            </div>
</div> --}}