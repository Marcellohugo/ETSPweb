<?php $__env->startSection('title'); ?>
    Show Events
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>

        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body" style="display: flex; justify-content: center;">
                        <img width="300px" class="img-thumbnail" src="<?php if(empty($data->banner)): ?>
                        <?php echo e(url('img/default-image.png')); ?>

                    <?php else: ?>
                        <?php echo e(url('')); ?>/banner/<?php echo e($data->banner); ?>

                    <?php endif; ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h3>Detail Event</h3>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <a href="<?php echo e(route('event.index')); ?>" class="btn btn-primary btn-sm">Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Information</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Nama Event</td>
                                    <td><?php echo e($data->nama_event); ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Event</td>
                                    <td><?php echo e($data->tanggal_event); ?></td>
                                </tr>
                                <tr>
                                    <td>Kapasitas</td>
                                    <td><?php echo e($data->kapasitas); ?></td>
                                </tr>
                                <tr>
                                    <td>HTM</td>
                                    <td>Rp. <?php echo number_format($data->htm,0,',','.'); ?></td>
                                </tr>
                                <tr>
                                    <td>Deskripsi</td>
                                    <td><?php echo e($data->deskripsi); ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/fm/Downloads/AM/gigs-am/resources/views/backend/event/show.blade.php ENDPATH**/ ?>