<!-- ========== Left Sidebar Start ========== -->

<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->

            <div id="sidebar-menu">
                <!--- Sidemenu -->
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title" data-key="t-menu"><?php echo app('translator')->get('translation.Menu'); ?></li>

                    <li>
                        <a href="index">
                            <i data-feather="home"></i>
                            <span class="badge rounded-pill bg-soft-success text-success float-end">9+</span>
                            <span data-key="t-dashboard"><?php echo app('translator')->get('translation.Dashboards'); ?></span>
                        </a>
                    </li>

                    <li>
                        <a href="/produtoEstoque">
                            <i data-feather="home"></i>
                            <span class="badge rounded-pill bg-soft-success text-success float-end">+</span>
                            <span data-key="t-dashboard">Produtos</span>
                        </a>
                    </li>


                    <!-- Left Menu Start -->
                </ul>
                <!-- Sidebar -->
            </div>

    <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->

<?php /**PATH C:\xampp\htdocs\almo_go\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>