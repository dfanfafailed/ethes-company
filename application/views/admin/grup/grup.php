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
                <li class="breadcrumb-item active" aria-current="page">Struktur Organisasi</li>
              </ol>
            </nav>

          <?= $this->session->flashdata('pesan'); ?>

            <div class="col-lg-12">
                <div class="grid">
                  <p class="grid-header">Table Struktur Organisasi</p>

                  <a class="btn btn-sm btn-primary mb-3 ml-2" href="<?=base_url('grup/create_data');?>" ><i class="mdi mdi-plus-box"></i></a>
                </div>

                <div class="row row-cols-1 row-cols-md-2 g-4">
                <?php foreach ($grup as $g): ?>
                    <div class="col">
                    <div class="card-body text-right">
                        <a href="<?= base_url('grup/edit/'. $g['id']) ?>" class="btn btn-sm" ><i class="mdi mdi-pencil" style="color: green; width: 30px; height: 30px;"></i></a>
                        <a href="<?= base_url('grup/hapus_grup/'. $g['id']) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus file gambar ini?')"class="btn btn-sm" ><i class="mdi mdi-backspace" style="color: #ff0000; width: 30px; height: 30px;"></i></a>
                      </div>
                        <div class="card">
                        <img src="<?= base_url('upload/img/grup/'.$g['image']); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?=$g['keterangan'];?></h5>
                        </div>
                        </div>
                    </div>    
                   

                    <?php endforeach;?>
                    </div>
                    </div>
                
        </div>
    </div>
          