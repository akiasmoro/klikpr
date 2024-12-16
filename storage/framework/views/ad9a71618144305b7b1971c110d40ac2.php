<?php $__env->startSection('title'); ?>
    <?php echo e(__($module_title)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal885417cb62579f505f388b228557db34 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal885417cb62579f505f388b228557db34 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.header-block','data' => ['title' => __($module_title)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.header-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__($module_title))]); ?>
        <p class="mb-8 leading-relaxed">
            The list of <?php echo e(__($module_name)); ?>.
        </p>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal885417cb62579f505f388b228557db34)): ?>
<?php $attributes = $__attributesOriginal885417cb62579f505f388b228557db34; ?>
<?php unset($__attributesOriginal885417cb62579f505f388b228557db34); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal885417cb62579f505f388b228557db34)): ?>
<?php $component = $__componentOriginal885417cb62579f505f388b228557db34; ?>
<?php unset($__componentOriginal885417cb62579f505f388b228557db34); ?>
<?php endif; ?>

    <section class="bg-white p-6 text-gray-600 dark:bg-gray-700 sm:p-20">
        <div class="grid grid-cols-2 gap-6 sm:grid-cols-3">
            <?php $__currentLoopData = $$module_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $$module_name_singular): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $details_url = route("frontend.$module_name.show", [
                        encode_id($$module_name_singular->id),
                        $$module_name_singular->slug,
                    ]);
                ?>

                <?php if (isset($component)) { $__componentOriginal0a3246743b024a30070683ed74d4e791 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0a3246743b024a30070683ed74d4e791 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.card','data' => ['url' => $details_url,'name' => $$module_name_singular->name]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($details_url),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($$module_name_singular->name)]); ?>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        <?php echo e($$module_name_singular->description); ?>

                    </p>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0a3246743b024a30070683ed74d4e791)): ?>
<?php $attributes = $__attributesOriginal0a3246743b024a30070683ed74d4e791; ?>
<?php unset($__attributesOriginal0a3246743b024a30070683ed74d4e791); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0a3246743b024a30070683ed74d4e791)): ?>
<?php $component = $__componentOriginal0a3246743b024a30070683ed74d4e791; ?>
<?php unset($__componentOriginal0a3246743b024a30070683ed74d4e791); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="d-flex justify-content-center w-100 mt-3">
            <?php echo e($$module_name->links()); ?>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\Modules/Tag/Resources/views/frontend/tags/index.blade.php ENDPATH**/ ?>