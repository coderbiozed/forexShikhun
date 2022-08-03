<div class="table-responsive">
    <table class="table" id="faqcats-table">
        <thead>
        <tr>
            <th>Creator Name</th>
        <th>Category Name</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($faqcats as $faqcat)
            <tr>
                <td>{{ $faqcat->creator_name }}</td>
            <td>{{ $faqcat->category_name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['faqcats.destroy', $faqcat->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('faqcats.show', [$faqcat->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('faqcats.edit', [$faqcat->id]) }}"
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
