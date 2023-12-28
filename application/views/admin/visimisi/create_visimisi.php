<div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
          <div class="viewport-header">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb has-arrow">
                <li class="breadcrumb-item">
                  <a href="#">Kelola Akun</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#">Kelola Akun</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Akun</li>
              </ol>
            </nav>
          </div>
          <div class="content-viewport">
            <div class="row">
              <div class="col equel-grid">
                <div class="grid">
                  <p class="grid-header">Tambah Admin </p>
                  <div class="grid-body">
                    <div class="item-wrapper">
                      <?php echo form_open_multipart('visimisi/add_visimisi'); ?>

                      <?php if (isset($error)) : ?>
				                <div class="invalid-feedback"><?= $error ?></div>
				              <?php endif; ?>

                    
                        <div class="form-group">
                            <label for="inputEmail1">Visi</label>
                            <textarea name="visi" id="visi" class="form-control" cols="30" rows="10"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail1">Misi</label>
                            <textarea name="misi" id="misi" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        
                    
                        <div class="form-group">
                          <label for="inputEmail1">Gambar</label>
                          <input type="file" name="image" class="form-control" id="inputEmail1" placeholder="Masukkan foto">
                        </div>
                       
                    <button type="submit" name="submit" class="btn btn-sm btn-primary">+ Tambah</button>
                    
                    <?php echo form_close(); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script src="<?php echo base_url();?>assets/plugins/ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace('visi');
  CKEDITOR.replace('misi');
</script>
