<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:ztk@ztkig.pl">ztk@ztkig.pl</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4" href="tel:+48 606 368 161"><span>+48 606 368 161</span></i>
      
      </div>
     
    </div>
  </section>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="container">
        <a class="navbar-brand" href="<?php echo BASE_URL . '/index.php' ?>">
          <img src="assets/img/ztkig/logo.png" alt="" width="300" height="50">
        </a>
      </div>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="index.php">Start</a></li>
          <li><a class="nav-link " href="statut.php">Statut</a></li>
          <li><a class="nav-link " href="organy.php">Organy</a></li>
          <li><a class="nav-link " href="szkolenia.php">Szkolenia</a></li>
          <li><a class="nav-link " href="#">Aktualności</a></li>   
          
          <li><a class="nav-link " href="#">Kontakt</a></li>
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

<header>
    <a href="<?php echo BASE_URL . '/index.php' ?>" class="logo">
      <h1 class="logo-text"><span>Awa</span>Inspires</h1>
    </a>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
      <li><a href="<?php echo BASE_URL . '/index.php' ?>">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>

      <?php if (isset($_SESSION['id'])): ?>
        <li>
          <a href="#">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['username']; ?>
            <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
          </a>
          <ul>
            <?php if($_SESSION['admin']): ?>
              <li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Dashboard</a></li>
            <?php endif; ?>
            <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Logout</a></li>
          </ul>
        </li>
      <?php else: ?>
        <li><a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></li>
        <li><a href="<?php echo BASE_URL . '/login.php' ?>">Login</a></li>
      <?php endif; ?>
    </ul>
</header>