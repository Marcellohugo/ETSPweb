<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>
<body>
    
    <nav class="navbar navbar-center-lg navbar-light bg-light">
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
        <div class="p-3">
          <a href="<?php echo e(route('event.create')); ?>" class="btn btn-primary"> Tambah Data</a>
        </div>
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Banner</th>
                  <th scope="col">Nama Event</th>
                  <th scope="col">Tanggal Event</th>
                  <th scope="col">Kapasitas</th>
                  <th scope="col">Deskripsi</th>
                  <th scope="col">Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <th scope="row"><?php echo e($d->id); ?></th>
                <td><?php echo e($d->banner); ?></td>
                <td><?php echo e($d->nama_event); ?></td>
                <td><?php echo e($d->tanggal_event); ?></td>
                <td><?php echo e($d->kapasitas); ?></td>
                <td><?php echo e($d->deskripsi); ?></td>
                <td><a href="<?php echo e(route('event.edit', $d->id)); ?>" class = "btn btn-primary">Edit</a>
                    <a href="<?php echo e(route('event.destroy', $d->id)); ?>" class = "btn btn-danger">Hapus</a>
                    <a href="<?php echo e(route('event.show', $d->id)); ?>" class = "btn btn-primary">Detail</a>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            </table>
      </div>

</body>
</html><?php /**PATH C:\Users\Lenovo\Desktop\AM\gigs-am\resources\views/backend/event/index.blade.php ENDPATH**/ ?>