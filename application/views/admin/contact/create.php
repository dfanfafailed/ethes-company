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
                  <p class="grid-header">Tambah Data Contact </p>
                  <div class="grid-body">
                    <div class="item-wrapper">
                      <?php echo form_open_multipart('Contact/store'); ?>

                        <?php if (isset($error)) : ?>
                          <div class="invalid-feedback"><?= $error ?></div>
                        <?php endif; ?>

                        <div class="form-group">
                            <label for="inputEmail1">Address</label>
                            <textarea class="form-control" name="address" id="address" cols="50" rows="10"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="inputEmail1">Email</label>
                            <input type="email" name="email_us"  class="form-control" id="inputEmail1" placeholder="Email">
                        </div>

                        <div class="form-group">
                          <label for="inputEmail1">Number Call</label>
                          <input type="text" name="number_call" class="form-control" id="inputEmail1" placeholder="Number Call">
                        </div>

                        <div class="form-group">
                          <label for="inputEmail1">Maps</label>
                          <input type="text" name="maps" class="form-control" id="inputEmail1" placeholder="Input in HTML">
                        </div>
                       
                        <button type="submit" name="submit" class="btn btn-sm btn-success">+ Tambah</button>
                        <a href="<?=base_url('contact');?>" name="submit" class="btn btn-sm btn-danger">< Kembali</a>
                        <?php echo form_close(); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

