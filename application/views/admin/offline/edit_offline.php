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
                <li class="breadcrumb-item active" aria-current="page">Offline Store</li>
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
                      <form action="<?php echo base_url('store/update/' . $store['id_store']); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="inputEmail1">Nama Offline Store</label>
                          <input type="text" class="form-control" value="<?=$store['nama_store'];?>" name="nama_store" id="nama_store" placeholder="Nama Store">
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Outlet</label>
                          <input type="text" class="form-control" value="<?=$store['outlet'];?>" name="outlet" id="outlet" placeholder="Outlet">
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Alamat Outlet</label>
                          <input type="text" class="form-control" value="<?=$store['alamat_outlet'];?>" name="alamat_outlet" id="alamat_outlet" placeholder="Alamat Outlet">
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Link ALamat Outlet</label>
                          <input type="text" class="form-control" value="<?=$store['link_alamat'];?>" name="link_alamat" id="link_alamat" placeholder="Alamat Store">
                        </div>
                        <div class="form-group">
                          <label for="inputPassword1">Gambar</label>
                          <input type="file" name="foto" class="form-control" id="foto" placeholder="Gambar"><br>
                          <img src="<?php echo base_url('upload/img/offline/'.$store['foto']); ?>" alt="Foto Outlet" width="150">
                        </div>
                        <button type="submit" class="btn btn-sm btn-success">+ Update</button>
                        <a href="<?=base_url('store');?>"  class="btn btn-sm btn-danger">< Kembali</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
