
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12 text-center pt-5">
        <h1 class="display-one mt-5"><?php echo e(config('app.name')); ?></h1>
        <p>Aquí podrás crear, ver, editar y eliminar libros y préstamos</p>
        <div>
          <a href="/libros" class="btn btn-outline-success">Ver libros</a>
          <a href="/prestamos" class="btn btn-outline-success">Ver préstamos</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Escritorio\DW\Master FullStack\9. Programación Web con Laravel\Actividades\Actividad 2\library\resources\views/home.blade.php ENDPATH**/ ?>