<!-- Course Title Field -->
<div class="col-sm-12">
    {!! Form::label('course_title', 'Course Title:') !!}
    <p>{{ $course->course_title }}</p>
</div>
<!-- Course Slug Field -->
<div class="col-sm-12">
    {!! Form::label('course_slug', 'Course Slug:') !!}
    <p>{{ $course->course_slug }}</p>
</div>

<!-- Lesson No Field -->
{{-- <div class="col-sm-12">
    {!! Form::label('lesson_no', 'Total Lesson') !!}
    <p>{{ $course->lesson_no }}</p>
</div> --}}

<!-- Rating Field -->
<div class="col-sm-12">
    {!! Form::label('rating', 'Rating:') !!}
    <p>{{ $course->rating }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    @foreach(json_decode($course->image, true) as $images)
    <p><img src="{{ asset('images/courses/' . $images) }}" width="300"/></p>
     @endforeach
</div>


<!-- Course Des Field -->
<div class="col-sm-12">
    {!! Form::label('course_des', 'Course Descriptions:') !!}
    <p>{!! $course->course_des !!}</p>
</div>

<!-- Who Learn Field -->
<div class="col-sm-12">
    {!! Form::label('who_learn', 'Who is this course for ?:') !!}
    <p>{!! $course->who_learn !!}</p>
</div>

<!-- What Learn Field -->
<div class="col-sm-12">
    {!! Form::label('what_learn', 'What you will learn ?') !!}
    <p>{!! $course->what_learn !!}</p>
</div>

<!-- Lesson Title Field -->
{{-- <div class="col-sm-12">
    {!! Form::label('lesson_title', 'Lesson Title:') !!}
    <p>{{ $course->lesson_title }}</p>
</div> --}}

<!-- Lesson Slug Field -->
{{-- <div class="col-sm-12">
    {!! Form::label('lesson_slug', 'Lesson Slug:') !!}
    <p>{{ $course->lesson_slug }}</p>
</div> --}}

<!-- Lesson Des Field -->
{{-- <div class="col-sm-12">
    {!! Form::label('lesson_des', 'Lesson Description:') !!}
    <p>{!! $course->lesson_des !!}</p>
</div> --}}

