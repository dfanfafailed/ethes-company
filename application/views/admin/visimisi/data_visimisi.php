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
                <li class="breadcrumb-item active" aria-current="page">visimisi</li>
              </ol>
            </nav>
          </div>
            <div class="col-lg-12">
                <div class="grid">
                  <p class="grid-header">Table visimisi</p>
                  <a href="<?= base_url('visimisi/create_data') ?>" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-primary mb-3 btn-sm">Create Data</a>
                </div>
                  
                <?php foreach ($visimisi as $v):?>
                  <div class="card mb-3" >
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="<?= base_url('upload/img/visimisi/'.$s['image']); ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                     
                        <h5 class="card-title">visimisi</h5>
                        <p class="card-text"><?=$s['visimisi'];?></p>
                      </div>
                      <div class="card-body text-right">
                      <a href="<?= base_url('visimisi/edit/'. $s['id_visimisi']) ?>" class="btn btn-sm btn-success" ><i class="mdi mdi-pencil"></i></a>
                        <a href="<?= base_url('visimisi/hapus_visimisi/'. $s['id_visimisi']) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus file gambar ini?')"class="btn btn-sm btn-danger" ><i class="mdi mdi-backspace" ></i></a>
                      </div>
                  </div>
                </div>
                <?php endforeach;?>
              </div>
            </div>
 