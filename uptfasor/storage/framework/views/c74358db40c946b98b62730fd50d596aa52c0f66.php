<?php $__env->startSection('content'); ?>

    <div class="container">
        <h1>Reservations List</h1>
            <p class="lead">Here's a list of all your reservations. <a href="<?php echo e(route('reservasi.create')); ?>">Add a new one?</a></p>
        <hr>
        <?php foreach($reservasi as $reservasi): ?>
            <p><?php echo e($reservasi->id_lapangan); ?></p>
            <p><?php echo e($reservasi->tanggal_sewa); ?></p>
            <p><?php echo e($reservasi->waktu_mulai_sewa); ?></p>
            <p><?php echo e($reservasi->waktu_selesai_sewa); ?></p>
            <p>
                <a href="<?php echo e(route('reservasi.show', $reservasi->id_penyewaan)); ?>" class="btn btn-info">View Reservation</a>
                <a href="<?php echo e(route('reservasi.edit', $reservasi->id_penyewaan)); ?>" class="btn btn-primary">Edit Reservation</a>
            </p>
            <hr>
        <?php endforeach; ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>