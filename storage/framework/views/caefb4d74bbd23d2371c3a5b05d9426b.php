
<?php $__env->startSection('content'); ?>

<div>
  <section class="mb-4">
    <a href="/prestamos" class="btn btn-primary">
      <i class="fa-solid fa-arrow-left me-2"></i>
      Volver
    </a>
  </section>

  <h1>Préstamo <span class="fst-italic">#<?php echo e($prestamo->id); ?></span></h1>

  <section class="mt-4 px-2 d-flex flex-column gap-4">
    <article>
      <h2 class="fs-5">Usuario</h2>
      <span class="text-secondary"><?php echo e($prestamo->name); ?> <b class="fst-italic">#<?php echo e($prestamo->user_id); ?></b></span>
    </article>
  
    <article>
      <h2 class="fs-5">Libro</h2>
      <span class="text-secondary"><?php echo e($prestamo->titulo); ?> <b class="fst-italic">#<?php echo e($prestamo->libro_id); ?></b></span>
    </article>
  
    <article>
      <h2 class="fs-5">Fecha préstamo</h2>
      <span class="text-secondary"><?php echo e(date('d-m-Y', strtotime($prestamo->fecha_prestamo))); ?></span>
    </article>
  
    <article>
      <h2 class="fs-5">Fecha devolución estimada</h2>
      <span class="text-secondary"><?php echo e(date('d-m-Y', strtotime($prestamo->fecha_devolucion_estimada))); ?></span>
    </article>

    <?php if($prestamo->fecha_devolucion != null): ?>
      <article>
        <h2 class="fs-5">Fecha devolución</h2>
        <span class="text-secondary"><?php echo e(date('d-m-Y', strtotime($prestamo->fecha_devolucion))); ?></span>
      </article>
    <?php endif; ?>
  
    <article>
      <h2 class="fs-5">Entregado</h2>
      <span class="text-secondary"><?php if($prestamo->entregado == 1): ?> Sí <?php else: ?> No <?php endif; ?></span>
    </article>

    <article class="d-flex gap-2">
      <a href="/prestamos/form-editar/<?php echo e($prestamo->id); ?>" class="btn btn-warning">
        <i class="fa-regular fa-pen-to-square me-2"></i>
        Editar
      </a>

      <?php if(!$prestamo->entregado): ?>
        <form action="/prestamos/entregar/<?php echo e($prestamo->id); ?>" method="POST">
          <?php echo method_field("PUT"); ?>
          <?php echo csrf_field(); ?>
          <button type="submit" name="from" value="ver_detalle" class="btn btn-success">
            <i class="fa-regular fa-hand"></i>
            Entregar
          </button>
        </form>
      <?php endif; ?>
      
      <form action="/prestamos/eliminar/<?php echo e($prestamo->id); ?>" method="POST">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Escritorio\DW\Master FullStack\9. Programación Web con Laravel\Actividades\Actividad 2\library\resources\views/prestamos/prestamos-detalle.blade.php ENDPATH**/ ?>