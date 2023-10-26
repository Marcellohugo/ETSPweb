<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Arctic Monkey</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav justify-content-end">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo e(route('event.index')); ?>">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('event.create')); ?>">Form</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <div class="container">
        <div class="card">
            <?php if($errors->any()): ?>
     <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div><?php echo e($error); ?></div>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
            <div class="card-body">
                <form action="<?php echo e(route('event.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Banner</label>
                        <input type="text" class="form-control" name="banner" id="exampleFormControlInput1" placeholder="masukkan banner">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Event</label>
                        <input type="text" class="form-control" name="nama_event" id="exampleFormControlInput1" placeholder="masukkan nama event">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tanggal Event</label>
                        <input type="date" class="form-control" name="tanggal_event" id="exampleFormControlInput1">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kapasitas</label>
                        <input type="number" class="form-control" name="kapasitas" id="exampleFormControlInput1" placeholder="masukkan kapasitas">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Save</button>
                </form>
 
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\Users\Lenovo\Desktop\AM\gigs-am\resources\views/backend/event/create.blade.php ENDPATH**/ ?>