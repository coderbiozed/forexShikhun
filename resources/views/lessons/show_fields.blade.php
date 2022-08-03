<!-- Course Id Field -->
<div class="col-sm-12">
    {!! Form::label('course_id', 'Course Id:') !!}
   
    <p> {{ $Lesson->course_id }}</p>
</div>

<!-- Lesson No Field -->
<div class="col-sm-12">
    {!! Form::label('lesson_no', 'Lesson No:') !!}
    <p>{{ $Lesson->lesson_no }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $Lesson->title }}</p>
</div>

<!-- Slug Field -->
<div class="col-sm-12">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $Lesson->slug }}</p>
</div>

<!-- Short Des Field -->
<div class="col-sm-12">
    {!! Form::label('short_des', 'Short Description:') !!}
    <p>{!! $Lesson->short_des !!}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $Lesson->description !!}</p>
 
</div>

<!-- Image Field -->
{{-- <div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    @foreach(json_decode($Lesson->image, true) as $images)
    <p><img src="{{ asset('images/courses/lessons/' . $images) }}" width="300"/></p>
     @endforeach
</div> --}}



