  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Blog Details</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Blog Details</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container " data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5 justify-content-center">

          <div class="col-lg-8">

       
            <article class="blog-details ">

              <div class="post-img">
                <img src="<?= base_url('/upload/img/berita/'.$berita['image']); ?>" alt="" class="img-fluid">
              </div>

              <h2 class="title"><?=$berita['judul'];?></h2>

              <div class="meta-top ">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html"><?=$berita['created_by'];?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time
                        datetime="2020-01-01"></time><?= date('l, d F Y ', $berita['created_at']);?></a></li>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12
                      Comments</a></li> -->
                </ul>
              </div><!-- End meta top -->

              <div class="content">
              <?=$berita['isi_blog'];?>

              </div><!-- End post content -->

              <!-- <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Business</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div>End meta bottom -->

            </article>
              
            
            </div><!-- End Blog Sidebar -->

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->