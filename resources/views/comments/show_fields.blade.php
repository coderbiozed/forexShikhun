<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $comment->name }}</p>
</div>

<!-- Comment Field -->
<div class="col-sm-12">
    {!! Form::label('comment', 'Comment:') !!}
    <p>{{ $comment->comment }}</p>
</div>

<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $comment->user_id }}</p>
</div>

<!-- Post Id Field -->
<div class="col-sm-12">
    {!! Form::label('post_id', 'Post Id:') !!}
    <p>{{ $comment->post_id }}</p>
</div>

