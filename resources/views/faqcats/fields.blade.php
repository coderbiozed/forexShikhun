<!-- Creator Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('creator_name', 'Creator Name:') !!}
    {!! Form::text('creator_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Category Name Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('category_name', 'Category Name:') !!}
    {!! Form::textarea('category_name', null, ['class' => 'form-control']) !!}
</div>