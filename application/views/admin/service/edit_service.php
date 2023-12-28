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
                  <p class="grid-header">Edit Data Offline Store</p>
                  <div class="grid-body">
                    <div class="item-wrapper">
                      <form action="<?php echo base_url('service/update/' . $service['id_service']); ?>" method="POST" enctype="multipart/form-data">
                        
                        <div class="form-group">
                          <label for="inputEmail1">Nama Layanan</label>
                          <input type="text" class="form-control" value="<?=$service['nama_layanan'];?>" name="nama_layanan" id="nama_layanan" placeholder="Nama Store">
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Deskripsi Layanan</label>
                          <input type="text" class="form-control" value="<?=$service['deskripsi_layanan'];?>" name="deskripsi_layanan" id="deskripsi_layanan" placeholder="deskripsi_layanan">
                        </div>
                        <div class="form-group">
                          <label for="inputPassword1">Gambar</label>
                          <input type="file" name="foto" class="form-control" id="foto" placeholder="Gambar"><br>
                          <img src="<?php echo base_url('upload/img/'.$service['foto']); ?>" alt="Foto Pelayanan" width="150">
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
