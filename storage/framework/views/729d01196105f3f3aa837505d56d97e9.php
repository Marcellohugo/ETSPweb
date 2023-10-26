<?php $__env->startSection('title'); ?>
    Users
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="card-title">Management Users and Members</h4>
                        </div>
                        <div class="col-6 text-right">
                            <a href="<?php echo e(route('user.create')); ?>" class="btn btn-dark">Tambah User</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Name</th>
                                <th scope="col">Role Name</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Opsi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($d->id); ?></th>
                                    <td>
                                        <img width="100px" class="img-thumbnail" src="<?php if(empty($d->photo)): ?>
                                    <?php echo e(url('img/default-image.png')); ?>

                                    <?php else: ?>
                                    <?php echo e(url('')); ?>/photo/thumbnail/<?php echo e($d->photo); ?>

                                    <?php endif; ?>" alt="">
                                    </td>
                                    <td><?php echo e($d->name); ?></td>
                                    <td><?php echo e($d->role_name); ?></td>
                                    <td><?php echo e($d->phone_number); ?></td>
                                    <td><a href="<?php echo e(route('user.edit', $d->id)); ?>" class = "btn btn-primary btn-sm">Edit</a>
                                        <a href="<?php echo e(route('user.destroy', $d->id)); ?>" onclick="return confirm('are you sure?')" class = "btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/joyazovancha/Downloads/AM 3/gigs-am/resources/views/backend/user/index.blade.php ENDPATH**/ ?>