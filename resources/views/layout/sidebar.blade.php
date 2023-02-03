<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>
        <li class="sidebar-item  ">
            <a href="/dashboard" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        @if (auth()->user()->role == 'admin')
            <li class="sidebar-item  ">
                <a href="/admin/users" class='sidebar-link'>
                    <i class="bi bi-person-badge-fill"></i>
                    <span>Pegawai</span>
                </a>
            </li>
        @endif
        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-basket-fill"></i>
                <span>Menu</span>
            </a>
            <ul class="submenu">
                <li class="submenu-item ">
                    <a href="/menu">Menu</a>
                </li>
                <li class="submenu-item ">
                    <a href="/jenismenu">Jenis Menu</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Pembayaran</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="/pembayaran">Pembayaran</a>
                </li>
                <li class="submenu-item ">
                    <a href="/detailpembayaran">Detail Pembayaran</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-title">Autentikasi</li>
        <li class="sidebar-item  ">
            <a href="/logout" class='sidebar-link'>
                <i class="bi bi-x-octagon-fill"></i>
                <span>Keluar</span>
            </a>
        </li>
    </ul>
</div>
