<?php $__env->startSection('title'); ?>
    <?php echo e(__($module_action)); ?> <?php echo e(__($module_title)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumbs'); ?>
    <?php if (isset($component)) { $__componentOriginal73d065ab05177f56255c078a05ab5686 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73d065ab05177f56255c078a05ab5686 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.breadcrumbs','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php if (isset($component)) { $__componentOriginal5e5b40e973d9c7c18a583cb81079b74e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5e5b40e973d9c7c18a583cb81079b74e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.breadcrumb-item','data' => ['type' => 'active','icon' => ''.e($module_icon).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.breadcrumb-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'active','icon' => ''.e($module_icon).'']); ?><?php echo e(__($module_title)); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5e5b40e973d9c7c18a583cb81079b74e)): ?>
<?php $attributes = $__attributesOriginal5e5b40e973d9c7c18a583cb81079b74e; ?>
<?php unset($__attributesOriginal5e5b40e973d9c7c18a583cb81079b74e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5e5b40e973d9c7c18a583cb81079b74e)): ?>
<?php $component = $__componentOriginal5e5b40e973d9c7c18a583cb81079b74e; ?>
<?php unset($__componentOriginal5e5b40e973d9c7c18a583cb81079b74e); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73d065ab05177f56255c078a05ab5686)): ?>
<?php $attributes = $__attributesOriginal73d065ab05177f56255c078a05ab5686; ?>
<?php unset($__attributesOriginal73d065ab05177f56255c078a05ab5686); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73d065ab05177f56255c078a05ab5686)): ?>
<?php $component = $__componentOriginal73d065ab05177f56255c078a05ab5686; ?>
<?php unset($__componentOriginal73d065ab05177f56255c078a05ab5686); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <?php if (isset($component)) { $__componentOriginal57a22d33ea7984d606412297cfe33b67 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal57a22d33ea7984d606412297cfe33b67 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.section-header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <i class="<?php echo e($module_icon); ?>"></i> <?php echo e(__($module_title)); ?> <small
                    class="text-muted"><?php echo e(__($module_action)); ?></small>

                 <?php $__env->slot('toolbar', null, []); ?> 
                    <?php if (isset($component)) { $__componentOriginal9ea0105027514645b96ba9a83bc7d3f4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ea0105027514645b96ba9a83bc7d3f4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.buttons.create','data' => ['title' => ''.e(__('Create')).' '.e(ucwords(Str::singular($module_name))).'','route' => ''.e(route("backend.$module_name.create")).'','small' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.buttons.create'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Create')).' '.e(ucwords(Str::singular($module_name))).'','route' => ''.e(route("backend.$module_name.create")).'','small' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ea0105027514645b96ba9a83bc7d3f4)): ?>
<?php $attributes = $__attributesOriginal9ea0105027514645b96ba9a83bc7d3f4; ?>
<?php unset($__attributesOriginal9ea0105027514645b96ba9a83bc7d3f4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ea0105027514645b96ba9a83bc7d3f4)): ?>
<?php $component = $__componentOriginal9ea0105027514645b96ba9a83bc7d3f4; ?>
<?php unset($__componentOriginal9ea0105027514645b96ba9a83bc7d3f4); ?>
<?php endif; ?>
                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal57a22d33ea7984d606412297cfe33b67)): ?>
<?php $attributes = $__attributesOriginal57a22d33ea7984d606412297cfe33b67; ?>
<?php unset($__attributesOriginal57a22d33ea7984d606412297cfe33b67); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal57a22d33ea7984d606412297cfe33b67)): ?>
<?php $component = $__componentOriginal57a22d33ea7984d606412297cfe33b67; ?>
<?php unset($__componentOriginal57a22d33ea7984d606412297cfe33b67); ?>
<?php endif; ?>

            <div class="row">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table-hover table-bordered table">
                            <thead>
                                <tr>
                                    <th><?php echo e(__("labels.backend.$module_name.fields.name")); ?></th>
                                    <th><?php echo e(__("labels.backend.$module_name.fields.permissions")); ?></th>
                                    <th class="text-end"><?php echo e(__('labels.backend.action')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $$module_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module_name_singular): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <strong>
                                                <?php echo e($module_name_singular->name); ?>

                                            </strong>
                                        </td>
                                        <td>
                                            <ul>
                                                <?php $__currentLoopData = $module_name_singular->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><?php echo e($permission->name); ?></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </td>
                                        <td class="text-end">
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_' . $module_name)): ?>
                                                <?php if (isset($component)) { $__componentOriginal2069d544d3cc5860e4d89c6ceb57fc0f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2069d544d3cc5860e4d89c6ceb57fc0f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.buttons.edit','data' => ['title' => ''.e(__('Edit')).' '.e(ucwords(Str::singular($module_name))).'','route' => ''.route("backend.$module_name.edit", $module_name_singular).'','small' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.buttons.edit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Edit')).' '.e(ucwords(Str::singular($module_name))).'','route' => ''.route("backend.$module_name.edit", $module_name_singular).'','small' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2069d544d3cc5860e4d89c6ceb57fc0f)): ?>
<?php $attributes = $__attributesOriginal2069d544d3cc5860e4d89c6ceb57fc0f; ?>
<?php unset($__attributesOriginal2069d544d3cc5860e4d89c6ceb57fc0f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2069d544d3cc5860e4d89c6ceb57fc0f)): ?>
<?php $component = $__componentOriginal2069d544d3cc5860e4d89c6ceb57fc0f; ?>
<?php unset($__componentOriginal2069d544d3cc5860e4d89c6ceb57fc0f); ?>
<?php endif; ?>
                                            <?php endif; ?>
                                            <?php if (isset($component)) { $__componentOriginal4641b16a0da73e489a5f597c8c13579e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4641b16a0da73e489a5f597c8c13579e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.buttons.show','data' => ['title' => ''.e(__('Show')).' '.e(ucwords(Str::singular($module_name))).'','route' => ''.route("backend.$module_name.show", $module_name_singular).'','small' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.buttons.show'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Show')).' '.e(ucwords(Str::singular($module_name))).'','route' => ''.route("backend.$module_name.show", $module_name_singular).'','small' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4641b16a0da73e489a5f597c8c13579e)): ?>
<?php $attributes = $__attributesOriginal4641b16a0da73e489a5f597c8c13579e; ?>
<?php unset($__attributesOriginal4641b16a0da73e489a5f597c8c13579e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4641b16a0da73e489a5f597c8c13579e)): ?>
<?php $component = $__componentOriginal4641b16a0da73e489a5f597c8c13579e; ?>
<?php unset($__componentOriginal4641b16a0da73e489a5f597c8c13579e); ?>
<?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-12 col-sm-7">
                    <div class="float-left">
                        <?php echo $$module_name->total(); ?> <?php echo e(__('labels.backend.total')); ?>

                    </div>
                </div>
                <div class="col-12 col-sm-5">
                    <div class="float-end">
                        <?php echo e($$module_name->links('pagination::bootstrap-5')); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\resources\views/backend/roles/index.blade.php ENDPATH**/ ?>