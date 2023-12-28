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
                  <a href="#">Business Profil</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Offline Store</li>
              </ol>
            </nav>
          </div>
      

          <?= $this->session->flashdata('pesan'); ?>

            <div class="col-lg-12">
                <div class="grid">
                  <p class="grid-header">Table Offline Store</p>

                  <a class="btn btn-sm btn-primary mb-3 ml-2" href="<?=base_url('store/create_data');?>" ><i class="mdi mdi-plus-box"></i></a>


                  <div class="item-wrapper">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                          <th>Image</th>
                          <th>Nama Offline Store</th>
                          <th>Outlet</th>
                          <th>Alamat Outlet</th>
                          <th>Link Alamat Outlet</th>
                          <th>Aksi</th>
                          </tr>
                        </thead>
                        <?php foreach ($offline as $o): ?>
                        <tbody>

                          <tr>
                          <td><img src="<?= base_url('upload/img/offline/'.$o['foto']); ?>" alt="Foto Offline Store" style="width: 150px;"></td>
                          <td><?=$o['nama_store'];?></td>
                          <td><?=$o['outlet'];?></td>
                          <td><?=$o['alamat_outlet'];?></td>
                          <!-- <td><?= substr(strip_tags($o['alamat_outlet']), 0, 0);?></td> -->
                          <td><?=$o['link_alamat'];?></td>
                            <td>
                                <a class="btn btn-success btn-sm" href="<?= base_url('store/edit/'. $o['id_store']) ?>"> <i class="mdi mdi-lead-pencil" ></i></a>
                                <a class="btn btn-danger btn-sm" href="<?= base_url('store/hapus_store/'. $o['id_store']) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus store ini?')" ><i class="mdi mdi-backspace" ></i></a>
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
        