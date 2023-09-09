<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e(config('app.name')); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2372df6e61.js" crossorigin="anonymous"></script>
    <style>
        *{
            font-family: 'Rubik', sans-serif;
        }
    </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-success-subtle">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center me-5" href="/">
        <img src="<?php echo e(asset('images/libros.png')); ?>" alt="logo">
        <span class="ms-3 fs-3">Library</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?php echo e(request()->is('/') ? 'active fw-semibold' : ''); ?>" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(request()->is('libros*') ? 'active fw-semibold' : ''); ?>" href="/libros">Libros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(request()->is('prestamos*') ? 'active fw-semibold' : ''); ?>" href="/prestamos">Prestamos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container py-5">
      <?php echo $__env->yieldContent('content'); ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH E:\Escritorio\DW\Master FullStack\9. Programación Web con Laravel\Actividades\Actividad 2\library\resources\views/layouts/app.blade.php ENDPATH**/ ?>