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
                <li class="breadcrumb-item active" aria-current="page">Distributor</li>
              </ol>
            </nav>
   
      

          <?= $this->session->flashdata('pesan'); ?>

            <div class="col-lg-12">
                <div class="grid">
                  <p class="grid-header">Table Distributor</p>

                  <a class="btn btn-sm btn-primary mb-3 ml-2" href="<?=base_url('distributor/create_data');?>" ><i class="mdi mdi-plus-box"></i></a>


                  <div class="item-wrapper">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                          <th>Image</th>
                          <th>Distributor</th>
                          <th>Produk</th>
                          <th>Keterangan</th>
                          <th>Website</th>
                          <th>Aksi</th>
                          </tr>
                        </thead>
                        <?php foreach ($distributor as $d): ?>
                        <tbody>

                          <tr>
                          <td><img src="<?= base_url('upload/img/distributor/'.$d['image']); ?>" alt="Foto Banner" style="width: 150px;"></td>
                            <td><?=$d['distributor'];?></td>
                            <td><?=$d['produk'];?></td>
                            <td><?=$d['tittle'];?></td>
                            <td><?=$d['link'];?></td>
                            <td>
                                <a href="<?= base_url('distributor/edit/'. $d['id_distributor']) ?>" class="btn btn-success btn-sm" > <i class="mdi mdi-lead-pencil"></i></a>
                                <a href="<?= base_url('distributor/hapus_distributor/'. $d['id_distributor']) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus distributor ini?')" class="btn btn-danger btn-sm"><i class="mdi mdi-backspace" ></i></a>
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
        