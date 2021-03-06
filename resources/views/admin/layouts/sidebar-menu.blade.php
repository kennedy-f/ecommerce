<section>
  <!-- sidebar menu start -->
    <div class="sidebar-menu sticky-sidebar-menu">

        <!-- logo start -->
        <div class="logo">
            <h1><a href="index.html">Collective</a></h1>
        </div>

        <!-- if logo is image enable this -->
        <!-- image logo --
        <div class="logo">
            <a href="index.html">
            <img src="image-path" alt="Your logo" title="Your logo" class="img-fluid" style="height:35px;" />
            </a>
        </div>
        <!-- //image logo -->
        <div class="logo-icon text-center">
            <a href="index.html" title="logo"><img src="/images/logo.png" alt="logo-icon"> </a>
        </div>
        <!-- //logo end -->

        <div class="sidebar-menu-inner">

            <!-- sidebar nav start -->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="active">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span> Dashboard</span>
                    </a>
                </li>
                <li class="menu-list">
                    <a href="#">
                        <i class="fa fa-shopping-basket"></i>
                        <span>Produtos <i class="lnr lnr-chevron-right"></i></span>
                    </a>
                    <ul class="sub-menu-list">
                        <li><a href="cards.html">Estoque</a> </li>
                    </ul>
                </li>
                <li >
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span>Clientes</span>
                    </a>

                </li>
                <li class="menu-list">
                    <a href="#">
                        <i class="fas fa-receipt"></i>
                        <span>Pedido</span>
                    </a>
                </li>
                {{-- <li><a href="pricing.html"><i class="fa fa-table"></i> <span>Pricing tables</span></a></li>
                <li><a href="blocks.html"><i class="fa fa-th"></i> <span>Content blocks</span></a></li>
                <li><a href="forms.html"><i class="fa fa-file-text"></i> <span>Forms</span></a></li> --}}
            </ul>
                <!-- //sidebar nav end -->
                <!-- toggle button start -->
            <a class="toggle-btn">
                <i class="fas fa-angle-double-left menu-collapsed__left"><span>Collapse Sidebar</span></i>
                <i class="fas fa-angle-double-right menu-collapsed__right"></i>
            </a>
            <!-- //toggle button end -->
        </div>
    </div>
    <!-- //sidebar menu end -->
</section>
