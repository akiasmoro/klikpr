<footer class="bg-gray-100 p-4 dark:bg-gray-800 sm:p-20">
    <div class="mx-auto max-w-screen-xl text-center">
        <a class="flex items-center justify-center text-2xl font-semibold text-gray-900 dark:text-white" href="/">
            <img class="h-10" src="<?php echo e(asset('img/logo-with-text.jpg')); ?>" alt="<?php echo e(app_name()); ?> Logo" />
        </a>
        <p class="mx-auto my-6 text-gray-500 dark:text-gray-400 sm:w-1/2">
            <!-- <?php echo setting('meta_description'); ?> -->
        </p>
        <ul class="mb-6 flex flex-wrap items-center justify-center text-gray-900 dark:text-white">
            <li>
                <a class="mx-2 hover:underline md:mx-3" href="#"><?php echo app('translator')->get('About'); ?></a>
            </li>
            <li>
                <a class="mx-2 hover:underline md:mx-3" href="<?php echo e(route('privacy')); ?>" wire:navigate.hover><?php echo app('translator')->get('Privacy'); ?></a>
            </li>
            <li>
                <a class="mx-2 hover:underline md:mx-3" href="<?php echo e(route('terms')); ?>" wire:navigate.hover><?php echo app('translator')->get('Terms'); ?></a>
            </li>
            <li>
                <a class="mx-2 hover:underline md:mx-3" href="#"><?php echo app('translator')->get('Contact'); ?></a>
            </li>
        </ul>

        <?php if (isset($component)) { $__componentOriginal417f77227274d84f0a38bdd053e1fd39 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal417f77227274d84f0a38bdd053e1fd39 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.social.all-social-url','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.social.all-social-url'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal417f77227274d84f0a38bdd053e1fd39)): ?>
<?php $attributes = $__attributesOriginal417f77227274d84f0a38bdd053e1fd39; ?>
<?php unset($__attributesOriginal417f77227274d84f0a38bdd053e1fd39); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal417f77227274d84f0a38bdd053e1fd39)): ?>
<?php $component = $__componentOriginal417f77227274d84f0a38bdd053e1fd39; ?>
<?php unset($__componentOriginal417f77227274d84f0a38bdd053e1fd39); ?>
<?php endif; ?>

        <!-- <?php if (isset($component)) { $__componentOriginal3db9927c05765721f25c0f0294e313da = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3db9927c05765721f25c0f0294e313da = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.footer-license','data' => ['license' => 'cc-by-sa']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.footer-license'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['license' => 'cc-by-sa']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3db9927c05765721f25c0f0294e313da)): ?>
<?php $attributes = $__attributesOriginal3db9927c05765721f25c0f0294e313da; ?>
<?php unset($__attributesOriginal3db9927c05765721f25c0f0294e313da); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3db9927c05765721f25c0f0294e313da)): ?>
<?php $component = $__componentOriginal3db9927c05765721f25c0f0294e313da; ?>
<?php unset($__componentOriginal3db9927c05765721f25c0f0294e313da); ?>
<?php endif; ?> -->

        <?php if (isset($component)) { $__componentOriginalaa2d4200cc2563d33cad3c8e0b7d903c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa2d4200cc2563d33cad3c8e0b7d903c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.footer-credit','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.footer-credit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaa2d4200cc2563d33cad3c8e0b7d903c)): ?>
<?php $attributes = $__attributesOriginalaa2d4200cc2563d33cad3c8e0b7d903c; ?>
<?php unset($__attributesOriginalaa2d4200cc2563d33cad3c8e0b7d903c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa2d4200cc2563d33cad3c8e0b7d903c)): ?>
<?php $component = $__componentOriginalaa2d4200cc2563d33cad3c8e0b7d903c; ?>
<?php unset($__componentOriginalaa2d4200cc2563d33cad3c8e0b7d903c); ?>
<?php endif; ?>
    </div>
</footer>
<?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\resources\views/frontend/includes/footer.blade.php ENDPATH**/ ?>