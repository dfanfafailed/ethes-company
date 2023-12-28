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
                <li class="breadcrumb-item active" aria-current="page">Offline Store</li>
              </ol>
            </nav>
          </div>
          <div class="content-viewport">
            <div class="row">
              <div class="col equel-grid">
                <div class="grid">
                  <p class="grid-header">Tambah Data Offline Store</p>
                  <div class="grid-body">
                    <div class="item-wrapper">
                      <form action="<?=base_url('store/add_store');?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="inputEmail1">Nama Offline Store</label>
                          <input type="text" class="form-control" name="nama_store" id="nama_store" placeholder="Kandangan (LD 01)">
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Outlet</label>
                          <input type="text" class="form-control" name="outlet" id="outlet" placeholder="Lido Grosir Kandangan">
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Alamat Outlet</label>
                          <input type="text" class="form-control" name="alamat_outlet" id="alamat_outlet" placeholder="Jalan wonosobo - purworejo">
                        </div>
                        <div class="form-group">
                          <label for="inputEmail1">Link Alamat Outlet</label>
                          <input type="text" class="form-control" name="link_alamat" id="link_alamat" placeholder="https://maps.app.goo.gl/E8YeFrMAfHw1P3et7">
                        </div>
                        <div class="form-group">
                          <label for="inputPassword1">Gambar</label>
                          <input type="file" name="foto" class="form-control" id="foto" placeholder="Gambar">
                        </div>
                        <button type="submit" class="btn btn-sm btn-success">+ Tambah</button>
                        <a href="<?=base_url('store');?>"  class="btn btn-sm btn-danger">< Kembali</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
