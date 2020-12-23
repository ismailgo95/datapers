<body class="bg-gradient-primary">
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="text-center mt-3">
                  <img src="<?= base_url('assets/img/hesti.png') ?>" alt="Logo-Hesti" width="100px">
                  <h5 class="h5 text-gray-900 font-weight-bold mt-2">RS TK II 02.05.01 DR.AK.GANI PALEMBANG</h5>
                </div>
                <div class="pl-5 pr-5 pb-4 pt-2">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Halaman <?= $judul ?></h1>
                  </div>

                  <?= $this->session->flashdata('message'); ?>

                  <form class="user" method="post" action="<?= base_url('auth'); ?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukan Alamat Email" value="<?= set_value('email'); ?>">
                      <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                      <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('auth/registration'); ?>">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>