<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link c-active" href="{{ route('home') }}">
        <i class="c-sidebar-nav-icon cil-home"></i>Home
    </a>
</li>
@can('admin')
    <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
        <a class="c-sidebar-nav-dropdown-toggle" href="#">
            <i class="c-sidebar-nav-icon cil-settings"></i> Master Data
        </a>
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{ route('pelanggan.index') }}">
                    <span class="c-sidebar-nav-icon"></span> Pelanggan
                </a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{ route('suplier.index') }}">
                    <span class="c-sidebar-nav-icon"></span> Suplier
                </a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{ route('produk.index') }}">
                    <span class="c-sidebar-nav-icon"></span> Produk
                </a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{ route('kategori.index') }}">
                    <span class="c-sidebar-nav-icon"></span> Kategori
                </a>
            </li>
        </ul>
    </li>
@endcan
