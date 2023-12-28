
<div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="<?= base_url('auth'); ?>" method="POST" class="sign-in-form">

            <h2 class="title">Sign in</h2>
            <?= $this->session->flashdata('pesan'); ?>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="myInput" name="password" placeholder="Password" />
            </div>

            <?= form_error('password', '<span class="error-messagge ml-2">', '</span>');?>

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
                    </script>

            <button type="submit" value="Login" class="btn solid" >Login</button>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>                 
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="<?=base_url('login/');?>img/log.svg" class="image" alt="" />
        </div>
       
      </div>
    </div>

    <script>
        document.getElementById('sign-up-btn').onclick = function(){
            window.location.href = '<?= base_url('auth/register');?>'
        }
    </script>