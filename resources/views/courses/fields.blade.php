<!-- Course Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_title', 'Course Title:') !!}
    {!! Form::text('course_title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
<!-- Course Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_slug', 'Course Slug:') !!}
    {!! Form::text('course_slug', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Lesson No Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('lesson_no', 'Total Lesson:') !!}
    {!! Form::text('lesson_no', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div> --}}

<!-- Rating Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rating', 'Rating:') !!}
    {!! Form::text('rating', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
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
</div>

<!-- Course Des Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('course_des', 'Course Description:') !!}
    {!! Form::textarea('course_des', null, ['class' => 'ckeditor form-control']) !!}
  
</div>

<!-- Who Learn Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('who_learn', 'Who is this course for ?') !!}
    {!! Form::textarea('who_learn', null, ['class' => 'ckeditor form-control']) !!}
</div>

<!-- What Learn Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('what_learn', 'What you will learn ?') !!}
    {!! Form::textarea('what_learn', null, ['class' => 'ckeditor form-control']) !!}
</div>

<!-- Lesson Title Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('lesson_title', 'Lesson Title:') !!}
    {!! Form::text('lesson_title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div> --}}

<!-- Lesson Slug Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('lesson_slug', 'Lesson Slug:') !!}
    {!! Form::text('lesson_slug', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div> --}}

<!-- Lesson Des Field -->
{{-- <div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('lesson_des', 'Lesson Description:') !!}
    {!! Form::textarea('lesson_des', null, ['class' =>'ckeditor form-control']) !!}
</div> --}}