<?php $__env->startSection('title'); ?>
    Events
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="card-title">Arctic Monkeys Events</h4>
                        </div>
                        <div class="col-6 text-right">
                            <a href="<?php echo e(route('event.create')); ?>" class="btn btn-dark">Tambah Event</a>
                        </div>
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
                                <th scope="col">Opsi</th>
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
                                    <td><a href="<?php echo e(route('event.edit', $d->id)); ?>" class = "btn btn-primary btn-sm">Edit</a>
                                        <a href="<?php echo e(route('event.destroy', $d->id)); ?>" onclick="return confirm('are you sure?')" class = "btn btn-danger btn-sm">Hapus</a>
                                        <a href="<?php echo e(route('event.show', $d->id)); ?>" class = "btn btn-info btn-sm">Detail</a>
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

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/fm/Downloads/AM/gigs-am/resources/views/backend/event/index.blade.php ENDPATH**/ ?>