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
                <li class="breadcrumb-item active" aria-current="page">Service</li>
              </ol>
            </nav>
          </div>
          <?= $this->session->flashdata('pesan'); ?>

            <div class="col-lg-12">
                <div class="grid">
                  <p class="grid-header">Table Pelayanan Pelanggan</p>
                  <a class="btn btn-sm btn-primary mb-3 ml-2" href="<?=base_url('service/create_data');?>" ><i class="mdi mdi-plus-box"></i></a>
                  <div class="item-wrapper">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Budaya</th>
                                <th>Keterangan</th>
                                <th>Icon</th>
                                <th>Opsi</th>
                          </tr>
                        </thead>

                        <?php foreach ($services as $service): ?>
                            <tbody>
                        <tr>
                           
                            <td><img src="<?= base_url('upload/img/'.$service['foto']); ?>" alt="Foto Layanan" style="width: 150px;"></td>
                            <td><?php echo $service['nama_layanan']; ?></td>
                            <td><?php echo $service['deskripsi_layanan']; ?></td>
                            <td>
                                <a href="<?= base_url('service/edit/'. $service['id_service']) ?>" class="btn btn-success btn-sm" >Edit</a>
                                <a href="<?php echo base_url('service/hapus_service/' . $service['id_service']); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus layanan ini?')" class="btn btn-danger btn-sm">Hapus</a>
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
            
        