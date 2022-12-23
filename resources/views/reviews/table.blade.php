<div class="table-responsive">
    <table class="table" id="reviews-table">
        <thead>
        <tr>
            <th>Course Id</th>
            <th>Rating</th>
            <th>Description</th>
            <th>Accept</th>
            <th>Author</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reviews as $review)
        @php $course = DB::table('course')->Where('id',  $review->course_id)->first() @endphp
            <tr>
                {{-- <td>{{ $review->course_id }}</td> --}}
                <td>{{ isset($course) ? $course->course_title : 'Rest of all' }}</td>
                <td>{{ $review->rating }}</td>
                <td>{{ $review->description }}</td>
                <td>{{ isset($review->accept)? 'active' : 'Pending' }}</td>
                <td>{{ $review->author }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['reviews.destroy', $review->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('reviews.show', [$review->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('reviews.edit', [$review->id]) }}"
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
