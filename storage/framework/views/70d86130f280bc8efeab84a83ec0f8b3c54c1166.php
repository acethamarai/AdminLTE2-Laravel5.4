<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo e(isset($page_title) ? $page_title : "AdminLTE Dashboard"); ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
   

<link rel="stylesheet" href="<?php echo e(asset("/bower_components/bootstrap/dist/css/bootstrap.min.css")); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset("/bower_components/font-awesome/css/font-awesome.min.css")); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo e(asset("/bower_components/Ionicons/css/ionicons.min.css")); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset("/dist/css/AdminLTE.min.css")); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo e(asset("/dist/css/skins/_all-skins.min.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset("/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset("/bower_components/select2/dist/css/select2.min.css")); ?>">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">

      <!-- Header -->
      <?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <!-- Sidebar -->
      <?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php echo e(isset($page_title) ? $page_title : "Page Title"); ?>

            <small><?php echo e(isset($page_description) ? $page_description : null); ?></small>
          </h1>
          <!-- You can dynamically generate breadcrumbs here -->
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">          
          <!-- Your Page Content Here -->
          <?php echo $__env->yieldContent('content'); ?>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Footer -->
      <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

   
	<script src="<?php echo e(asset ('/bower_components/jquery/dist/jquery.min.js')); ?>"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo e(asset ('/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
	<!-- FastClick -->
	<script src="<?php echo e(asset ('/bower_components/fastclick/lib/fastclick.js')); ?>"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo e(asset ('/dist/js/adminlte.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/bower_components/select2/dist/js/select2.full.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/bower_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>

	<script src="<?php echo e(asset ('/dist/js/demo.js')); ?>"></script>
	<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
	//Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
	
	 $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
  </body>
</html>