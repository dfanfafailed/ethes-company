<script src="<?= base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
          <div class="viewport-header">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb has-arrow">
                <li class="breadcrumb-item">
                  <a href="<?=base_url('admin');?>">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#">About</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Struktur Organisasi</li>
              </ol>
            </nav>
          </div>
          <div class="content-viewport">
            <div class="row">
              <div class="col equel-grid">
                <div class="grid">
                  <p class="grid-header">Tambah Data Organisasi</p>
                  <div class="grid-body">
                    <div class="item-wrapper">
                      <form action="<?=base_url('tampilan/add_tampilan');?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="inputEmail1">Text</label>
                          <input type="text" class="form-control" name="text" id="text" placeholder="Nama Struktur">
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Text</label>
                          <input type="text" class="form-control" name="sub_text" id="sub_text" placeholder="Nama Struktur">
                        </div>
                        <div class="form-group">
                          <label for="inputPassword1">Logo </label>
                          <input type="file" name="logo" class="form-control" id="logo" placeholder="image">
                        </div>
                        <div class="form-group">
                          <label for="inputPassword1">Logo Text</label>
                          <input type="text" name="logo_text" class="form-control" id="logo_text" placeholder="image">
                        </div>
                        <div class="form-group">
                          <label for="inputPassword1">Gambar</label>
                          <input type="file" name="background" class="form-control" id="image" placeholder="image">
                        </div>
                        <button type="submit" class="btn btn-sm btn-success">+ Tambah</button>
                        <a href="<?=base_url('organisasi');?>" class="btn btn-sm btn-danger">< Kembali</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
        <script>
          CKEDITOR.replace('isi_blog'); 
        </script>
