<div class="login-logo">
    <a href="<?= base_url() ?>"><b>Sistem Informasi Perpustakaan</b></a>
    <br>
    <h3><b>Busa Pustaka</b></h3>
</div>

<div class="row">
    <div class="login-box">
        <div class="col-lg-12 col-12">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>User</h3>

                <p>Login User</p>
              </div>
              <div class="icon">
                <i class="fas fa fa-user"></i>
              </div>
              <a href="<?= base_url('Auth/LoginUser') ?>" class="small-box-footer">Login <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div> 
    </div>

    <div class="login-box">
        <div class="col-lg-12 col-12">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>Pengunjung</h3>

                    <p>Login Pengunjung</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="<?= base_url('Auth/LoginPengunjung') ?>" class="small-box-footer">Login <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>