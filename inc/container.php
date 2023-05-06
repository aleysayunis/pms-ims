</head>
    <body class="sb-nav-fixed">
        <!-- header -->
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">PMS</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <!-- <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>0 -->
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="action.php?action=logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- layout -->
        <div id="layoutSidenav">
            <!-- sidebar -->
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="inventory-page.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                                Inventory
                            </a>
                            <a class="nav-link" href="customer.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Customer
                            </a>
                            <a class="nav-link" href="category.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-sliders"></i></div>
                                Category
                            </a>
                            <a class="nav-link" href="brand.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-signature"></i></div>
                                Brand
                            </a>
                            <!-- <a class="nav-link" href="supplier.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-truck"></i></div>
                                Supplier
                            </a> -->
                            <a class="nav-link" href="product.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-bag-shopping"></i></div>
                                Product
                            </a>
                            <a class="nav-link" href="purchase.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-credit-card"></i></div>
                                Purchase
                            </a>
                            <!-- <a class="nav-link" href="order.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-cart-shopping"></i></div>
                                Orders
                            </a> -->
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION['name']; ?>
                    </div>
                </nav>
            </div>
            <!-- content -->
            <div id="layoutSidenav_content">