<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-6 col-lg-6 col-md-6">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-12">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                </div>
                <?= $this->session->flashdata('message'); ?>
                <form class="user" action="<?= base_url('auth/login'); ?>" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" placeholder="Enter Username..." name="username">
                  </div>
                  <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                      placeholder="Password" name="password">
                  </div>
                  <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                      <input type="checkbox" class="custom-control-input" id="customCheck">
                      <label class="custom-control-label" for="customCheck">Remember
                        Me</label>
                    </div>
                  </div>
                  <button type="submit" href="index.html" class="btn btn-primary btn-user btn-block">
                    Login
                  </button>
                </form>
                <div class="text-center">
                  <a class="small" href="forgot-password.html">Forgot Password?</a>
                </div>
                <div class="text-center">
                  <a class="small" href="<?= base_url('register'); ?>">Create an Account!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>