<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <a href="<?= base_url(); ?>" class="navbar-brand">
        <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Kider</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto">
            <a href="<?= base_url(); ?>" class="nav-item nav-link <?= (isset($current_page) && $current_page == 'home') ? 'active' : ''; ?>">Home</a>
            <a href="<?= base_url('about'); ?>" class="nav-item nav-link <?= (isset($current_page) && $current_page == 'about') ? 'active' : ''; ?>">About Us</a>
            <a href="<?= base_url('classes'); ?>" class="nav-item nav-link <?= (isset($current_page) && $current_page == 'classes') ? 'active' : ''; ?>">Classes</a>
            
            <a href="<?= base_url('contact'); ?>" class="nav-item nav-link <?= (isset($current_page) && $current_page == 'contact') ? 'active' : ''; ?>">Contact Us</a>
        </div>
        <a href="#" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Join Us<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->