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
                  <a href="#">Our Plan</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Plan Pertumbuhan</li>
              </ol>
            </nav>
   
      

          <?= $this->session->flashdata('pesan'); ?>

            <div class="col-lg-12">
                <div class="grid">
                  <p class="grid-header">Table Plan Pertumbuhan</p>

                  <a class="btn btn-sm btn-primary mb-3 ml-2" href="<?=base_url('plan/create_data');?>" ><i class="mdi mdi-plus-box"></i></a>


                  <div class="item-wrapper">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                          <th>Tahun</th>
                          <th>Rencana</th>
                          <th>Aksi</th>
                          </tr>
                        </thead>
                        <?php foreach ($plan as $p): ?>
                        <tbody>

                          <tr>
                            <td><?=$p['tahun'];?></td>
                            <td><?=$p['rencana'];?></td>
                            <td>
                                <a href="<?= base_url('plan/edit/'. $p['id']) ?>" class="btn btn-success btn-sm" > <i class="mdi mdi-lead-pencil"></i></a>
                                <a href="<?= base_url('plan/hapus_plan/'. $p['id']) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus plan ini?')" class="btn btn-danger btn-sm"><i class="mdi mdi-backspace" ></i></a>
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
        