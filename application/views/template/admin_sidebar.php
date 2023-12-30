<div class="page-body">
      <!-- partial:partials/_sidebar.html -->
      <div class="sidebar">
        <div class="user-profile">
          <div class="display-avatar animated-avatar">
            <img class="profile-img img-lg rounded-circle" src="<?= base_url('back-end/assets/images/profile/female/') . $user['gambar']; ?>" alt="profile image">
          </div>
          <div class="info-wrapper">
            <p class="user-name"></p>
            <a href="" class="user-name"><?= $user ['nama']; ?></a>
            <p class="display-income"><?= $keterangan;?></p>
          </div>
        </div>
        <ul class="navigation-menu">
          <li class="nav-category-divider">MAIN</li>
          <li>
            <a href="<?= BASEURL?>admin">
              <span class="link-title">Dashboard</span>
              <i class="mdi mdi-gauge link-icon"></i>
            </a>
          </li>
         

          <li>
            <a href="#ui-elements" data-toggle="collapse" aria-expanded="false">
              <span class="link-title">Halaman Beranda</span>
              <i class="mdi mdi-view-dashboard link-icon"></i>
            </a>
            <ul class="collapse navigation-submenu" id="ui-elements">
              <li>
                <a href="<?=base_url('tentang');?>">Tentang</a>
              </li>
              <li>
                <a href="<?=base_url('visimisi');?>">Visi dan Misi</a>
              </li>
              <li>
                <a href="<?=base_url('budaya');?>">Budaya</a>
              </li>
            
              
            </ul>
          </li>

          <li>
            <a href="#busines-profil" data-toggle="collapse" aria-expanded="false">
              <span class="link-title">Business Profil</span>
              <i class="mdi mdi-domain link-icon"></i>
            </a>
            <ul class="collapse navigation-submenu" id="busines-profil">
              <li>
                <a href="<?= base_url('busines')?>" >Business Unite</a>
              </li>
              <li>
                <a href="<?= base_url('store')?>">Offline Store</a>
              </li>
              <li>
                <a href="<?= base_url('distributor')?>">Distributor</a>
              </li>
            </ul>
          </li>

          <li>
            <a href="#about" data-toggle="collapse" aria-expanded="false">
              <span class="link-title">About</span>
              <i class="mdi mdi-domain link-icon"></i>
            </a>
            <ul class="collapse navigation-submenu" id="about">
              <li>
                <a href="<?=base_url('sejarah');?>">Sejarah</a>
              </li>
              <li>
                <a href="<?= base_url('komisaris')?>" >Dewan Komisaris</a>
              </li>
              <li>
                <a href="<?= base_url('direksi')?>" >Direksi</a>
              </li>
              <li>
                <a href="<?= base_url('grup')?>">Struktur Grup</a>
              </li>
              <li>
                <a href="<?= base_url('organisasi')?>">Struktur organisasi</a>
              </li>
            </ul>
          </li>

          <li>
            <a href="#OurPlan" data-toggle="collapse" aria-expanded="false">
              <span class="link-title">OurPlan</span>
              <i class="mdi mdi-domain link-icon"></i>
            </a>
            <ul class="collapse navigation-submenu" id="OurPlan">
              <li>
                <a href="<?= base_url('service')?>">Service</a>
              </li>
              <li>
                <a href="<?= base_url('plan')?>">Plan Pertumbuhan</a>
              </li> 
            </ul>
          </li>
         
          <li>
            <a href="<?= base_url('berita') ;?>">
              <span class="link-title">Berita</span>
              <i class="mdi mdi-newspaper link-icon"></i>
            </a>
          </li>
          <li>
            <a href="<?= base_url('contact') ;?>">
              <span class="link-title">Contact</span>
              <i class="mdi mdi-newspaper link-icon"></i>
            </a>
          </li>
          <li>
            <a href="<?= base_url('comment') ;?>">
              <span class="link-title">Comment</span>
              <i class="mdi mdi-newspaper link-icon"></i>
            </a>
          </li>
          <li class="nav-category-divider">TAMPILAN</li>
          <li>
            <a href="#Tampilan" data-toggle="collapse" aria-expanded="false">
              <span class="link-title">Tampilan</span>
              <i class="mdi mdi-domain link-icon"></i>
            </a>
            <ul class="collapse navigation-submenu" id="Tampilan">
            <li>
                <a href="<?=base_url('banner');?>">Banner Image</a>
              </li>
              <li>
                <a href="<?= base_url('plan')?>">Plan Pertumbuhan</a>
              </li> 
            </ul>
          </li>

          <li class="nav-category-divider">WEBSITE</li>
          <li>
            <a href="<?=base_url('home');?>" target="_blank">
              <span class="link-title">Kunjungi Website</span>
              <i class="mdi mdi-web link-icon"></i>
            </a>
          </li>
        </ul>
        <div class="sidebar-upgrade-banner">
        <a href="#" class="btn btn-danger text-center" id="logoutButton" data-toggle="modal" data-target="#logoutModal"><i class="mdi mdi-logout link-icon"></i>Logout</a>
        </div>

        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin logout?
            </div>
            <div class="modal-footer">
                <button  type="button"  class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a href="<?=base_url('auth/logout');?>" type="button" class="btn btn-primary" id="confirmLogout">Ya</a>
            </div>
        </div>
    </div>
</div>
      </div>


<script>
    document.getElementById('confirmLogout').addEventListener('click', function() {
        // Logika logout di sini (misalnya, redirect atau panggil fungsi logout)
        // Setelah logout, Anda dapat mengarahkan pengguna ke halaman login atau halaman lainnya.
        alert('Logout berhasil');
    });
</script>
