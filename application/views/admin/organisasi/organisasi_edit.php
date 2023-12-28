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
                  <p class="grid-header">Edit Data organisasi</p>
                  <div class="grid-body">
                    <div class="item-wrapper">
                      <form action="<?php echo base_url('organisasi/update/' . $organisasi['id']); ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="id" value="<?=$organisasi['id'];?>" id="id"  >
                        <div class="form-group">
                          <label for="inputEmail1">Nama Struktur</label>
                          <input type="text" class="form-control" name="nama_struktur" value="<?=$organisasi['nama_struktur'];?>" id="nama_struktur" >
                        </div>
                        <div class="form-group">
                          <label for="inputPassword1">Gambar</label>
                          <input type="file" name="image" class="form-control" id="image" placeholder="Gambar" value="<?= $organisasi['image'];?>"><br>
                          <img src="<?= base_url('/upload/img/organisasi/'.$organisasi['image']); ?>" alt="Foto struktur" width="150">
                        </div>
                        <button type="submit" class="btn btn-sm btn-success">+ Update</button>
                        <a href="<?=base_url('organisasi');?>" class="btn btn-sm btn-danger">< Kembali</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
