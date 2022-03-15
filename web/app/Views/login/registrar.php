<?= $this->extend('/plantillas/plantilla_adminlte') ?>
<?= $this->section('contenido') ?>

<div class="hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <?= $this->include("login/password_svg"); ?>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Registrar un nuevo miembro</p>

        <form action="../../index.html" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Nombre completo">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Contraseña">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Repite contraseña">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                <label for="agreeTerms">
                 Estoy de acuerdo con los <a href="#">terminos</a>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-7">
              <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <a href="login.html" class="text-center">Ya soy miembro </a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
</div>
<?= $this->endSection() ?>
