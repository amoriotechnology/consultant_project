
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo $this->Url->build('/backend/vendors/iconfonts/mdi/font/css/materialdesignicons.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo $this->Url->build('/backend/vendors/css/vendor.bundle.base.css'); ?>">
  <link rel="stylesheet" href="<?php echo $this->Url->build('/backend/vendors/css/vendor.bundle.addons.css'); ?>">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo $this->Url->build('/backend/css/vertical-layout-light/style.css'); ?>">
  <!-- endinject -->
  <!-- <link rel="shortcut icon" href="<?php echo $this->Url->build('/backend/images/favicon.png'); ?>" /> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
  <div class="container-scroller">
  <?= $this->fetch('content') ?>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo $this->Url->build('/backend/vendors/js/vendor.bundle.base.js'); ?>"></script>
  <script src="<?php echo $this->Url->build('/backend/vendors/js/vendor.bundle.addons.js'); ?>"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo $this->Url->build('/backend/js/off-canvas.js'); ?>"></script>
  <script src="<?php echo $this->Url->build('/backend/js/hoverable-collapse.js'); ?>"></script>
  <script src="<?php echo $this->Url->build('/backend/js/template.js'); ?>"></script>
  <script src="<?php echo $this->Url->build('/backend/js/settings.j'); ?>s"></script>
  <script src="<?php echo $this->Url->build('/backend/js/todolist.js'); ?>"></script>


  <!-- endinject -->
</body>

</html>
