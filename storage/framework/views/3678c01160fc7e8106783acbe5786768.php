<?php $__env->startSection('title'); ?>
    Create Events
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
                                <a href="<?php echo e(route('event.index')); ?>" class="btn btn-dark">Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if($errors->any()): ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div><?php echo e($error); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <form action="<?php echo e(route('event.store')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Banner</label>
                                <input type="file" class="form-control" name="banner">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Event</label>
                                <input type="text" class="form-control" value="<?php echo e(old('nama_event')); ?>" name="nama_event" id="exampleFormControlInput1" placeholder="masukkan nama event">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Tanggal Event</label>
                                <input type="date" class="form-control"  value="<?php echo e(old('tanggal_event')); ?>" name="tanggal_event" id="exampleFormControlInput1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Kapasitas</label>
                                <input type="number" class="form-control" value="<?php echo e(old('kapasitas')); ?>" name="kapasitas" id="exampleFormControlInput1" placeholder="masukkan kapasitas">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">HTM</label>
                                <input type="number" class="form-control" value="<?php echo e(old('htm')); ?>" name="htm" id="exampleFormControlInput1" placeholder="Harga Tiket Masuk">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" value="<?php echo e(old('deskripsi')); ?>" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/joyazovancha/Downloads/AM 3/gigs-am/resources/views/backend/event/create.blade.php ENDPATH**/ ?>