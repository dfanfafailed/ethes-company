 <!-- ======= Breadcrumbs ======= -->
 <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?=base_url('front-end/');?>assets/img/redc.jpeg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Distributor</h2>
        <ol>
          <li><a href="<?=base_url('home');?>">Home</a></li>
          <li>Busines Profile</li>
        </ol>

      </div>
    </div>

    <section id="projects" class="projects">
    <div class="container" data-aos="fade-up">

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
        data-portfolio-sort="original-order">

       <div class=" section-header">
        <h2>Distributor Brand Principal</h2>
        <p>Mengoptimalkan Distribusi untuk Brand Unggul</p>
      </div>


        <br>
        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <?php foreach ($distributor as $d) : ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
            <div class="portfolio-content h-100">
              <img src="<?= base_url('upload/img/distributor/'.$d['image']); ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?=$d['distributor'];?></h4>
                <p><?=$d['produk'];?></p>
                <a href="<?= base_url('upload/img/distributor/'.$d['image']); ?>" title="<?=$d['tittle'];?>"
                  data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="<?=$d['link'];?>" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div>
            
        </div><!-- End Projects Item -->
        <?php endforeach; ?>
        </div>
      </div>
    </div>
    </section>
    