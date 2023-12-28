<div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
          <div class="viewport-header">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb has-arrow">
                <li class="breadcrumb-item">
                  <a href="<?=base_url('admin');?>">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#">Halaman Beranda</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Service</li>
              </ol>
            </nav>
          </div>
          <div class="content-viewport">
            <div class="row">
              <div class="col equel-grid">
                <div class="grid">
                  <p class="grid-header">Tambah Data Pelayanan </p>
                  <div class="grid-body">
                    <div class="item-wrapper">
                      <?php echo form_open_multipart('Service/add_service'); ?>

                      <?php if (isset($error)) : ?>
				                <div class="invalid-feedback"><?= $error ?></div>
				              <?php endif; ?>

                        <div class="form-group">
                            <label for="inputEmail1">Nama Layanan</label>
                            <input type="text" name="nama_layanan" class="form-control" id="inputEmail1" placeholder="Nama Layanan">
                        </div>
                        
                        <div class="form-group">
                            <label for="inputEmail1">Deskripsi Layanan</label>
                            <input type="text" name="deskripsi_layanan"  class="form-control" id="inputEmail1" placeholder="Deskripsi Layanan">
                        </div>

                        <div class="form-group">
                          <label for="inputEmail1">Gambar</label>
                          <input type="file" name="foto" class="form-control" id="inputEmail1" placeholder="Gambar">
                        </div>
                       
                    <button type="submit" name="submit" class="btn btn-sm btn-success">+ Tambah</button>
                    <a href="<?=base_url('service');?>" name="submit" class="btn btn-sm btn-danger">< Kembali</a>
                    
                    <?php echo form_close(); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

