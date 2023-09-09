
<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-center">
  <div class="w-50 bg-body-secondary p-5 rounded-4 border border-success-subtle">
    <section class="mb-4">
      <a href="/prestamos" class="link-secondary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
        <i class="fa-solid fa-arrow-left me-2"></i>
        Volver
      </a>
    </section>

    <h1 class="mb-5">Crear nuevo prestamo</h1>
    <form action="/prestamos/crear" method="POST">
      <?php echo csrf_field(); ?>

      <div class="mb-3">
        <label for="user_id" class="form-label">Usuario</label>
        <select class="form-select <?php $__errorArgs = ['user_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                id="user_id" 
                name="user_id">
          <option <?php if(old('user_id') == ""): ?> selected <?php endif; ?>
                  value="">
            Selecciona un usuario
          </option>

          <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option <?php if(old('user_id') == $user->id): ?> selected <?php endif; ?>
                    value="<?php echo e($user->id); ?>">
              <?php echo e($user->name); ?>

            </option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <?php $__errorArgs = ['user_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="mt-3 alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <div class="mb-3">
        <label for="libro_id" class="form-label">Libro</label>
        <select class="form-select <?php $__errorArgs = ['libro_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                id="libro_id" 
                name="libro_id">
          <option <?php if(old('libro_id') == ""): ?> selected <?php endif; ?>
                  value="">
            Selecciona un libro
          </option>

          <?php $__currentLoopData = $libros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $libro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option <?php if(old('libro_id') == $libro->id): ?> selected <?php endif; ?>
                    value="<?php echo e($libro->id); ?>">
              <?php echo e($libro->titulo); ?>

              <?php if(!$libro->disponible): ?>
                - No disponible
              <?php endif; ?>
            </option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
               
        <?php $__errorArgs = ['libro_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="mt-3 alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <div class="mb-3">
        <label for="fecha_prestamo" class="form-label">Fecha préstamo</label>
        <input type="date"
               class="form-control <?php $__errorArgs = ['fecha_prestamo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
               name="fecha_prestamo"
               id="fecha_prestamo"
               value="<?php echo e(old('fecha_prestamo')); ?>">

        <?php $__errorArgs = ['fecha_prestamo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="mt-3 alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <div class="mb-3">
        <label for="fecha_devolucion_estimada" class="form-label">Fecha devolución estimada</label>
        <input type="date"
               class="form-control <?php $__errorArgs = ['fecha_devolucion_estimada'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
               name="fecha_devolucion_estimada"
               id="fecha_devolucion_estimada"
               value="<?php echo e(old('fecha_devolucion_estimada')); ?>">

        <?php $__errorArgs = ['fecha_devolucion_estimada'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="mt-3 alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <div class="mb-3">
        <span>Entregado:</span>
        <div class="mt-2 form-check">
          <input class="form-check-input <?php $__errorArgs = ['entregado'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                 type="radio"
                 name="entregado"
                 id="entregado-si"
                 value="1">
          <label class="form-check-label" for="entregado-si">Sí</label>
        </div>
        <div class="form-check">
          <input class="form-check-input <?php $__errorArgs = ['entregado'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                 type="radio"
                 name="entregado"
                 id="entregado-no"
                 value="0" checked>
          <label class="form-check-label" for="entregado-no">No</label>
        </div>

        <?php $__errorArgs = ['entregado'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="mt-3 alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <button type="submit" class="btn btn-success mt-3">Crear</button>
    </form>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Escritorio\DW\Master FullStack\9. Programación Web con Laravel\Actividades\Actividad 2\library\resources\views/prestamos/form-crear.blade.php ENDPATH**/ ?>