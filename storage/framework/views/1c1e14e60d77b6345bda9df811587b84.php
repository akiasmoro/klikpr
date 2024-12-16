<?php $__env->startSection('title'); ?>
    <?php echo e($$module_name_singular->name); ?> - <?php echo e(__($module_title)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal885417cb62579f505f388b228557db34 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal885417cb62579f505f388b228557db34 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.header-block','data' => ['title' => __($$module_name_singular->name)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.header-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__($$module_name_singular->name))]); ?>
         <?php $__env->slot('sub_title', null, []); ?> 
            <p class="mb-8 leading-relaxed">
                <a class="mr-2 rounded bg-gray-200 px-3 py-1 text-sm font-semibold text-gray-800 outline outline-1 outline-gray-800 hover:bg-gray-100 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600"
                    href="<?php echo e(route('frontend.' . $module_name . '.index')); ?>">
                    <?php echo e(__($module_title)); ?>

                </a>
            </p>
         <?php $__env->endSlot(); ?>

        <p class="mb-8 leading-relaxed">
            <?php echo e($$module_name_singular->description); ?>

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



    <section class="bg-white p-6 text-gray-600 dark:bg-gray-700 dark:text-gray-300 sm:p-20">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-1">
            <div class="text-center">
                <?php echo e($$module_name_singular->description); ?>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\Modules/Category/Resources/views/frontend/categories/show.blade.php ENDPATH**/ ?>