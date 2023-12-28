<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/redc.jpeg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Struktur Organisasi</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Struktur Organisasi</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <?php foreach ($sejarah as $s) : ?>
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row position-relative">

          <div class="col-lg-7 about-img" style="background-image: url(<?= base_url('upload/img/sejarah/'.$s['image']); ?>"></div>

          <div class="col-lg-7">
            <h2>LIDO29</h2>
            <div class="our-story">
              <h3>Sejarah LIDO29</h3>
              <p><?=$s['sejarah'];?>
              </p>
            </div>
          </div>
          
        </div>
        
      </div>
    </section>
    <?php endforeach;?>
    <!-- End About Section -->

    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Projects</h2>
          <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto
            accusamus fugit aut qui distinctio</p>
        </div>


        <div class="portfolio-isotope" data-portfolio-filter=".filter-dewan" data-portfolio-layout="masonry"
          data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <!-- <li data-filter="*" class="filter-active">All</li> -->
            <li data-filter=".filter-dewan" class="filter-active">Dewan Komisaris</li>
            <li data-filter=".filter-direksi">Direksi</li>
            <li data-filter=".filter-grup">Struktur Grup</li>
            <li data-filter=".filter-struktur">Struktur Organisasi</li>
          </ul><!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <?php foreach ($organisasi as $o): ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-struktur">
              <div class="portfolio-content h-100">
                <img src="<?= base_url('upload/img/organisasi/'.$o['image']); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="<?=base_url('front-end/');?>assets/img/projects/struktur.png" title=""
                    data-gallery="portfolio-gallery-struktur" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->
            <?php endforeach; ?>

            <?php foreach ($grup as $g): ?>
            <div class="col-md-12 portfolio-item filter-grup">
              <div class="portfolio-content h-100">
                <img src="<?= base_url('upload/img/grup/'.$g['image']); ?>" class="img-fluid" alt="">
                <div class="portfolio-info" >
                  <a href="<?= base_url('upload/img/grup/'.$g['image']); ?>" title="<?=$g['keterangan'];?>"
                    data-gallery="portfolio-gallery-struktur" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->
            <?php endforeach; ?>

            <?php foreach ($komisaris as $k) : ?>
          <div class="col-lg-4 col-md-4 portfolio-item filter-dewan">
            <div class="portfolio-content h-20">
              <div class="card-item">
                <div class="row">
                  <div class="col-xl-12">
                    <div class="card-bg" style="background-image: url(<?= base_url('upload/img/komisaris/'.$k['image']); ?>);"></div>
                  </div>
                  <div class="col-xl-12 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title">Dewan Komisaris</h4>
                      <table>
                        <tr>
                            <th>Nama</th>
                            <td><?=$k['nama_komisaris'];?></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td><?=$k['alamat'];?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?=$k['email'];?></td>
                        </tr>
                        <tr>
                            <th>Telepon</th>
                            <td><?=$k['telepon'];?></td>
                        </tr>
                    </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Projects Item --> 
          <?php endforeach; ?>

          <?php foreach ($direksi as $d) : ?>
          <div class="col-lg-4 col-md-4 portfolio-item filter-direksi">
            <div class="portfolio-content h-20">
              <div class="card-item">
                <div class="row">
                  <div class="col-xl-12">
                    <div class="card-bg" style="background-image: url(<?= base_url('upload/img/direksi/'.$d['foto']); ?>);"></div>
                  </div>
                  <div class="col-xl-12 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title"><?=$d['jabatan'];?></h4>
                      <table>
                        <tr>
                            <th>Nama</th>
                            <td><?=$d['nama_direksi'];?></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td><?=$d['alamat'];?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?=$d['email'];?></td>
                        </tr>
                        <tr>
                            <th>Telepon</th>
                            <td><?=$d['telepon'];?></td>
                        </tr>
                    </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Projects Item -->
          <?php endforeach; ?>
          
  
          </div><!-- End Projects Container -->
        </div>  
        </div>

      </div>
    </section><!-- End Our Projects Section -->