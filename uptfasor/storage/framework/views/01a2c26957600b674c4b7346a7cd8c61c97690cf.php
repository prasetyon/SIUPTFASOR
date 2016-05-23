<?php $__env->startSection('content'); ?>

    <div class="container">
        <h1>User List</h1>
            <p class="lead">Here's a list of all user. <a href="<?php echo e(route('user.create')); ?>">Add a new one?</a></p>
        <hr>
        <?php foreach($user as $user): ?>
            <p><?php echo e($user->id); ?></p>
            <p><?php echo e($user->name); ?></p>
            <p><?php echo e($user->email); ?></p>
            <p><?php echo e($user->no_hp); ?></p>
            <p><?php echo e($user->alamat); ?></p>
            <p>
                <a href="<?php echo e(route('user.edit', $user->id)); ?>" class="btn btn-primary">Edit User</a>
                <?php //<a href="{{ route('user.delete', $user->id) }}" class="btn btn-danger">Delete User</a>?>
            </p>
            <hr>
        <?php endforeach; ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>