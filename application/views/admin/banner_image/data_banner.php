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
                  <a href="#">Halaman Beranda</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Banner Image</li>
              </ol>
            </nav>
          </div>
      

          <?= $this->session->flashdata('pesan'); ?>

            <div class="col-lg-12">
                <div class="grid">
                  <p class="grid-header">Table Banner Image</p>

                  <a class="btn btn-sm btn-primary mb-3 ml-2" href="<?=base_url('banner/create_data');?>" ><i class="mdi mdi-plus-box"></i></a>


                  <div class="item-wrapper">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                          <th>Image</th>
                          <th>text</th>
                          <th>Sub</th>
                          <th>Aksi</th>
                          </tr>
                        </thead>
                        <?php foreach ($banner as $b): ?>
                        <tbody>

                          <tr>
                          <td><img src="<?= base_url('upload/img/banner/'.$b['image']); ?>" alt="Foto Banner" style="width: 150px;"></td>
                            <td><?php echo $b['text']; ?></td>
                            <td><?php echo $b['sub']; ?></td>
                            <td>
                                <a href="<?= base_url('banner/edit_data/'. $b['id']) ?>" class="btn btn-success btn-sm" >Edit</a>
                                <a href="<?php echo base_url('banner/hapus_banner/' . $b['id']); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus layanan ini?')" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                          </tr>
                        </tbody>
                        <?php endforeach; ?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        