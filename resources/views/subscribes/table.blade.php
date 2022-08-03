<div class="table-responsive">
    <table class="table" id="subscribes-table">
        <thead>
        <tr>
            <th>Email</th>
        <th>Email Verified At</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($subscribes as $subscribe)
            <tr>
                <td>{{ $subscribe->email }}</td>
            <td>{{\Carbon\Carbon::parse($subscribe->created_at)->diffForHumans()}}</td>
                <td width="120">
                    {!! Form::open(['route' => ['subscribes.destroy', $subscribe->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('subscribes.show', [$subscribe->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('subscribes.edit', [$subscribe->id]) }}"
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
