<div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
          <div class="viewport-header">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb has-arrow">
                <li class="breadcrumb-item">
                  <a href="<?=base_url('admin');?>">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#">Bussines Profil</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Form Elements</li>
              </ol>
            </nav>
          </div>
          <div class="content-viewport">
            <div class="row">
              <div class="col equel-grid">
                <div class="grid">
                  <p class="grid-header">Edit Data Distributor</p>
                  <div class="grid-body">
                    <div class="item-wrapper">
                      <form action="<?php echo base_url('berita/update/' . $berita['id']); ?>" method="POST" enctype="multipart/form-data">
                       
                        <div class="form-group">
                          <label for="inputEmail1">Judul</label>
                          <input type="text" class="form-control" name="judul" value="<?=$berita['judul'];?>" id="Badan Hukum" >
                        </div>

                        <div class="form-group">
                            <label for="inputEmail1">isi_blog</label>
                            <textarea name="isi_blog" id="isi_blog" class="form-control" cols="30" rows="10"><?=$berita['isi_blog'];?></textarea>
                        </div>
                      
                        <div class="form-group">
                          <label for="inputEmail1">Judul</label>
                          <input type="text" class="form-control" name="created_by" value="<?=$berita['created_by'];?>" id="Badan Hukum" >
                        </div>

                        <div class="form-group">
                          <label for="inputPassword1">Gambar</label>
                          <input type="file" name="image" class="form-control" id="image" placeholder="Gambar" value="<?= $berita['image'];?>"><br>
                          <img src="<?= base_url('/upload/img/berita/'.$berita['image']); ?>" alt="berita" width="150">
                        </div>
                       
                        <button type="submit" class="btn btn-sm btn-success">+ Update</button>
                        <a href="<?=base_url('berita');?>" class="btn btn-sm btn-danger">< Kembali</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <script src="<?php echo base_url();?>assets/plugins/ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace('isi_blog');
</script>