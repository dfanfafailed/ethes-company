<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?=base_url('front-end/');?>assets/img/redc.jpeg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Our Plan</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Our Plan</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>KUALITAS & PELAYANAN PELANGGAN</h2>
          <p>CUSTOMER IS KING</p>
          <p2>4R</p2>
        </div>

        <div class="slides-2 swiper">
          <div class="swiper-wrapper">
          <?php foreach ($services as $s): ?>
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="<?= base_url('upload/img/'.$s['foto']); ?>" class="testimonial-img" alt="">
                  <h3><?=$s['nama_layanan'];?></h3>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <?=$s['deskripsi_layanan'];?>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <?php endforeach; ?>

            

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    
    <!-- ======= Blog Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

      <div class=" section-header">
        <h2>Plan Pertumbuhan</h2>
        <p>Rencana Pertumbuhan & Perkembangan</p>
      </div>
    
        <section class="timeline">
          <ol>
            <?php foreach ($plan as $p): ?>
            <li>
              <div>
            <time><?=$p['tahun'];?></time><?=$p['rencana'];?>
          </div>
        </li>
        
        <?php endforeach;?>
        <li></li>
      </ol>
      
      <div class="arrows">
        <button class="arrow arrow__prev disabled" disabled>
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/arrow_prev.svg" alt="prev timeline arrow">
        </button>
        <button class="arrow arrow__next">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/arrow_next.svg" alt="next timeline arrow">
        </button>
      </div>
    </div>
  </section>