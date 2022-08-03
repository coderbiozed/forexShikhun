<div class="table-responsive"> 
    
        <table class="table" id="Lessons-table">
            <thead>
            <tr>
                <th>Course Name</th>
            <th>Lesson No</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Short Description</th>
            <th>Description</th>
            
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($Lessons as $Lesson)
            @php $course = DB::table('course')->Where('id',  $Lesson->course_id)->first() @endphp
                <tr>
                    <td>{{ isset($course) ? $course->course_title : 'Rest of all' }}</td>
                    <td>{{ $Lesson->lesson_no }}</td>
                    <td>{{ $Lesson->title }}</td>
                    <td>{{ $Lesson->slug }}</td>
                    <td>{!! Str::limit(strip_tags($Lesson->short_des), 50) !!}</td>
                    <td>{!! Str::limit(strip_tags($Lesson->description), 50) !!}</td>
                    <td></td>
                    <td width="120">
                        {!! Form::open(['route' => ['Lessons.destroy', $Lesson->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('Lessons.show', [$Lesson->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('Lessons.edit', [$Lesson->id]) }}"
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
