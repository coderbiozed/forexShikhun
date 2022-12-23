<div class="table-responsive">
    <table class="table" id="comments-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>Comment</th>
        <th>User Id</th>
        <th>Post Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($comments as $comment)
            <tr>
                <td>{{ $comment->name }}</td>
            <td>{!! Str::limit(strip_tags($comment->comment), 50) !!}</td>
            <td>{{ $comment->user_id }}</td>
            <td>{{ $comment->post_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('comments.show', [$comment->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('comments.edit', [$comment->id]) }}"
                           class='btn btn-default btn-xs'>
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
