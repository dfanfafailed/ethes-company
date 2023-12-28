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
                <li class="breadcrumb-item active" aria-current="page">Direksi</li>
              </ol>
            </nav>
          </div>
          <div class="content-viewport">
            <div class="row">
              <div class="col equel-grid">
                <div class="grid">
                  <p class="grid-header">Tambah Data Direksi</p>
                  <div class="grid-body">
                    <div class="item-wrapper">
                      <form action="<?=base_url('direksi/add_direksi');?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="inputEmail1">Jabatan</label>
                          <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan">
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Nama Direksi</label>
                          <input type="text" class="form-control" name="nama_direksi" id="nama_direksi" placeholder="Nama Direksi">
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Alamat</label>
                          <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Email</label>
                          <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Telepon</label>
                          <input type="text" class="form-control" name="telepon" id="telepon" placeholder="Telepon">
                        </div>
                        <div class="form-group">
                          <label for="inputPassword1">Foto</label>
                          <input type="file" name="foto" class="form-control" id="foto" placeholder="Foto">
                        </div>
                        <button type="submit" class="btn btn-sm btn-success">+ Tambah</button>
                        <a href="<?=base_url('direksi');?>" class="btn btn-sm btn-danger">< Kembali</a>
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
