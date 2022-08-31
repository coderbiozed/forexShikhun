<!-- Title Field -->

<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    <div class="badge bg-danger">
      Must Use between 35 to 40 character
    </div>
    {!! Form::text('title', null, ['class' => 'form-control','minlength' => 35,'maxlength' => 45]) !!}
  
</div>

<!-- Video Field -->
<div class="form-group col-sm-6">
    <div class="badge bg-info">
      Paste Here
      </div>
    {!! Form::label('video', 'Video Embed Code:') !!}
    {!! Form::textarea('video', null, ['class' => 'form-control']) !!}
</div>