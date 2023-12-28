<!-- partial -->
<div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
          <div class="viewport-header">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb has-arrow">
                <li class="breadcrumb-item">
                  <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#">Halaman Beranda</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Service</li>
              </ol>
            </nav>
          </div>
            <div class="col-lg-12">
                <div class="grid">
                  <p class="grid-header">Table Service</p>
                  <a href="<?= base_url('sejarah/create_data') ?>" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-primary mb-3 btn-sm">Create Data</a>
                </div>
                  
                <?php foreach ($sejarah as $s):?>
                  <div class="card mb-3" >
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="<?= base_url('upload/img/sejarah/'.$s['image']); ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body text-right">
                      <a href="<?= base_url('sejarah/edit/'. $s['id_sejarah']) ?>" class="btn btn-sm" ><i class="mdi mdi-pencil" style="color: green; width: 30px; height: 30px;"></i></a>
                        <a href="<?= base_url('sejarah/hapus_sejarah/'. $s['id_sejarah']) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus file gambar ini?')"class="btn btn-sm" ><i class="mdi mdi-backspace" style="color: #ff0000; width: 30px; height: 30px;"></i></a>
                      </div>
                        <h5 class="card-title">Sejarah</h5>
                        <p class="card-text"><?=$s['sejarah'];?></p>
                      </div>
                  </div>
                </div>
                <?php endforeach;?>
              </div>
            </div>
