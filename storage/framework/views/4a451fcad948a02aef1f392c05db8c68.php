<?php $__env->startSection('title'); ?>
    Dashboard
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                        <div class="text-center">
                            <h3 class="card-title">Event In The Nearest Future</h3>
                        </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Banner</th>
                                <th scope="col">Event Name</th>
                                <th scope="col">Event Date</th>
                                <th scope="col">Capacity</th>
                                <th scope="col">HTM</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($d->id); ?></th>
                                    <td>
                                        <img width="100px" class="img-thumbnail" src="<?php if(empty($d->banner)): ?>
                                    <?php echo e(url('img/default-image.png')); ?>

                                    <?php else: ?>
                                    <?php echo e(url('')); ?>/banner/thumbnail/<?php echo e($d->banner); ?>

                                    <?php endif; ?>" alt="">
                                    </td>
                                    <td><?php echo e($d->nama_event); ?></td>
                                    <td><?php echo e($d->tanggal_event); ?></td>
                                    <td><?php echo e($d->kapasitas); ?></td>
                                    <td> Rp. <?php echo number_format($d->htm,0,',','.'); ?></td>
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

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/fm/Downloads/AM/gigs-am/resources/views/backend/dashboard.blade.php ENDPATH**/ ?>