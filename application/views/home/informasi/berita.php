 <!-- ======= Breadcrumbs ======= -->
 <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?=base_url('front-end/');?>assets/img/redc.jpeg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Information</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Information</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2>Berita LIDO29</h2>
        <br>
        <div class="row gy-4 posts-list">

          <?php foreach ($berita as $b): ?>
          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">
              <div class="post-img position-relative overflow-hidden">
                <img src="<?= base_url('upload/img/berita/'.$b['image']); ?>" class="img-fluid" alt="">
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title"><?= $b['judul'];?></h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2"><?= $b['created_by'];?></span>
                  </div>
                  <span class="px-3 text-black-50">|</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-calendar"></i> <span class="ps-2"><?= date('d F Y ', $b['created_at']);?></span>
                  </div>
                </div>

                <p>
                <?= substr(strip_tags($b['isi_blog']), 0, 200);?>
                </p>

                <hr>

                <a href="<?= base_url('home/detail_information/'. $b['id']) ?>" class="readmore stretched-link"><span>Read More</span><i
                    class="bi bi-arrow-right"></i></a>

              </div>
            </div>
          </div>
          <?php endforeach; ?>

        </div><!-- End blog posts list -->

        <div class="blog-pagination">
          <ul class="justify-content-center">
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div><!-- End blog pagination -->

      </div>
    </section><!-- End Blog Section -->