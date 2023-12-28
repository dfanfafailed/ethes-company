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
                  <a href="#">About</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Dewan Komisaris</li>
              </ol>
            </nav>
   
      

          <?= $this->session->flashdata('pesan'); ?>

            <div class="col-lg-12">
                <div class="grid">
                  <p class="grid-header">Table Dewan Komisaris</p>

                  <a class="btn btn-sm btn-primary mb-3 ml-2" href="<?=base_url('komisaris/create_data');?>" ><i class="mdi mdi-plus-box"></i></a>
                </div>
                <div class="row">

                  <div class="col-md-3 col-sm-6 col-6 equel-grid">
                    <?php foreach ($komisaris as $k): ?>
                      <div class="grid-body text-gray">
                      <div class="card" style="width: 18rem;">
                      <img src="<?= base_url('upload/img/komisaris/'.$k['image']); ?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title text-center"><?=$k['jabatan'];?></h5>
                      </div>
                      <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item"><?=$k['nama_komisaris'];?></li>
                        <li class="list-group-item"><?=$k['alamat'];?></li>
                        <li class="list-group-item"><?=$k['email'];?></li>
                      </ul>
                      <div class="card-body text-center">
                      <a href="<?= base_url('komisaris/edit/'. $k['id']) ?>" class="btn btn-success btn-sm" > <i class="mdi mdi-lead-pencil"></i></a>
                        <a href="<?= base_url('komisaris/hapus_komisaris/'. $k['id']) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus distributor ini?')" class="btn btn-danger btn-sm"><i class="mdi mdi-backspace" ></i></a>
                      </div>
                    </div>                                            
                      </div>
                      <?php endforeach;?>
                    </div>

                   
                     
                    </div>
                  </div>
                </div>
          