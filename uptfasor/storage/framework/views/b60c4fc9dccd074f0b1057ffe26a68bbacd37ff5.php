<?php $__env->startSection('content'); ?>

    <div class="container">
        <h1>Courts List</h1>
            <p class="lead">Here's a list of all your courts. <a href="<?php echo e(route('courts.create')); ?>">Add a new one?</a></p>
        <hr>
        <?php foreach($courts as $courts): ?>
            <p><?php echo e($courts->id_lapangan); ?></p>
            <p><?php echo e($courts->tanggal_sewa); ?></p>
            <p><?php echo e($courts->waktu_mulai_sewa); ?></p>
            <p><?php echo e($courts->waktu_selesai_sewa); ?></p>
            <p>
                <a href="<?php echo e(route('courts.show', $courts->id_penyewaan)); ?>" class="btn btn-info">View courts</a>
                <a href="<?php echo e(route('courts.edit', $courts->id_penyewaan)); ?>" class="btn btn-primary">Edit courts</a>
            </p>
            <hr>
        <?php endforeach; ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>