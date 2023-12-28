<div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
          <div class="viewport-header">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb has-arrow">
                <li class="breadcrumb-item">
                  <a href="<?=base_url('admin');?>">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#">Our Plan</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Plan Pertumbuhan</li>
              </ol>
            </nav>
          </div>
          <div class="content-viewport">
            <div class="row">
              <div class="col equel-grid">
                <div class="grid">
                  <p class="grid-header">Edit Plan Pertumbuhan</p>
                  <div class="grid-body">
                    <div class="item-wrapper">
                      <form action="<?php echo base_url('plan/update/' . $plan['id']); ?>" method="POST" enctype="multipart/form-data">
                     
                        <div class="form-group">
                          <label for="inputEmail1">Plan</label>
                          <input type="text" class="form-control" name="tahun" value="<?=$plan['tahun'];?>" id="tahun" >
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Rencana</label>
                          <input type="text" class="form-control" name="rencana" id="rencana" value="<?=$plan['rencana'];?>" >
                        </div>
                      
                        <button type="submit" class="btn btn-sm btn-success">+ Update</button>
                        <a href="<?=base_url('plan');?>" class="btn btn-sm btn-danger">< Kembali</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
