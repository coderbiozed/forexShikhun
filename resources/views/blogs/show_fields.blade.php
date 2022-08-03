<!-- Publish Date Field -->
<div class="col-sm-12">
    {!! Form::label('publish_date', 'Publish Date:') !!}
    <p>{{ $blog->created_at }}</p>
</div>
<!-- Author Field -->
<div class="col-sm-12">
    {!! Form::label('author', 'Author:') !!}
    <p>{{ $blog->author }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $blog->title }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{!!  $blog->description !!}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    @foreach(json_decode($blog->image, true) as $images)
    <p><img src="{{ asset('images/' . $images) }}" width="300"/></p>
     @endforeach
</div>

<!-- Slug Field -->
<div class="col-sm-12">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $blog->slug }}</p>
</div>