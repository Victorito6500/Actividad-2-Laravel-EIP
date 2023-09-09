
<?php $__env->startSection('content'); ?>

<div>
  <section class="mb-4">
    <a href="/libros" class="btn btn-primary">
      <i class="fa-solid fa-arrow-left me-2"></i>
      Volver
    </a>
  </section>

  <h1><q><?php echo e($libro->titulo); ?></q></h1>

  <section class="mt-4 px-2 d-flex flex-column gap-4">
    <article>
      <h2 class="fs-5">ID</h2>
      <span class="text-secondary"><?php echo e($libro->id); ?></span>
    </article>
  
    <article>
      <h2 class="fs-5">Autor</h2>
      <span class="text-secondary"><?php echo e($libro->autor); ?></span>
    </article>
  
    <article>
      <h2 class="fs-5">Año publicación</h2>
      <span class="text-secondary"><?php echo e($libro->anio_publicacion); ?></span>
    </article>
  
    <article>
      <h2 class="fs-5">Género</h2>
      <span class="text-secondary"><?php echo e($libro->genero); ?></span>
    </article>
  
    <article>
      <h2 class="fs-5">Disponible</h2>
      <span class="text-secondary"><?php if($libro->disponible == 1): ?> Sí <?php else: ?> No <?php endif; ?></span>
    </article>

    <article class="d-flex gap-2">
      <a href="/libros/form-editar/<?php echo e($libro->id); ?>" class="btn btn-warning">
        <i class="fa-regular fa-pen-to-square me-2"></i>
        Editar
      </a>
      <form action="/libros/eliminar/<?php echo e($libro->id); ?>" method="POST">
        <?php echo method_field("DELETE"); ?>
        <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-danger">
          <i class="fa-regular fa-trash-can me-2"></i>
          Eliminar
        </button>
      </form>
    </article>
  </section>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Escritorio\DW\Master FullStack\9. Programación Web con Laravel\Actividades\Actividad 2\library\resources\views/libros/libros-detalle.blade.php ENDPATH**/ ?>