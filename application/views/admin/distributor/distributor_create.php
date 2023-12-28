<div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
          <div class="viewport-header">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb has-arrow">
                <li class="breadcrumb-item">
                  <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#">Forms</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Form Elements</li>
              </ol>
            </nav>
          </div>
          <div class="content-viewport">
            <div class="row">
              <div class="col equel-grid">
                <div class="grid">
                  <p class="grid-header">Tambbah Banner Image</p>
                  <div class="grid-body">
                    <div class="item-wrapper">
                      <form action="<?=base_url('distributor/add_distributor');?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="inputEmail1">Distributor</label>
                          <input type="text" class="form-control" name="distributor" id="distributor" placeholder="Distributor">
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Produk</label>
                          <input type="text" class="form-control" name="produk" id="produk" placeholder="Produk">
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Website</label>
                          <input type="text" class="form-control" name="link" id="link" placeholder="Website">
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Keterangan</label>
                          <input type="text" class="form-control" name="tittle" id="tittle" placeholder="Keterangan">
                        </div>
                        <div class="form-group">
                          <label for="inputPassword1">Gambar</label>
                          <input type="file" name="image" class="form-control" id="image" placeholder="Gambar">
                        </div>
                        <button type="submit" class="btn btn-sm btn-success">+ Tambah</button>
                        <a href="<?=base_url('distributor');?>" class="btn btn-sm btn-danger">< Kembali</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>