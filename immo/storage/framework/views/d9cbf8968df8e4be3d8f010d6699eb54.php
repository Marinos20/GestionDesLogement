<?php
$label ??= null;
$type ??= 'text';
$class ??= null ;
$name ??= '';
$value ??= '';

?>

<div class="<?php echo \Illuminate\Support\Arr::toCssClasses(["form-group" ,$class ]); ?>" >
    <label for="<?php echo e($name); ?>"><?php echo e($label); ?></label>
    <input class="form-control  <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="<?php echo e($type); ?>" id="<?php echo e($name); ?>"  name="<?php echo e($name); ?>" value="<?php echo e(old($name , $value )); ?>">
    <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="invalid-feedback">""
        <?php echo e($message); ?>

    </div>

    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div><?php /**PATH /home/marinos/Bureau/marinos/immo/resources/views/shared/input.blade.php ENDPATH**/ ?>