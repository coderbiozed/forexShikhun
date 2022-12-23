
    <!---- searchnav -- -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
        <button class="btn btn-sidebar bg-info">
        <i class="fas fa-search fa-fw nav-icon"></i>
        </button>
        </div>
        </div>
    </div>
    <!-- need to remove -->


<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link cust_btn {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home c_blue"></i>
        <p>Home</p>
    </a>
</li>


<li class="nav-item">
    <a href=" {{route('blogs.index') }}" class="nav-link cust_btn {{ Request::is('blogs*') ? 'active' : '' }}">
        <i class="nav-icon fa fa-edit c_violet"></i>
        <p>Blogs</p>
    </a>
</li>

<li class=" nav-item">
    <a href="{{ route('courses.index') }}" class="nav-link cust_btn {{ Request::is('courses*') ? 'active' : '' }}">
        <i class="nav-icon fa fa-book-open c_green"></i>
        <p>Courses</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('Lessons.index') }}" class="nav-link cust_btn {{ Request::is('Lessons*') ? 'active' : '' }}">
        <i class="nav-icon fa fa-chalkboard c_orange"></i>
        <p> Lessons</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('videos.index') }}" class="nav-link cust_btn {{ Request::is('videos*') ? 'active' : '' }}">
        <i class="nav-icon fa fa-video c_dark_cy"></i>
        <p>Videos</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('subscribes.index') }}" class="nav-link cust_btn {{ Request::is('subscribes*') ? 'active' : '' }}">
        <i class="nav-icon fa fa-bell c_de_re"></i>
        <p>Subscribes
            <?php
            $subscriberall = DB::table('subscribe')->count(); 
            ?>
            <span class="badge badge-danger right">{{ $subscriberall}}</span>
        </p>
    </a>
</li>

{{-- <li class="nav-item">
    <a href="{{ route('abouts.index') }}"class="nav-link cust_btn {{ Request::is('abouts*') ? 'active' : '' }}">
        <i class="nav-icon fa fa-address-card c_pg_book"></i>
        <p>Abouts</p>
    </a>
</li> --}}

<li class="nav-item">
    <a href="{{ route('quotes.index') }}" class="nav-link cust_btn {{ Request::is('quotes*') ? 'active' : '' }}">
        <i class="nav-icon fa fa-quote-left c_pink"></i>
        <p>Quotes
            <?php
            $quoteall = DB::table('quote')->count(); 
            ?>
            <span class="badge bg-dark right ">{{  $quoteall }}</span>
        </p>
    </a>
</li>

{{-- <li class="{{ Request::is('faqcats*') ? 'active' : '' }}">
    <a href="{{ route('faqcats.index') }}"><i class="fa fa-edit"></i><span>Faqcats</span></a>
</li> --}}

{{-- <li class="nav-item">
    <a href="#" class="nav-link cust_btn  {{ Request::is('faqcats* && faqs*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-question text-info"></i>
        <p>
          FAQ's
          <?php
            $faqs = DB::table('faqs')->count(); 
            ?>
          <i class="fas fa-angle-left right"></i>
          <span class="badge badge-info right">{{$faqs}}</span>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item ">
            <a href="{{ route('faqcats.index') }}" class="nav-link {{ Request::is('faqcats*') ? 'active' : '' }}">
                <i class="nav-icon far fa-circle c_pink"></i>
                <p>Faq Category</p>
            </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('faqs.index') }}" class="nav-link  {{ Request::is('faqs*') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Faq's</p>
          </a>
        </li>
        </ul>
</li>    --}}


<li class="nav-item">
    <a href="{{ route('users') }}" class="nav-link cust_btn {{ Request::is('users*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-user-plus text-dark"></i>
        <p>Register
            <?php
            $user = DB::table('users')->count(); 
            ?>
            <span class="badge bg-dark right ">{{  $user }}</span>
        </p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('comments.index') }}" class="nav-link cust_btn {{ Request::is('comments*') ? 'active' : '' }}">
       <i class="nav-icon fa fa-comment  text-warning "></i>
        <p>Comments
            <?php
            $comments = DB::table('comments')->count(); 
            ?>
            <span class="badge bg-warning right">{{  $comments }}</span>
        </p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('allusers.index') }}" class="nav-link cust_btn {{ Request::is('allusers*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-user-plus text-white"></i>
        <p>All Member
            <?php
            $allusers = DB::table('member')->count(); 
            ?>
            <span class="badge bg-light right">{{  $allusers }}</span>
        </p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('reviews.index') }}" class="nav-link  cust_btn {{ Request::is('reviews*') ? 'active' : '' }}">
        <i class="fa fa-star nav-icon"></i>
        <p>Reviews</p>
    </a>
</li>

