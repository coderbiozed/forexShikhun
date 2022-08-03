<div class="table-responsive">
    <table class="table" id="faqs-table">
        <thead>
        <tr>
            <th>Category Id</th>
        <th>Question</th>
        <th>Answer</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($faqs as $faqs)
        @php $faqcat = DB::table('faq_cat')->Where('id', $faqs->category_id)->first() @endphp
            <tr>
                
            <td>{{ isset($faqcat) ? $faqcat->category_name : 'Rest of all' }}</td>
            <td>{{ $faqs->question }}</td>
            <td>{{ $faqs->answer }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['faqs.destroy', $faqs->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('faqs.show', [$faqs->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('faqs.edit', [$faqs->id]) }}"
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
