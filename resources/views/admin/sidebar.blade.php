<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/admin') }}">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Duacare</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li id="nav-dashboard" class="nav-item">
    <a class="nav-link" href="{{ url('/admin') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
    Databases
    </div>

    <!-- Nav Item - News -->
    <li id="nav-news" class="nav-item">
    <a class="nav-link" href="{{ url('/admin/news') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>Berita</span></a>
    </li>

    <!-- Nav Item - Organizer -->
    <li id="nav-organizer" class="nav-item">
    <a class="nav-link" href="{{ url('/admin/organizer') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>Organizer</span></a>
    </li>

    <!-- Nav Item - Event -->
    <li id="nav-event" class="nav-item">
    <a class="nav-link" href="{{ url('/admin/event') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>Acara</span></a>
    </li>

    <!-- Nav Item - Testimony -->
    <li id="nav-testimony" class="nav-item">
    <a class="nav-link" href="{{ url('/admin/testimony') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>Testimoni</span></a>
    </li>

    <!-- Nav Item - Slider -->
    <li id="nav-slider" class="nav-item">
    <a class="nav-link" href="{{ url('/admin/slider') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>Slider</span></a>
    </li>

    <!-- Nav Item - DLD -->
    <li id="nav-dld" class="nav-item">
    <a class="nav-link" href="{{ url('/admin/dld') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>DLD</span></a>
    </li>

    <!-- Nav Item - financial report -->
    <li id="nav-financialReport" class="nav-item">
    <a class="nav-link" href="{{ url('/admin/financial-report') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>Laporan Keuangan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</div>