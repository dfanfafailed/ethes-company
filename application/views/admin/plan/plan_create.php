<div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
          <div class="viewport-header">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb has-arrow">
                <li class="breadcrumb-item">
                  <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#">Our Plan</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Plan Pertumbuhan</li>
              </ol>
            </nav>
          </div>
          <div class="content-viewport">
            <div class="row">
              <div class="col equel-grid">
                <div class="grid">
                  <p class="grid-header">Tambah Plan Pertumbuhan</p>
                  <div class="grid-body">
                    <div class="item-wrapper">
                      <form action="<?=base_url('plan/add_plan');?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="inputEmail1">Tahun</label>
                          <input type="number" class="form-control" name="tahun" id="tahun" placeholder="Tahun Rencana">
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Rencana</label>
                          <input type="text" name="rencana" class="form-control" id="rencana" placeholder="Rencana">
                        </div>
                        <button type="submit" class="btn btn-sm btn-success">+ Tambah</button>
                        <a href="<?=base_url('plan');?>"  class="btn btn-sm btn-danger">< Kembali</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
