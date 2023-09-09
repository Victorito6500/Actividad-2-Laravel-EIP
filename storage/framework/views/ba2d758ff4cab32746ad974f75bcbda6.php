
<?php $__env->startSection('content'); ?>

<div>
  <form class="mb-4 d-flex gap-3" action="/prestamos" method="POST">
    <?php echo csrf_field(); ?>
  
    <input style="width: 400px;" class="form-control" type="search" placeholder="Búsqueda por usuario..." name="busqueda">
    <button class="btn btn-outline-primary" type="submit">
      <i class="fa-solid fa-magnifying-glass me-2"></i>
      Buscar
    </button>
  </form>

  <?php if(isset($busqueda)): ?>
  <div class="mb-5">
    <span class="bg-body-secondary border border-success rounded-pill px-2 py-2">
      "<?php echo e($busqueda); ?>"
      <a href="/prestamos" class="ms-2"><i class="fa-solid fa-xmark text-success"></i></a>
    </span>
  </div>
  <?php endif; ?>
</div>

<div>
  <a href="/prestamos/form-crear" class="btn btn-outline-success">
    <i class="fa-solid fa-plus me-2"></i>
    Crear nuevo préstamo
  </a>
</div>

<div class="mt-4 overflow-hidden rounded-3">
  <table class="table table-striped table-hover mb-0">
    <thead>
      <tr class="table-success">
        <th class="text-center">Usuario</th>
        <th class="text-center">Libro</th>
        <th class="text-center">Fecha Préstamo</th>
        <th class="text-center"></th>
      </tr>
    </thead>
    <tbody>
      <?php $__empty_1 = true; $__currentLoopData = $prestamos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prestamo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <tr>
        <td class="align-middle"><?php echo e($prestamo->name); ?></td>
        <td class="align-middle"><?php echo e($prestamo->titulo); ?></td>
        <td class="text-center align-middle"><?php echo e(date('d-m-Y', strtotime($prestamo->fecha_prestamo))); ?></td>
        <td class="d-flex align-items-center justify-content-end gap-3">
          <?php if($prestamo->entregado): ?>
            <span>Entregado</span>
          <?php else: ?>
            <a href="/prestamos/form-editar/<?php echo e($prestamo->id); ?>" class="btn btn-warning">
              <i class="fa-regular fa-pen-to-square me-2"></i>
              Editar
            </a>

            <form action="/prestamos/entregar/<?php echo e($prestamo->id); ?>" method="POST">
              <?php echo method_field("PUT"); ?>
              <?php echo csrf_field(); ?>
              <button type="submit" class="btn btn-success">
                <i class="fa-regular fa-hand"></i>
                Entregar
              </button>
            </form>
          <?php endif; ?>

          <a href="/prestamos/detalle/<?php echo e($prestamo->id); ?>" class="btn btn-primary">
            <i class="fa-regular fa-eye me-2"></i>
            Ver detalles
          </a>
          
          <form action="/prestamos/eliminar/<?php echo e($prestamo->id); ?>" method="POST">
            <?php echo method_field("DELETE"); ?>
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-danger">
              <i class="fa-regular fa-trash-can me-2"></i>
              Eliminar
            </button>
          </form>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
      <tr>
        <td colspan=7 class="text-center">No existe ningún préstamo</td>
      </tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Escritorio\DW\Master FullStack\9. Programación Web con Laravel\Actividades\Actividad 2\library\resources\views/prestamos/prestamos-tabla.blade.php ENDPATH**/ ?>