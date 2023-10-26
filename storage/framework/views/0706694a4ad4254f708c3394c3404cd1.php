<?php $__env->startSection('title'); ?>
    Edit Events
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
                        <form action="<?php echo e(route('event.update',$data->id)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Banner</label>
                                <input type="file" class="form-control" name="banner">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Event</label>
                                <input type="text" class="form-control" value="<?php echo e($data->nama_event); ?>" name="nama_event" id="exampleFormControlInput1" placeholder="masukkan nama event">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Tanggal Event</label>
                                <input type="date" class="form-control" value="<?php echo e($data->tanggal_event); ?>" name="tanggal_event" id="exampleFormControlInput1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Kapasitas</label>
                                <input type="number" class="form-control" value="<?php echo e($data->kapasitas); ?>" name="kapasitas" id="exampleFormControlInput1" placeholder="masukkan kapasitas">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">HTM</label>
                                <input type="number" class="form-control" value="<?php echo e(old('htm',$data->htm)); ?>" name="htm" id="exampleFormControlInput1" placeholder="Harga Tiket Masuk">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"><?php echo $data->deskripsi; ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/joyazovancha/Downloads/AM 3/gigs-am/resources/views/backend/event/edit.blade.php ENDPATH**/ ?>