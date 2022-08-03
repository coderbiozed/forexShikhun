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
        <i class="nav-icon fa fa-edit c_orange"></i>
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
            <span class="badge badge-danger right">2</span>
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('abouts.index') }}"class="nav-link cust_btn {{ Request::is('abouts*') ? 'active' : '' }}">
        <i class="nav-icon fa fa-address-card c_pg_book"></i>
        <p>Abouts</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('quotes.index') }}" class="nav-link cust_btn {{ Request::is('quotes*') ? 'active' : '' }}">
        <i class="nav-icon fa fa-edit c_pink"></i>
        <p>Quotes
            {{-- <span class="badge badge-info right">6</span> --}}
        </p>
    </a>
</li>

{{-- <li class="{{ Request::is('faqcats*') ? 'active' : '' }}">
    <a href="{{ route('faqcats.index') }}"><i class="fa fa-edit"></i><span>Faqcats</span></a>
</li> --}}

<li class="nav-item menu-open">
    <a href="#" class="nav-link cust_btn  {{ Request::is('faqcats* && faqs*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-question"></i>
        <p>
          FAQ's
          <i class="fas fa-angle-left right"></i>
          <span class="badge badge-info right">6</span>
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
</li>

{{-- <li class="{{ Request::is('faqs*') ? 'active' : '' }}">
    <a href="{{ route('faqs.index') }}"><i class="fa fa-edit"></i><span>Faqs</span></a>
</li> --}}
