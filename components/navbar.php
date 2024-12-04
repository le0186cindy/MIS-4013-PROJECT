<nav class="navbar navbar-nav-scroll navbar-expand-lg position-relative" style="background: #93C572;" data-bs-theme="dark">
    <div class="container-fluid">
         <!-- Left: Brand and Logo -->
         <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="https://smiski.com/e/wp-content/uploads/2016/03/top_logo.png" alt="logo" height="30" class="d-line-block align-text-top me-3">
        </a>

        <!-- TODO: make this collapse for mobile -->
        <!-- Centered: Links -->
         <div class="position-absolute start-50 translate-middle-x collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'products.php') ? 'active' : ''; ?>" href="products.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'page3.php') ? 'active' : ''; ?>" href="#">Store Locator</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'page4 .php') ? 'active' : ''; ?>" href="#">Contact us</a>
                </li>
            </ul>
         </div>

         <!-- Right: Icons-->
        <div class="d-flex align-items-center">
            <a href="#" class="text-decoration-none me-3">
                <i class="bi bi-search" style = "color:white;"></i> <!-- Search -->
            </a>
            <a href="#" class="text-decoration-none me-3">
                <i class="bi bi-cart" style = "color:white;"></i> <!-- Cart Icon -->
            </a>
            <a href="#" class="text-decoration-none">
                <i class="bi bi-person" style = "color:white;"></i> <!-- User Icon -->
            </a>
        </div>
    </div>
</nav>