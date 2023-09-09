
<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-center">
  <div class="w-50 bg-body-secondary p-5 rounded-4 border border-success-subtle">
    <section class="mb-4">
      <a href="/libros" class="link-secondary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
        <i class="fa-solid fa-arrow-left me-2"></i>
        Volver
      </a>
    </section>

    <h1 class="mb-5">Editar libro</h1>
    <form action="/libros/editar" method="POST">
      <?php echo method_field("PUT"); ?>
      <?php echo csrf_field(); ?>

      <input type="hidden" name="id" value="<?php echo e($libro->id); ?>">

      <div class="mb-3">
        <label for="titulo" class="form-label">Título</label>
        <input type="text" 
               class="form-control <?php $__errorArgs = ['titulo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
               name="titulo"
               id="titulo"
               value="<?php echo e($libro->titulo); ?>">

        <?php $__errorArgs = ['titulo'];
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
        <label for="autor" class="form-label">Autor</label>
        <input type="text"
               class="form-control <?php $__errorArgs = ['autor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
               name="autor"
               id="autor"
               value="<?php echo e($libro->autor); ?>">
               
        <?php $__errorArgs = ['autor'];
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
        <label for="anio_publicacion" class="form-label">Año publicación</label>
        <input type="text"
               class="form-control <?php $__errorArgs = ['anio_publicacion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
               name="anio_publicacion"
               id="anio_publicacion"
               value="<?php echo e($libro->anio_publicacion); ?>">

        <?php $__errorArgs = ['anio_publicacion'];
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
        <label for="genero" class="form-label">Género</label>
        <input type="text"
               class="form-control <?php $__errorArgs = ['genero'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
               name="genero"
               id="genero"
               value="<?php echo e($libro->genero); ?>">

        <?php $__errorArgs = ['genero'];
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
        <span>Disponible:</span>
        <div class="mt-2 form-check">
          <input class="form-check-input <?php $__errorArgs = ['disponible'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                 type="radio"
                 name="disponible"
                 id="disponible-si"
                 value="1"
                 <?php if($libro->disponible): ?> checked <?php endif; ?>>
          <label class="form-check-label" for="disponible-si">Sí</label>
        </div>
        <div class="form-check">
          <input class="form-check-input <?php $__errorArgs = ['disponible'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                 type="radio"
                 name="disponible"
                 id="disponible-no"
                 value="0"
                 <?php if(!$libro->disponible): ?> checked <?php endif; ?>>
          <label class="form-check-label" for="disponible-no">No</label>
        </div>

        <?php $__errorArgs = ['disponible'];
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

      <button type="submit" class="btn btn-success mt-3">Editar</button>
    </form>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Escritorio\DW\Master FullStack\9. Programación Web con Laravel\Actividades\Actividad 2\library\resources\views/libros/form-editar.blade.php ENDPATH**/ ?>