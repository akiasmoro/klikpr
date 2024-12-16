<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['url', 'name', 'image' => '']));

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

foreach (array_filter((['url', 'name', 'image' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="flex flex-col rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800">
    <?php if($image): ?>
        <div class="overflow-hidden rounded-t-lg">
            <a href="<?php echo e($url); ?>">
                <img class="transform rounded-t-lg duration-300 hover:scale-110" src="<?php echo e($image); ?>"
                    alt="<?php echo e($name); ?>">
            </a>
        </div>
    <?php endif; ?>
    <div class="mt-5 px-5">
        <a href="<?php echo e($url); ?>">
            <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-gray-300 sm:mb-4 sm:text-xl">
                <?php echo e($name); ?>

            </h5>
        </a>
    </div>
    <div class="mb-2 flex-1 px-5 text-sm font-normal sm:mb-4 sm:text-base">
        <?php echo $slot; ?>

    </div>
    <div class="px-5 pb-5 text-end">
        <a class="inline-flex items-center rounded bg-gray-200 px-3 py-2 text-sm text-gray-700 outline outline-1 outline-gray-800 hover:bg-gray-700 hover:text-gray-100 focus:outline-none"
            href="<?php echo e($url); ?>">
            View details
            <svg class="-mr-1 ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </a>
    </div>
</div>
<?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\resources\views/components/frontend/card.blade.php ENDPATH**/ ?>