<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->currentLocale())); ?>" dir="<?php echo e(language_direction()); ?>">

    <head>
        <meta charset="utf-8" />
        <link href="<?php echo e(asset('img/favicon.png')); ?>" rel="apple-touch-icon" sizes="76x76">
        <link type="image/png" href="<?php echo e(asset('img/favicon.png')); ?>" rel="icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <!-- <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(config('app.name')); ?></title> -->
        <title>Beranda | <?php echo e(config('app.name')); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?php echo e(setting('meta_description')); ?>">
        <meta name="keyword" content="<?php echo e(setting('meta_keyword')); ?>">
        <?php echo $__env->make('frontend.includes.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Shortcut Icon -->
        <link href="<?php echo e(asset('img/favicon.png')); ?>" rel="shortcut icon">
        <link type="image/ico" href="<?php echo e(asset('img/favicon.png')); ?>" rel="icon" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app-frontend.css', 'resources/js/app-frontend.js']); ?>

        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>


        <?php echo $__env->yieldPushContent('after-styles'); ?>

        <?php if (isset($component)) { $__componentOriginal5a71c2c3670795ec464153e22b9d2874 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5a71c2c3670795ec464153e22b9d2874 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.google-analytics','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('google-analytics'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5a71c2c3670795ec464153e22b9d2874)): ?>
<?php $attributes = $__attributesOriginal5a71c2c3670795ec464153e22b9d2874; ?>
<?php unset($__attributesOriginal5a71c2c3670795ec464153e22b9d2874); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5a71c2c3670795ec464153e22b9d2874)): ?>
<?php $component = $__componentOriginal5a71c2c3670795ec464153e22b9d2874; ?>
<?php unset($__componentOriginal5a71c2c3670795ec464153e22b9d2874); ?>
<?php endif; ?>
    </head>

    <body>
        <?php if (isset($component)) { $__componentOriginalc560413a08e91edcc1296f14882e3c6a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc560413a08e91edcc1296f14882e3c6a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.selected-theme','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('selected-theme'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc560413a08e91edcc1296f14882e3c6a)): ?>
<?php $attributes = $__attributesOriginalc560413a08e91edcc1296f14882e3c6a; ?>
<?php unset($__attributesOriginalc560413a08e91edcc1296f14882e3c6a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc560413a08e91edcc1296f14882e3c6a)): ?>
<?php $component = $__componentOriginalc560413a08e91edcc1296f14882e3c6a; ?>
<?php unset($__componentOriginalc560413a08e91edcc1296f14882e3c6a); ?>
<?php endif; ?>
        
        <?php echo $__env->make('frontend.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <main class="bg-white dark:bg-gray-800">
            <?php echo $__env->yieldContent('content'); ?>
        </main>

        <?php echo $__env->make('frontend.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Scripts -->
        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

        <?php echo $__env->yieldPushContent('after-scripts'); ?>
    </body>

</html>
<?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\resources\views/frontend/layouts/app.blade.php ENDPATH**/ ?>