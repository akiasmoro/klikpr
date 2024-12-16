<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['href' => route('home'), 'title', 'active' => '', 'target' => '_self']));

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

foreach (array_filter((['href' => route('home'), 'title', 'active' => '', 'target' => '_self']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php
$active_classes = 'border-transparent dark:border-transparent';

if ($active) {
    $active_classes = "bg-gray-200 dark:bg-gray-700 rounded sm:bg-transparent sm:rounded-none dark:sm:bg-transparent dark:sm:rounded-none border-gray-700 dark:border-gray-300 hover:opacity-75";
}
?>
<li>
    <a class="block border-b-2 px-3 py-2 sm:py-1 sm:my-0 font-semibold text-gray-800 transition duration-200 ease-in hover:border-gray-700 hover:opacity-75 dark:text-white dark:hover:border-gray-300 dark:hover:opacity-75 <?php echo e($active_classes); ?>"
        href="<?php echo e($href); ?>" target="<?php echo e($target); ?>"><?php echo e($slot); ?></a>
</li>
<?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\resources\views/components/frontend/nav-item.blade.php ENDPATH**/ ?>