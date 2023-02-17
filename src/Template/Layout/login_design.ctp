<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo $this->Url->build('/frontend/login/fonts/icomoon/style.css'); ?>">

    <link rel="stylesheet" href="<?php echo $this->Url->build('/frontend/login/css/owl.carousel.min.css'); ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $this->Url->build('/frontend/login/css/bootstrap.min.css'); ?>">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo $this->Url->build('/frontend/login/css/style.css'); ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Buildial Register</title>
  </head>
  <body>
  

  <?= $this->fetch('content') ?>
    
    

    <script src="<?php echo $this->Url->build('/frontend/login/js/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?php echo $this->Url->build('/frontend/login/js/popper.min.js'); ?>"></script>
    <script src="<?php echo $this->Url->build('/frontend/login/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo $this->Url->build('/frontend/login/js/main.js'); ?>"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput-jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />

  <script>
      $(function() {
      $("#country").change(function() {
        let countryCode = $(this).find('option:selected').data('country-code');
        let value = "+" + $(this).val();
        $('#txtPhone').val(value).intlTelInput("setCountry", countryCode);
      });
      
      var code = "+91 ";
      $('#txtPhone').val(code).intlTelInput();
    });
  </script>  

   <!-- <script type="text/javascript">
     $(document).ready(function(){
      setTimeout(function(){
          window.location.href = "<?php echo $this->Url->build('/home'); ?>";
        }, 1000);
     });
  </script> -->
  </body>
</html>