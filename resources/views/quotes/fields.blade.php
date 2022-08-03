<!-- Author Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('author_name', 'Author Name:') !!}
    {!! Form::text('author_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Quate Des Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('quate_des', 'Quate Des:') !!}
    {!! Form::textarea('quate_des', null, ['class' => 'form-control']) !!}
</div>

<!-- Author Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('author_title', 'Author Title:') !!}
    {!! Form::text('author_title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>