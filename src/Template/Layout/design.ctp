<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=12.0, user-scalable=yes" />

         <meta name="description" content="<?php if($meta_description != "" ){ echo $meta_description; }else{ echo "Consultant"; } ?>">
         <meta name="keywords" content="<?php if($meta_keyword != "" ){ echo $meta_keyword; }else{ echo "Consultant"; } ?>">
		
        <title><?php if($meta_title != "" ){ echo $meta_title; }else{ echo "Buildial Consultant"; } ?></title>	
		
        <!-- Custom CSS -->
        <link href="<?php echo $this->Url->build('/frontend/assets/css/styles.css'); ?>" rel="stylesheet">
		
		<!-- Custom Color Option -->
		<link href="<?php echo $this->Url->build('/frontend/assets/css/colors.css'); ?>" rel="stylesheet">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- Metro UI -->
        <!-- <link rel="stylesheet" href="https://cdn.korzh.com/metroui/v4/css/metro-all.min.css"> -->
       
        
		
    </head>
	
    <body class="blue-skin">
	
		 <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<div class="header header-light head-shadow">
				<div class="container">
                <?php echo $this->element('front_end/navbar'); ?> 
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
	
			<?= $this->fetch('content') ?>
			
<?php echo $this->element('front_end/footer'); ?> 		