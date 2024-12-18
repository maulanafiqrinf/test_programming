<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item active">
            <a class="nav-link " href="{{ url('dashboard') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Modul</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Peserta</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Group Chat</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Pemateri</span>
            </a>
        </li>
        <hr class="divider">
        <p>Profile</p>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">setting</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Kalender</span>
            </a>
        </li>
        <hr class="divider">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" type="button" id="confirm-delete"> 
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>
    </ul>
</nav>