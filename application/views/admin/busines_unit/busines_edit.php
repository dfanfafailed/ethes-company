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
                      <form action="<?php echo base_url('busines/update/' . $busines_unit['id']); ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="id" value="<?=$busines_unit['id'];?>" id="id"  >
                        <div class="form-group">
                          <label for="inputEmail1">Badan Hukum</label>
                          <input type="text" class="form-control" name="badan_hukum" value="<?=$busines_unit['badan_hukum'];?>" id="Badan Hukum" >
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Bisnis</label>
                          <textarea name="bisnis" id="bisnis" cols="30" class="form-control" rows="10"  ><?=$busines_unit['bisnis'];?></textarea>
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
