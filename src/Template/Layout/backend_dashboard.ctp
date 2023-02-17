<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Panel</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo $this->Url->build('/backend/vendors/iconfonts/mdi/font/css/materialdesignicons.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo $this->Url->build('/backend/vendors/css/vendor.bundle.base.css'); ?>">
  <link rel="stylesheet" href="<?php echo $this->Url->build('/backend/vendors/css/vendor.bundle.addons.css'); ?>">
  <!-- <link rel="stylesheet" href="<?php echo $this->Url->build('/backend/vendors/summernote/dist/summernote-bs4.css'); ?>"> -->
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo $this->Url->build('/backend/css/vertical-layout-light/style.css'); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

  <style>
    .error-message{
      color: red;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php echo $this->element('back_end/navbar'); ?> 
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php echo $this->element('back_end/sidebar'); ?> 
      <!-- partial -->
      <?= $this->fetch('content') ?>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?php echo $this->Url->build('/backend/vendors/js/vendor.bundle.base.js'); ?>"></script>
  <script src="<?php echo $this->Url->build('/backend/vendors/js/vendor.bundle.addons.js'); ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo $this->Url->build('/backend/js/off-canvas.js'); ?>"></script>
  <script src="<?php echo $this->Url->build('/backend/js/hoverable-collapse.js'); ?>"></script>
  <script src="<?php echo $this->Url->build('/backend/js/template.js'); ?>"></script>
  <script src="<?php echo $this->Url->build('/backend/js/settings.js'); ?>"></script>
  <script src="<?php echo $this->Url->build('/backend/js/todolist.js'); ?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo $this->Url->build('/backend/js/dashboard.js'); ?>"></script>

  <script src="<?php echo $this->Url->build('/backend/js/data-table.js'); ?>"></script>
  <script src="<?php echo $this->Url->build('/backend/js/dropify.js'); ?>"></script>
  <!-- <script src="<?php echo $this->Url->build('/backend/vendors/summernote/dist/summernote-bs4.min.js'); ?>"></script> -->
  <!-- End custom js for this page-->
</body>

</html>

