<?php $__env->startSection('contingut'); ?>

<div class="row">

    <div class="col-sm-4">

        <img src="<?php echo e($peli['poster']); ?>" style="max-width:100%" />

    </div>
    <div class="col-sm-8">

        <h1><?php echo e($peli["title"]); ?></h1>
        <h2>Any: <b><?php echo e($peli["year"]); ?></b></h2>
        <h2>Director: <b><?php echo e($peli["director"]); ?></b></h2>

        <p>Estat: 
        <?php if( $peli["rented"] ): ?>
            Llogada<br>
            <button type="button" class="btn btn-danger">Tornar peli</button>
        <?php else: ?>
            Disponible<br>
            <button type="button" class="btn btn-primary">Llogar peli</button>
        <?php endif; ?>

        <button type="button" class="btn btn-warning" onclick="location.href='<?php echo e(url('/')); ?>/catalog/<?php echo e($id); ?>/edit'">
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar peli</button>
        <button type="button" class="btn btn-default" onclick="window.history.back()">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Tornar</button>

        <p>Sinopsi: <?php echo e($peli["synopsis"]); ?></p>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>