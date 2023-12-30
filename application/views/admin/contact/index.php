<!-- partial -->
<div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
          <div class="viewport-header">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb has-arrow">
                <li class="breadcrumb-item">
                  <a href="<?=base_url('admin');?>">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
              </ol>
            </nav>
          </div>
          <?= $this->session->flashdata('pesan'); ?>

            <div class="col-lg-12">
                <div class="grid">
                  <p class="grid-header">Table Contact</p>
                  <a class="btn btn-sm btn-primary mb-3 ml-2" href="<?=base_url('contact/create');?>" ><i class="mdi mdi-plus-box"></i></a>
                  <div class="item-wrapper">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Addres</th>
                                <th>Email</th>
                                <th>Number call</th>
                                <th>Maps</th>
                                <th>Opsi</th>
                          </tr>
                        </thead>

                        <?php foreach ($contact as $key => $item): ?>
                        <tbody>
                          <tr>
                              <td><?=$key +1?></td>
                              <td><?php echo $item['address']; ?></td>
                              <td><?php echo $item['email_us']; ?></td>
                              <td><?php echo $item['number_call']; ?></td>
                              <td style="width: 100%;"><?php echo $item['maps']; ?></td>
                              <td>
                                <a href="<?= base_url('contact/edit/'. $item['id']) ?>" class="btn btn-success btn-sm" >Edit</a>
                                <a href="<?php echo base_url('contact/destroy/' . $item['id']); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus layanan ini?')" class="btn btn-danger btn-sm">Hapus</a>
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
            
        