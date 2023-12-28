
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
                <li class="breadcrumb-item active" aria-current="page">Komisaris</li>
              </ol>
            </nav>
          </div>
          <div class="content-viewport">
            <div class="row">
              <div class="col equel-grid">
                <div class="grid">
                  <p class="grid-header">Edit Data Komisaris</p>
                  <div class="grid-body">
                    <div class="item-wrapper">
                      <form action="<?=base_url('komisaris/update/' . $komisaris['id']);?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="inputEmail1">Jabatan</label>
                          <input type="text" class="form-control" name="jabatan" value="<?=$komisaris['jabatan'];?>" id="jabatan" placeholder="Jabatan">
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Nama komisaris</label>
                          <input type="text" class="form-control" name="nama_komisaris" value="<?=$komisaris['nama_komisaris'];?>" id="nama_komisaris" placeholder="Nama komisaris">
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Alamat</label>
                          <input type="text" class="form-control" name="alamat" value="<?=$komisaris['alamat'];?>" id="alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Email</label>
                          <input type="text" class="form-control" name="email" value="<?=$komisaris['email'];?>" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Telepon</label>
                          <input type="text" class="form-control" name="telepon" value="<?=$komisaris['telepon'];?>" id="telepon" placeholder="Telepon">
                        </div>
                        <div class="form-group">
                          <label for="inputPassword1">Foto</label>
                          <input type="file" name="image" class="form-control" id="image" placeholder="image"><br>
                          <img src="<?php echo base_url('upload/img/komisaris/'.$komisaris['image']); ?>" alt="image komisaris" width="150">
                        </div>
                        <button type="submit" class="btn btn-sm btn-success">+ Update</button>
                        <a href="<?=base_url('komisaris');?>" class="btn btn-sm btn-danger">< Kembali</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
