<div class="table-responsive">
    <table class="table" id="quotes-table">
        <thead>
        <tr>
            <th>Author Name</th>
        <th>Quate Des</th>
        <th>Author Title</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($quotes as $quote)
            <tr>
                <td>{{ $quote->author_name }}</td>
            <td>{{ $quote->quate_des }}</td>
            <td>{{ $quote->author_title }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['quotes.destroy', $quote->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('quotes.show', [$quote->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('quotes.edit', [$quote->id]) }}"
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
