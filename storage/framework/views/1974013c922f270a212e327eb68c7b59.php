<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->currentLocale())); ?>" dir="<?php echo e(language_direction()); ?>">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link type="image/png" href="<?php echo e(asset('img/favicon.png')); ?>" rel="icon">
        <link href="<?php echo e(asset('img/favicon.png')); ?>" rel="apple-touch-icon" sizes="76x76">
        <meta name="keyword" content="<?php echo e(setting('meta_keyword')); ?>">
        <meta name="description" content="<?php echo e(setting('meta_description')); ?>">

        <!-- Shortcut Icon -->
        <link href="<?php echo e(asset('img/favicon.png')); ?>" rel="shortcut icon">
        <link type="image/ico" href="<?php echo e(asset('img/favicon.png')); ?>" rel="icon" />


        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(config('app.name')); ?></title>

        <script src="<?php echo e(asset('vendor/jquery/jquery-3.6.4.min.js')); ?>"></script>

        <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app-backend.scss', 'resources/js/app-backend.js']); ?>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+Bengali+UI&display=swap" rel="stylesheet" />
        
        <style>
            body {
                font-family: Ubuntu, "Noto Sans Bengali UI", Arial, Helvetica, sans-serif
            }
        </style>

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

        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>


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
        
        <!-- Sidebar -->
        <?php echo $__env->make('backend.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /Sidebar -->

        <div class="wrapper d-flex flex-column min-vh-100">
          
          
          <?php echo $__env->make('backend.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          
          <div class="body flex-grow-1">
                <div class="container-fluid">

                    <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <!-- Errors block -->
                    <?php echo $__env->make('backend.includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- / Errors block -->

                    <!-- Main content block -->
                    <?php echo $__env->yieldContent('content'); ?>
                    <!-- / Main content block -->

                </div>
            </div>            

            
            <?php if (isset($component)) { $__componentOriginal796729cd9a557f48d5e833684c149ad6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal796729cd9a557f48d5e833684c149ad6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.includes.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.includes.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal796729cd9a557f48d5e833684c149ad6)): ?>
<?php $attributes = $__attributesOriginal796729cd9a557f48d5e833684c149ad6; ?>
<?php unset($__attributesOriginal796729cd9a557f48d5e833684c149ad6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal796729cd9a557f48d5e833684c149ad6)): ?>
<?php $component = $__componentOriginal796729cd9a557f48d5e833684c149ad6; ?>
<?php unset($__componentOriginal796729cd9a557f48d5e833684c149ad6); ?>
<?php endif; ?>
        </div>

        <!-- Scripts -->
        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>


        <?php echo $__env->yieldPushContent('after-scripts'); ?>
        <!-- / Scripts -->

    </body>

</html>
<?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\resources\views/backend/layouts/app.blade.php ENDPATH**/ ?>