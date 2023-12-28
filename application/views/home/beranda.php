<section id="hero" class="hero">
  
  <div class="info d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        
      <?php foreach ($tampilan as $t):?>
        <div class="col-lg-6 text-center">
          <h2 data-aos="fade-down"><?=$t['text'];?></h2>
          <p data-aos="fade-up"><?=$t['sub_text'];?></p>
          <!-- <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a> -->
        </div>
        <?php endforeach;?>
      </div>
      
    </div>
    
  </div>
  
  <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    
    <?php foreach ($banner as $b) : ?>
    
  <div class="carousel-item active" style="background-image: url(<?= base_url('upload/img/banner/'.$b['image']); ?>)">
  </div>
  <?php endforeach; ?>
  
  
  
  
  <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
  </a>
  
  <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
  </a>
  
</div>

</section><!-- End Hero Section -->

<main id="main">


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row position-relative">
        <?php foreach ($tentang as $t) : ?>
          <div class="col-lg-7 about-img" style="background-image: url(<?= base_url('upload/img/tentang/'.$t['image']); ?>);"></div>

          <div class="col-lg-7">
            <h2>LIDO29</h2>
            <div class="our-story">
              <h3>Sejarah LIDO29</h3>
              <p><?=$t['tentang'];?>
              </p>
            </div>
          </div>

        </div>
        <?php endforeach;?>

      </div>
    </section>
    <!-- End About Section -->


  <section id="alt-services" class="alt-services">
        <div class="container" data-aos="fade-up">
  
        <?php foreach ($visimisi as $v) : ?>
          <div class="row justify-content-around gy-4">
            <div class="col-lg-6 img-bg" style="background-image: url(<?= base_url('upload/img/visi_misi/'.$v['image']); ?>);" data-aos="zoom-in"
              data-aos-delay="100"></div>
  
            <div class="col-lg-5 d-flex flex-column justify-content-center">
              <h3>Visi dan Misi LIDO29</h3>
              <h5>Visi</h5>
              <p><?=$v['visi'];?></p>
  
              <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">            
                <div>
                  <h5>Misi</h5>
                  <p><?=$v['misi'];?></p>
                  
                </div>
              </div><!-- End Icon Box -->
              <?php endforeach;?>
      </section><!-- End Alt Services Section -->


      <section id="alt-services-2" class="alt-services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Budaya Kami</h3>
            
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h6>LINCAH ( AGILE AND INNOVATIVE )</h6>
                <p>Kami bergerak mengikuti perubahan perilaku konsumen dan terus berproses menciptakan nilai kreasi untuk pelanggan. </p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h6>INTEGRITAS ( COMMITMENT, DUTY AND HONESTY )</h6>
                <p>Kami menjaga komitmen untuk melaksanakan pekerjaan dengan cara yang jujur hingga menghasilkan hasil kerja yang memuaskan bagi pelanggan.
                </p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h6>DEMOKRATIS ( FREE TO HAVE OPINION )</h6>
                <p>Kami dengan cara berpikir, bersikap,dan bertindak yang menilai sama hak dan kewajiban untuk diri kami dan orang lain.
                </p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-command flex-shrink-0"></i>
              <div>
                <h6>OPEN ( OPENNESS IN MIND AND LEARNING )</h6>
                <p>Kami sebagai individu yang berakhlak mampu belajar dan bertumbuh sesuai dengan nada dan irama bisnis yang dijalankan.
                </p>
              </div>
            </div><!-- End Icon Box -->
          </div>

          <div class="col-lg-6 img-bg" style="background-image: url(assets/img/alt-services-2.jpg);" data-aos="zoom-in"
            data-aos-delay="100"></div>
        </div>

      </div>
    </section><!-- End Alt Services Section 2 -->

    <section id="stats-counter" class="stats-counter ">
      <div class="container">
        
        <div class="row">

          <div class="col-auto">
            <div class="stats-item d-flex align-items-center  ">
              <i class="bi bi-database color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Jumlah Employee</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-auto">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Bisnis Unit</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-auto">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-headset color-green flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="146" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Offline Store</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-auto">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>SKU Brants</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-auto">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-box-arrow-in-down"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Total Supplier</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section>
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
          <div class="container" data-aos="fade-up">

            <div class="section-header">
              <h2>KUALITAS & PELAYANAN PELANGGAN</h2>
              <p>CUSTOMER IS KING</p>
              <p2>4R</p2>
            </div>

            <div class="slides-2 swiper">
              <div class="swiper-wrapper">



              <?php
                  foreach ($services as $service ) :    
                ?>
                <div class="swiper-slide">
                  <div class="testimonial-wrap">
                    <div class="testimonial-item">
                      <img src="<?= base_url('upload/img/'.$service['foto']); ?>" class="testimonial-img" alt="Foto Layanan" style="width: 100px;">
                      <h3><?php echo $service['nama_layanan']; ?></h3>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <?php echo $service['deskripsi_layanan']; ?>
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

          <section id="recent-blog-posts" class="recent-blog-posts">
      <div class="container" data-aos="fade-up"">

    
    
  <div class=" section-header">
        <h2>Recent Blog Posts</h2>
        <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
      </div>

      <div class="row gy-5">

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
              <span class="post-date">December 12</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                </div>
              </div>

              <hr>

              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                  class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post item -->

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
              <span class="post-date">July 17</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                </div>
              </div>

              <hr>

              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                  class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post item -->

        <div class="col-xl-4 col-md-6">
          <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

            <div class="post-img position-relative overflow-hidden">
              <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
              <span class="post-date">September 05</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                </div>
              </div>

              <hr>

              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                  class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post item -->

      </div>

      </div>
    </section>
    <!-- End Recent Blog Posts Section -->


