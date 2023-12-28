 <!-- ======= Header ======= -->
 <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="<?=base_url('home');?>" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <?php foreach ($tampilan as $t):?>
        <img id="logo" src="<?= base_url('upload/img/tampilan/'.$t['logo']); ?>" >
        <h1><?=$t['logo_text'];?><span>.</span></h1>
        <?php endforeach;?>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?=base_url('home/');?>" class="active">Home</a></li>
          <li><a href="<?=base_url('home/about');?>">About</a></li>
          <li class="dropdown"><a href="<?=base_url('front-end/');?>#"><span>Busines Profile</span> <i
            class="bi bi-chevron-down dropdown-indicator"></i></a>
        <ul>
          <li><a href="<?=base_url('home/busines_unit');?>">Bisnis Unite</a></li>
          <li><a href="<?=base_url('home/store/');?>">Offline Store</a></li>
          <li><a href="<?=base_url('home/distributor/');?>">Distributor</a></li>
        </ul>
          <li><a href="<?=base_url('home/plan');?>">Our Plan</a></li>
          <li><a href="<?=base_url('home/information/');?>">Information</a></li>
          <li><a href="<?=base_url('home/contact/');?>">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->