<div class="table-responsive">
    <table class="table" id="abouts-table">
        <thead>
        <tr>
            <th>Hero Title</th>
        <th>Hero Des</th>
        <th>Hero Des Small</th>
        <th>Round First</th>
        <th>Round Second</th>
        <th>Round Third</th>
        <th>Sec Card Desc One</th>
        <th>Sec Card Desc Two</th>
        <th>Sec Card Desc Three</th>
        <th>Sec Card Desc Four</th>
        <th>Sec Title</th>
        <th>Sec Des</th>
        <th>Sec Des Small</th>
       
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($abouts as $about)
            <tr>
                <td>{{ $about->hero_title }}</td>
            <td>{!! Str::limit(strip_tags($about->hero_des), 50) !!}</td>
            <td>{!! Str::limit(strip_tags( $about->hero_des_small), 50) !!}</td>
            <td>{{ $about->round_first }}</td>
            <td>{{ $about->round_second }}</td>
            <td>{{ $about->round_third }}</td>
            <td>{!! Str::limit(strip_tags($about->sec_card_desc_one ), 50) !!}</td>
            <td>{!! Str::limit(strip_tags($about->sec_card_desc_two), 50) !!}</td>
            <td>{!! Str::limit(strip_tags($about->sec_card_desc_three), 50) !!}</td>
            <td>{!! Str::limit(strip_tags($about->sec_card_desc_four), 50) !!}</td>
           <td>{!! Str::limit(strip_tags($about->sec_title), 50) !!}</td>
            <td>{!! Str::limit(strip_tags($about->sec_des), 50) !!}</td>
            <td>{!! Str::limit(strip_tags($about->sec_des_small), 50) !!}</td>
            
            {{-- <td>{!! Str::limit(strip_tags( $about->quate_title), 50) !!}</td>
            <td>{!! Str::limit(strip_tags($about->quate_des), 50) !!}</td>
            <td>{{ $about->author_name }}</td> --}}
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('abouts.show', [$about->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('abouts.edit', [$about->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                      
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
