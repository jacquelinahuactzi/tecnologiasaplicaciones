<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sistema 8B</title>
    <!-- jQuery -->
    <script src="<?= base_url("plugins/jquery/jquery.min.js");?>"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url("plugins/bootstrap/js/bootstrap.bundle.min.js");?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js");?>"></script>

    <script type="text/javascript" src="<?= base_url("adminlte/js/adminlte.js");?>"></script>
    <link rel="stylesheet" href="<?=base_url("adminlte/css/adminlte.css"); ?>">
    <link rel="stylesheet" href="<?=base_url("adminlte/fontawesome-free/css/all.css"); ?>">

  </head>
  <body>
    <?= $this->renderSection('contenido') ?>
  </body>
</html>
