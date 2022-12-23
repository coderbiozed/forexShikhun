
<!-- Course Id Field -->
<div class="col-sm-12">
    {!! Form::label('course_id', 'Course Id:') !!}
    @php $course = DB::table('course')->Where('id',  $review->course_id)->first() @endphp
    <p>{{ $review->course_id }}</p>
</div>

<!-- Rating Field -->
<div class="col-sm-12">
    {!! Form::label('rating', 'Rating:') !!}
    <p>{{ $review->rating }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $review->description }}</p>
</div>

<!-- Accept Field -->
<div class="col-sm-12">
    {!! Form::label('accept', 'Accept:') !!}
    <p>{{ $review->accept }}</p>
</div>
<!-- author Field -->
<div class="col-sm-12">
    {!! Form::label('author', 'Author:') !!}
    <p>{{ $review->author }}</p>
</div>

