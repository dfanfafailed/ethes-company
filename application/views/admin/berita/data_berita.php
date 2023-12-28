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
                <li class="breadcrumb-item active" aria-current="page">Direksi</li>
              </ol>
            </nav>
   
      

          <?= $this->session->flashdata('pesan'); ?>

            <div class="col-lg-12">
                <div class="grid">
                  <p class="grid-header">Table Direksi</p>

                  <a class="btn btn-sm btn-primary mb-3 ml-2" href="<?=base_url('berita/create_data');?>" ><i class="mdi mdi-plus-box"></i></a>
                </div>
             
                <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($berita as $b): ?>
                <div class="col">
                  <div class="card">
                    <div class="card-body text-right">
                            <a href="<?= base_url('berita/edit/'. $b['id']) ?>" class="btn btn-success btn-sm" > <i class="mdi mdi-lead-pencil"></i></a>
                            <a href="<?= base_url('berita/hapus_berita/'. $b['id']) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus distributor ini?')" class="btn btn-danger btn-sm"><i class="mdi mdi-backspace" ></i></a>
                          </div>
                    <img src="<?= base_url('upload/img/berita/'.$b['image']); ?>" class="card-img-top" alt="..."  >
                    <div class="card-body">
                      <h5 class="card-title"><b><?=$b['judul'];?></b></h5>
                      <p class="card-text"><?=substr(strip_tags($b['isi_blog']), 0, 200);?></p>
                    </div>
                  </div>
                </div>     
                <?php endforeach;?> 

               
                   
                  </div>
                </div>
          </div>
        </div>
        
        <script src="<?php echo base_url();?>assets/plugins/ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace('isi_blog');
</script>