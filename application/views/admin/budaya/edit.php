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
                <li class="breadcrumb-item active" aria-current="page">Budaya</li>
              </ol>
            </nav>
          </div>
          <div class="content-viewport">
            <div class="row">
              <div class="col equel-grid">
                <div class="grid">
                  <p class="grid-header">Edit Data Offline Store</p>
                  <div class="grid-body">
                    <div class="item-wrapper">
                      <form action="<?php echo base_url('budaya/update/' . $budaya['id']); ?>" method="POST" enctype="multipart/form-data">
                        
                        <div class="form-group">
                          <label for="inputEmail1">Budaya</label>
                          <input type="text" class="form-control" value="<?=$budaya['budaya'];?>" name="budaya" id="budaya" placeholder="Budaya">
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Keterangan</label>
                          <input type="text" class="form-control" value="<?=$budaya['keterangan'];?>" name="keterangan" id="keterangan" placeholder="Keterangan">
                        </div>
                        <div class="form-group">
                          <label for="inputPassword1">Image</label>
                          <input type="file" name="image" class="form-control" id="image" placeholder=""><br>
                          <img src="<?php echo base_url('upload/img/budaya/' . $budaya['image']); ?>" alt="image" width="150">
                        </div>
                        <button type="submit" class="btn btn-sm btn-success">+ Update</button>
                        <a href="<?=base_url('service');?>"  class="btn btn-sm btn-danger">< Kembali</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
