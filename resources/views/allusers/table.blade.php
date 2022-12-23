<div class="table-responsive">
    <table class="table" id="allusers-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>Email</th>
        {{-- <th>Email Verified At</th> --}}
        {{-- <th>Password</th> --}}
        <th>Username</th>
        <th>User Title</th>
        <th>About</th>
        <th>Location</th>
        <th>Linkedin</th>
        <th>Twitter</th>
        <th>Instagram</th>
        <th>Facebook</th>
        <th>Image</th>
        {{-- <th>Status</th> --}}
        {{-- <th>Remember Token</th> --}}
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($allusers as $alluser)
            <tr>
                <td>{{ $alluser->name }}</td>
            <td>{{ $alluser->email }}</td>
            {{-- <td>{{ $alluser->email_verified_at }}</td> --}}
            {{-- <td>{{ $alluser->password }}</td> --}}
            <td>{{ $alluser->username }}</td>
            <td>{{ $alluser->user_title }}</td>
            <td>{!! Str::limit(strip_tags($alluser->about), 50) !!}</td>
            <td>{{ $alluser->location }}</td>  
            <td>{{ $alluser->linkedin }}</td> 
            <td>{{ $alluser->twitter }}</td> 
            <td>{{ $alluser->instagram }}</td> 
            <td>{{ $alluser->facebook }}</td>           
            <td><img src="{{ asset('images/alluser/' .json_decode($alluser->image)[0]) }} " width="100" height="100"/></td>
            {{-- <td>{{ $alluser->status }}</td> --}}
            {{-- <td>{{ $alluser->remember_token }}</td> --}}
                <td width="120">
                    {!! Form::open(['route' => ['allusers.destroy', $alluser->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('allusers.show', [$alluser->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        {{-- <a href="{{ route('allusers.edit', [$alluser->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a> --}}
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
