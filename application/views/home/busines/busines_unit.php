

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?=base_url('front-end/');?>assets/img/redc.jpeg');">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>Bisnis Unite</h2>
    <ol>
      <li><a href="<?=base_url('home');?>">Home</a></li>
      <li>Busines Profile</li>
    </ol>

  </div>
</div>


<section id="stats-counter" class="stats-counter section-bg">
  <div class="container">

  <div class=" section-header">
        <h2>Busines Unit</h2>
        <p>Badan Hukum Yang Dimiliki </p>
      </div>
    
    <div class="row gy-4">
    <?php foreach ($busines as $b): ?>
      <div class="card">
        <div class="stats-item d-flex align-items-center w-100 h-100">
          <div>
            <h6><?=$b['badan_hukum'];?></h6>
            <ul>
              <?=$b['bisnis'];?>
            </ul>
          </div>
        </div>
      </div>
      <?php endforeach;?>
    
  </div>
</section>


