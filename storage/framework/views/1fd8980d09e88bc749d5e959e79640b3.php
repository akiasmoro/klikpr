<?php
$required = (Str::contains($field['rules'], 'required')) ? "required" : "";
$required_mark = ($required != "") ? '<span class="text-danger"> <strong>*</strong> </span>' : '';
?>

<div class="form-group mt-3 <?php echo e($errors->has($field['name']) ? ' has-error' : ''); ?>">
    <div class="checkbox">
        <label>
            <input type='hidden' value='0' name='<?php echo e($field['name']); ?>' class='form-label'>
            <input name=" <?php echo e($field['name']); ?>" value="<?php echo e(\Illuminate\Support\Arr::get($field, 'value', '1')); ?>" type="checkbox" <?php if(old($field['name'], setting($field['name']))): ?> checked="checked" <?php endif; ?>>
            <?php echo e($field['label']); ?>

        </label> <?php echo $required_mark; ?>


        <?php if($errors->has($field['name'])): ?> <small class="help-block"><?php echo e($errors->first($field['name'])); ?></small> <?php endif; ?>
    </div>
</div><?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\resources\views/backend/settings/fields/checkbox.blade.php ENDPATH**/ ?>