<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $alluser->name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $alluser->email }}</p>
</div>

<!-- Email Verified At Field -->
<div class="col-sm-12">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    <p>{{ $alluser->email_verified_at }}</p>
</div>

<!-- Password Field -->
<div class="col-sm-12">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $alluser->password }}</p>
</div>

<!-- Username Field -->
<div class="col-sm-12">
    {!! Form::label('username', 'Username:') !!}
    <p>{{ $alluser->username }}</p>
</div>

<!-- User Title Field -->
<div class="col-sm-12">
    {!! Form::label('user_title', 'User Title:') !!}
    <p>{{ $alluser->user_title }}</p>
</div>

<!-- About Field -->
<div class="col-sm-12">
    {!! Form::label('about', 'About:') !!}
    <p>{{ $alluser->about }}</p>
</div>

<!-- Location Field -->
<div class="col-sm-12">
    {!! Form::label('location', 'Location:') !!}
    <p>{{ $alluser->location }}</p>
</div>
<!-- linkedin Field -->
<div class="col-sm-12">
    {!! Form::label('linkedin', 'Linkedin:') !!}
    <p>{{ $alluser->linkedin }}</p>
</div>
<!-- twitter Field -->
<div class="col-sm-12">
    {!! Form::label('twitter', 'Twitter:') !!}
    <p>{{ $alluser->twitter }}</p>
</div>
<!-- instagram Field -->
<div class="col-sm-12">
    {!! Form::label('instagram', 'Instagram:') !!}
    <p>{{ $alluser->twitter }}</p>
</div>
<!-- facebook Field -->
<div class="col-sm-12">
    {!! Form::label('facebook', 'Facebook:') !!}
    <p>{{ $alluser->facebook }}</p>
</div>


<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    @foreach(json_decode($alluser->image, true) as $images)
         <p><img src="{{ asset('images/alluser/' . $images) }}" width="300"/></p>
     @endforeach
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $alluser->status }}</p>
</div>



