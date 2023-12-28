<!-- partial -->
<div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
          <div class="viewport-header">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb has-arrow">
                <li class="breadcrumb-item">
                  <a href="<?=base_url('admin');?>">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#">Busines Profil</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Business Unit</li>
              </ol>
            </nav>
   
      

          <?= $this->session->flashdata('pesan'); ?>

            <div class="col-lg-12">
                <div class="grid">
                  <p class="grid-header">Table Business Unit</p>

                  <a class="btn btn-sm btn-primary mb-3 ml-2" href="<?=base_url('busines/create_data');?>" ><i class="mdi mdi-plus-box"></i></a>


                  <div class="row">

                  <?php foreach ($busines as $b): ?>
                  <div class="col-md-3 col-sm-6 col-6 equel-grid">
                      <div class="card" style="width: 18rem;">
                        <div class="card-header">
                          <b><?=$b['badan_hukum'];?></b>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><?=$b['bisnis'];?></li>
                        </ul>
                        <div class="card-body text-right">
                        <a href="<?= base_url('busines/edit/'. $b['id']) ?>" class="btn btn-success btn-sm" > <i class="mdi mdi-lead-pencil"></i></a>
                        <a href="<?= base_url('busines/hapus_busines/'. $b['id']) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus distributor ini?')" class="btn btn-danger btn-sm"><i class="mdi mdi-backspace" ></i></a>
                      </div>
                    </div>                                         
                  </div>
                  <?php endforeach;?>
                </div>
                </div>
                </div>
            </div>