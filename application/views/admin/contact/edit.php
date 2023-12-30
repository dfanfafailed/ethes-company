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
                      <form action="<?php echo base_url('contact/update/' . $contact['id']); ?>" method="POST" enctype="multipart/form-data">
                        
                        <div class="form-group">
                          <label for="inputEmail1">contact</label>
                          <input type="text" class="form-control" value="<?=$contact['address'];?>" name="address" id="address" placeholder="address">
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">email us</label>
                          <input type="text" class="form-control" value="<?=$contact['email_us'];?>" name="email_us" id="email_us" placeholder="email us">
                        </div>
                        <div class="form-group">
                          <label for="inputPassword1">number call</label>
                          <input type="text" value="<?= $contact['number_call']?>" name="number_call" class="form-control" id="number_call" placeholder=""><br>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword1">maps</label>
                          <input type="text" value="<?= $contact['maps']?>" name="maps" class="form-control" id="maps" placeholder=""><br>
                        </div>
                        <button type="submit" class="btn btn-sm btn-success">+ Update</button>
                        <a href="<?=base_url('contact');?>"  class="btn btn-sm btn-danger">< Kembali</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
