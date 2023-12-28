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
                      <form action="<?php echo base_url('distributor/update/' . $distributor['id_distributor']); ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="id_distributor" value="<?=$distributor['id_distributor'];?>" id="id_distributor"  >
                        <div class="form-group">
                          <label for="inputEmail1">Distributor</label>
                          <input type="text" class="form-control" name="distributor" value="<?=$distributor['distributor'];?>" id="distributor" >
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Produk</label>
                          <input type="text" class="form-control" name="produk" id="produk" value="<?=$distributor['produk'];?>" >
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Keterangan</label>
                          <input type="text" class="form-control" name="tittle" id="tittle" value="<?=$distributor['tittle'];?>" >
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Website</label>
                          <input type="text" class="form-control" name="link" id="link" value="<?=$distributor['link'];?>" >
                        </div>
                        <div class="form-group">
                          <label for="inputPassword1">Gambar</label>
                          <input type="file" name="image" class="form-control" id="image" placeholder="Gambar" value="<?= $distributor['image'];?>"><br>
                          <img src="<?= base_url('/upload/img/distributor/'.$distributor['image']); ?>" alt="Foto Produk" width="150">
                        </div>
                        <button type="submit" class="btn btn-sm btn-success">+ Update</button>
                        <a href="<?=base_url('distributor');?>" class="btn btn-sm btn-danger">< Kembali</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
