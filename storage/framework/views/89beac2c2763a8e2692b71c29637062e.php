<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title' => app_name(), 'sub_title' => '']));

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

foreach (array_filter((['title' => app_name(), 'sub_title' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<section class="bg-gray-100 py-20 text-gray-600 dark:bg-gray-800 dark:text-gray-400">
    <div class="container mx-auto flex flex-col items-center justify-center px-5">
        <div class="w-full text-center lg:w-2/3">
            <?php echo $sub_title; ?>


            <h1 class="mb-4 text-3xl font-medium text-gray-800 dark:text-gray-200 sm:text-4xl">
                <?php echo $title; ?>

            </h1>

            <?php echo $slot; ?>


            <?php echo $__env->make('frontend.includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</section>
<?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\resources\views/components/frontend/header-block.blade.php ENDPATH**/ ?>