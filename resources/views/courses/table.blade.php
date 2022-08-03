<div class="table-responsive">
    <table class="table table-strip" id="courses-table">
        <thead>
        <tr>
            <th>Course Title</th>
            <th>Course Slug</th>
            {{-- <th>Total Lesson</th> --}}
            <th>Rating</th>
            <th>Image</th>
            <th>Course Description</th>
            <th>Who is this course for ?</th>
            <th>What you will learn ?</th>
            {{-- <th>Lesson Title</th>
            <th>Lesson Slug</th>
            <th>Lesson Description</th> --}}
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($courses as $course)
            <tr>
                <td>{{ $course->course_title }}</td>
                <td>{{ $course->course_slug }}</td>
                {{-- <td>{{ $course->lesson_no }}</td> --}}
                <td>{{ $course->rating }}</td>
                <td><img src="{{ asset('images/courses/' . json_decode($course->image) [0] ) }} " width="150" height="150"/></td>
                <td>{!! Str::limit(strip_tags($course->course_des), 50) !!}</td>
                <td>{!! Str::limit(strip_tags($course->who_learn), 50) !!}</td>
                <td>{!! Str::limit(strip_tags($course->what_learn), 50) !!}</td>
                {{-- <td>{{ $course->lesson_title }}</td>
                <td>{{ $course->lesson_slug }}</td>
                <td>{!! Str::limit(strip_tags($course->lesson_des), 50) !!}</td> --}}
                    <td width="120">
                        {!! Form::open(['route' => ['courses.destroy', $course->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('courses.show', [$course->id]) }}"
                            class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('courses.edit', [$course->id]) }}"
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
