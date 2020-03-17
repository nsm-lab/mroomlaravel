<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('dashboard') }}"><i class
                        ="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">Kamar</li><!-- /.menu-title -->
                <li class="">
                    <a href="{{ route('products.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Kamar</a>
                </li>
                <li class="">
                    <a href="{{ route('products.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Kamar</a>
                </li>

                <li class="menu-title">Foto Kamar</li><!-- /.menu-title -->
                <li class="">
                    <a href="{{ route('product-galleries.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Foto Kamar</a>
                </li>
                <li class="">
                    <a href="{{ route('product-galleries.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Foto Kamar</a>
                </li>

                <li class="menu-title">Transaksi</li><!-- /.menu-title -->
                <li class="">
                    <a href="{{ route('transactions.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Transaksi</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->
