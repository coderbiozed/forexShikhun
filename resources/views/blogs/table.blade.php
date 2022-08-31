<div class="table-responsive">
    <table class="table" id="blogs-table">
        <thead>
            <tr>
                <th class="c_violet">Author</th>
                <th class="c_violet">Title</th>
                <th class="c_violet">Description</th>
                <th class="c_violet">Image</th>
                <th class="c_violet">Pub: Date</th>
                <th colspan="3" class="c_violet">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($blogs as $blog)
            <tr>
                <td>{{ $blog->author }}</td>
                <td>{{ $blog->title }}</td>
                <td>{!! Str::limit(strip_tags($blog->description), 50) !!}</td>
                <td><img src="{{ asset('images/' . json_decode($blog->image) [0] ) }} " width="100" height="100"/></td>
                <td>{{\Carbon\Carbon::parse($blog->created_at)->diffForHumans()}}</td>
                <td width="120">
                        {!! Form::open(['route' => ['blogs.destroy', $blog->id], 'method' => 'delete']) !!}
                        <div class='btn-group' style="display: flex">
                            <a href="{{ route('blogs.show', [$blog->id]) }}" class='btn btn-info btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('blogs.edit', [$blog->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

   
