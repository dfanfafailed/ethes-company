<div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
          <div class="viewport-header">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb has-arrow">
                <li class="breadcrumb-item">
                  <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#">Bussines Profil</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Busines Unit</li>
              </ol>
            </nav>
          </div>
          <div class="content-viewport">
            <div class="row">
              <div class="col equel-grid">
                <div class="grid">
                  <p class="grid-header">Tambah Data Busines Unit</p>
                  <div class="grid-body">
                    <div class="item-wrapper">
                      <form action="<?=base_url('busines/add_busines');?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="inputEmail1">Badan Hukum</label>
                          <input type="text" class="form-control" name="badan_hukum" id="badan_hukum" placeholder="Badan Hukum">
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Bisnis</label>
                          <textarea name="bisnis" id="ckeditor" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn btn-sm btn-success">+ Tambah</button>
                        <a href="<?=base_url('busines');?>"  class="btn btn-sm btn-danger">< Kembali</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
