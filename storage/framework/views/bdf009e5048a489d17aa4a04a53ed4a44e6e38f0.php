<?php $__env->startSection('contingut'); ?>

<div class="row">

    <?php $__currentLoopData = $arrayPeliculas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pelicula): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">

        <a href="<?php echo e(url('/catalog/' . $pelicula['id'] )); ?>">
            <img src="<?php echo e($pelicula['poster']); ?>" style="height:200px"/>
            <h4 style="min-height:45px;margin:5px 0 10px 0">
                <?php echo e($pelicula['title']); ?>

            </h4>
        </a>

    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>