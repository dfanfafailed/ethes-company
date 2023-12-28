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
                      <form action="<?php echo base_url('visimisi/update/' . $visimisi['id']); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="inputEmail1">Visi</label>
                          <textarea name="visi" id="visi"  class="form-control" cols="30" rows="10" > <?=$visimisi['visi'];?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Misi</label>
                          <textarea name="misi" id="misi"  class="form-control" cols="30" rows="10" > <?=$visimisi['misi'];?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword1">Gambar</label>
                          <input type="file" name="image" class="form-control" id="image" placeholder="Gambar" value="<?= $visimisi['image'];?>"><br>
                          <img src="<?= base_url('/upload/img/visi_misi/'.$visimisi['image']); ?>" alt="Foto struktur" width="150">
                        </div>
                        <button type="submit" class="btn btn-sm btn-success">+ Update</button>
                        <a href="<?=base_url('visimisi');?>" class="btn btn-sm btn-danger">< Kembali</a>
                      </form>
                    </div>
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
