<ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex flex-column align-items-center justify-content-center mt-5" href="{{route('backend.index')}}">
        <div class="sidebar-brand-icon">
            <img src="{{asset('assets/img/logo_st_margaret.png')}}" alt="logo" width="70px" height="70px">
        </div>
        <div class="sidebar-brand-text mt-3 text-center" style="font-size: 1rem">Hospice of St. Margaret of Cortona, Inc.</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0 mt-5">

    <!-- Nav Item - About Us -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('about-us.index') }}">
            <i class="fas fa-address-book"></i>
            <span>About Us</span></a>
    </li>

    <!-- Nav Item - What We Do (View Album) -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-image"></i>
            <span>What We Do</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('whatwedo.index') }}">View Albums</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Services -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('program.index') }}">
            <i class="fas fa-hand-holding-heart"></i>
            <span>Programs & Services</span></a>
    </li>
    <!-- Nav Item - Org Chart -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('organization.index') }}">
            <i class="fas fa-hand-holding-heart"></i>
            <span>Organizational Chart</span></a>
    </li>
    <!-- Nav Item - Calendar of Activities -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('calendar.index') }}">
            <i class="far fa-calendar-alt"></i>
            <span>Calendar of Activities</span></a>
    </li>
    <!-- Nav Item - Contacts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('contact.index') }}">
            <i class="far fa-address-book"></i>
            <span>Contacts</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
