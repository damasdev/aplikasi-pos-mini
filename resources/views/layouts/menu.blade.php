<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link c-active" href="{{ route('home') }}">
        <i class="c-sidebar-nav-icon cil-home"></i>Home
    </a>
</li>
<li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
    <a class="c-sidebar-nav-dropdown-toggle" href="#">
        <i class="c-sidebar-nav-icon cil-cart"></i> Transaksi
    </a>
    <ul class="c-sidebar-nav-dropdown-items">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('home') }}">
                <span class="c-sidebar-nav-icon"></span> Penjualan
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('home') }}">
                <span class="c-sidebar-nav-icon"></span> Pembelian
            </a>
        </li>
    </ul>
</li>
<li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
    <a class="c-sidebar-nav-dropdown-toggle" href="#">
        <i class="c-sidebar-nav-icon cil-chart"></i> Laporan
    </a>
    <ul class="c-sidebar-nav-dropdown-items">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('home') }}">
                <span class="c-sidebar-nav-icon"></span> Penjualan
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('home') }}">
                <span class="c-sidebar-nav-icon"></span> Pembelian
            </a>
        </li>
    </ul>
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
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{ route('user.index') }}">
                    <span class="c-sidebar-nav-icon"></span> User
                </a>
            </li>
        </ul>
    </li>
@endcan
