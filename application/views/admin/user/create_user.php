<div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
          <div class="viewport-header">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb has-arrow">
                <li class="breadcrumb-item">
                  <a href="#">Kelola Akun</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#">Kelola Akun</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Akun</li>
              </ol>
            </nav>
          </div>
          <div class="content-viewport">
            <div class="row">
              <div class="col equel-grid">
                <div class="grid">
                  <p class="grid-header">Tambah Admin </p>
                  <div class="grid-body">
                    <div class="item-wrapper">
                      <form method="post" action="<?=BASEURL?>user/add_user">
                          
                        <div class="form-group">
                            <label for="inputEmail1">Nama</label>
                            <input type="text" name="nama" class="form-control" id="inputEmail1" placeholder="Masukkan nama">
                        </div>
                        
                        <div class="form-group">
                            <label for="inputEmail1">Username</label>
                            <input type="text" name="username" class="form-control" id="inputEmail1" placeholder="Masukkan username">
                        </div>

                        <div class="form-group">
                          <label for="inputEmail1">Email</label>  
                          <input type="email" name="email" class="form-control" id="inputEmail1" placeholder="Masukkan email">
                        </div>                          


                        <div class="form-group">
                          <label for="inputEmail1">Foto</label>
                          <input type="file" name="gambar" class="form-control" id="inputEmail1" placeholder="Masukkan foto">
                        </div>

                      <div class="form-group">
                        <label for="input-nomor">Password</label>
                        <input required type="password" id="myInput" name="password" class="form-control" value="" autocomplete="off" />
                      </div>
                      <div class="text-muted text-sm">
                        <input type="checkbox" onclick="tampilPassword()">  Tampilkan Password
                      </div>

                    <script>
                      
                      function tampilPassword() {
                        var x = document.getElementById("myInput");
                        if (x.type === "password") {
                          x.type = "text";
                        } else {
                          x.type = "password";
                        }
                      }
                    </script><br>
                    
                       
                    <button type="submit" class="btn btn-sm btn-primary">+ Tambah</button>
                  </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
