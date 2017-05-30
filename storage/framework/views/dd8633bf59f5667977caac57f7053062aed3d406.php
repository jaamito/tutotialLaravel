<html>
<head>
  <link rel="stylesheet" href="<?php echo e(url('/assets/bootstrap/css/bootstrap.min.css')); ?>" />
  <script rel="javascript" src="<?php echo e(url('/assets/bootstrap/js/bootstrap.min.js')); ?>"></script>
</head>

<body>
  <?php echo $__env->make('partials.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <div class="contingut">
  <?php echo $__env->yieldContent('contingut'); ?>
  </div>
</body>

</html>