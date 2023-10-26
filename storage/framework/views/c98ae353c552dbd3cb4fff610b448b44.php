<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AM FANBASE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link href="https://fonts.cdnfonts.com/css/bebas-neue" rel="stylesheet">
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous">
</head>
<body>
<style>
    body {
        font-size: 18px; /* atur ukuran font untuk seluruh body */
    }

    .navbar-brand,
    .nav-link {
        font-size: 24px; /* atur ukuran font untuk item navbar */
    }
</style>
<nav class="navbar navbar-lg navbar-expand-lg text-light" style="background-color: #000000; height: 150px; font-family: 'Bebas Neue', sans-serif; font-weight: bold;" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('index')); ?>">AM Fanbase</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo e(route('index')); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('indexGigs')); ?>">Gigs</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <?php if(auth()->guard()->guest()): ?>
                    <?php if(Route::has('login')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                        </li>
                    <?php endif; ?>

                    <?php if(Route::has('register')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                        </li>
                    <?php endif; ?>
                <?php else: ?>
                    <?php if(Auth::check() && Auth::user()->role_name == 'Admin'): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a>
                        </li>
                    <?php endif; ?>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <?php echo e(Auth::user()->name); ?>

                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<div class=".container mb-4" style="padding-top: -200px;">
    <div id="carouselExampleRide" style="padding-bottom: -100px;" class="carousel slide" data-bs-ride="true">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo e(url('')); ?>/amberne.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

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

<div class=".container text-light" style="background-color: #000000;">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
            </a>
            <span class="mb-3 mb-md-0">&copy; 2022 Company, Inc</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="" href="#"><i class="fa fa-twitter"></i></a></li>
            <li class="ms-3"><a class="" href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="ms-3"><a class="" href="#"><i class="fa fa-instagram"></i></a></li>
        </ul>
    </footer>
</div>
</body>
</html>
<?php /**PATH /Users/joyazovancha/Downloads/AM 3/gigs-am/resources/views/home.blade.php ENDPATH**/ ?>