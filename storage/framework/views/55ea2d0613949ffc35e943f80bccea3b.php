<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="p-4 text-center">
            <h1 style="font-family: 'Bebas Neue', sans-serif; font-weight: bold; text-decoration: underline;">Events Arctic Monkeys</h1>
        </div>
        <div class="row">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-3 mb-3">

                    <div class="card text-light" style="background-color: #000000">
                        <a href="<?php echo e(route('detailGigs',$d->id)); ?>">
                        <img src="<?php if(empty($d->banner)): ?>
                                    <?php echo e(url('img/default-image.png')); ?>

                                    <?php else: ?>
                                    <?php echo e(url('')); ?>/banner/thumbnail/<?php echo e($d->banner); ?>

                                    <?php endif; ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($d->nama_event); ?></h5>
                            <p class="card-text"><?php echo e(\Illuminate\Support\Str::limit($d->deskripsi, 100)); ?></p>
                        </div>
                        <ul class="list-group list-group-flush ">
                            <li class="list-group-item text-secondary text-end" style="background-color: #000000"><small><?php echo e($d->tanggal_event); ?></small></li>
                        </ul>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/fm/Downloads/AM/gigs-am/resources/views/frontend/indexEvent.blade.php ENDPATH**/ ?>