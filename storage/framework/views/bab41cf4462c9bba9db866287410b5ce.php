
<?php $__env->startSection('content'); ?>

<div>
  <form class="mb-4 d-flex gap-3" action="/libros" method="POST">
    <?php echo csrf_field(); ?>
  
    <input style="width: 400px;" class="form-control" type="search" placeholder="Búsqueda por nombre..." name="busqueda">
    <button class="btn btn-outline-primary" type="submit">
      <i class="fa-solid fa-magnifying-glass me-2"></i>
      Buscar
    </button>
  </form>

  <?php if(isset($busqueda)): ?>
  <div class="mb-5">
    <span class="bg-body-secondary border border-success rounded-pill px-2 py-2">
      "<?php echo e($busqueda); ?>"
      <a href="/libros" class="ms-2"><i class="fa-solid fa-xmark text-success"></i></a>
    </span>
  </div>
  <?php endif; ?>
</div>

<div>
  <a href="/libros/form-crear" class="btn btn-outline-success">
    <i class="fa-solid fa-plus me-2"></i>
    Crear nuevo libro
  </a>
</div>

<div class="mt-4 overflow-hidden rounded-3">
  <table class="table table-striped table-hover mb-0">
    <thead>
      <tr class="table-success">
        <th class="text-center">Título</th>
        <th class="text-center">Disponible</th>
        <th class="text-center"></th>
      </tr>
    </thead>
    <tbody>
      <?php $__empty_1 = true; $__currentLoopData = $libros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $libro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <tr>
        <td class="align-middle"><?php echo e($libro->titulo); ?></td>
        <td class="align-middle text-center"><?php if($libro->disponible === 1): ?> Sí <?php else: ?> No <?php endif; ?></td>
        <td class="d-flex align-items-center justify-content-end gap-3">
          <a href="/libros/detalle/<?php echo e($libro->id); ?>" class="btn btn-primary">
            <i class="fa-regular fa-eye me-2"></i>
            Ver detalles
          </a>
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
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
      <tr>
        <td colspan=7 class="text-center">No existe ningún libro</td>
      </tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Escritorio\DW\Master FullStack\9. Programación Web con Laravel\Actividades\Actividad 2\library\resources\views/libros/libros-tabla.blade.php ENDPATH**/ ?>