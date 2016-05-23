<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Make a Reservation</h1>
        <p class="lead">Add reservation</p>
        <hr>
    </div>
    
    <?php if(Session::has('flash_message')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('flash_message')); ?>

        </div>
    <?php endif; ?>

    <?php echo Form::open([
    'route' => 'reservasi.store'
    ]); ?>


    <div class="form-group">
        <?php echo Form::label('id_lapangan', 'ID Lapangan:', ['class' => 'control-label']); ?>

        <?php echo Form::text('id_lapangan', null, ['class' => 'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('tanggal_sewa', 'Tanggal Sewa:', ['class' => 'control-label']); ?>

        <?php echo Form::date('tanggal_sewa', null, ['class' => 'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('waktu_mulai_sewa', 'Waktu Mulai Sewa:', ['class' => 'control-label']); ?>

        <?php echo Form::time('waktu_mulai_sewa', null, ['class' => 'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('waktu_selesai_sewa', 'Waktu Selesai Sewa:', ['class' => 'control-label']); ?>

        <?php echo Form::time('waktu_selesai_sewa', null, ['class' => 'form-control']); ?>

    </div>

    <?php echo Form::submit('Create New Reservation', ['class' => 'btn btn-primary']); ?>


    <?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>