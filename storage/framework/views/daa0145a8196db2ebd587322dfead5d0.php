<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((["small"=>""]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((["small"=>""]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<button onclick="window.history.back();" class="btn btn-warning m-1 <?php echo e(($small=='true')? 'btn-sm' : ''); ?>" data-toggle="tooltip" title="<?php echo e(__('Cancel')); ?>"><i class="fas fa-reply fa-fw"></i>&nbsp;<?php echo ($slot != "") ? '&nbsp;' . $slot : ''; ?></button><?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\resources\views/components/backend/buttons/cancel.blade.php ENDPATH**/ ?>