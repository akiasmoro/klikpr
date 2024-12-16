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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.breadcrumb-item','data' => ['route' => ''.e(route("backend.$module_name.index")).'','icon' => ''.e($module_icon).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.breadcrumb-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => ''.e(route("backend.$module_name.index")).'','icon' => ''.e($module_icon).'']); ?>
            <?php echo e(__($module_title)); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5e5b40e973d9c7c18a583cb81079b74e)): ?>
<?php $attributes = $__attributesOriginal5e5b40e973d9c7c18a583cb81079b74e; ?>
<?php unset($__attributesOriginal5e5b40e973d9c7c18a583cb81079b74e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5e5b40e973d9c7c18a583cb81079b74e)): ?>
<?php $component = $__componentOriginal5e5b40e973d9c7c18a583cb81079b74e; ?>
<?php unset($__componentOriginal5e5b40e973d9c7c18a583cb81079b74e); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal5e5b40e973d9c7c18a583cb81079b74e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5e5b40e973d9c7c18a583cb81079b74e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.breadcrumb-item','data' => ['type' => 'active']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.breadcrumb-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'active']); ?><?php echo e(__($module_action)); ?> <?php echo $__env->renderComponent(); ?>
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

    <?php if (isset($component)) { $__componentOriginalcbd37a8fcd74c8a79412655eadaa4da4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcbd37a8fcd74c8a79412655eadaa4da4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.layouts.create','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.layouts.create'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

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
                <?php if (isset($component)) { $__componentOriginal03c0e80d38d2a15cf58878ae679803f0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal03c0e80d38d2a15cf58878ae679803f0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.buttons.return-back','data' => ['small' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.buttons.return-back'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['small' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal03c0e80d38d2a15cf58878ae679803f0)): ?>
<?php $attributes = $__attributesOriginal03c0e80d38d2a15cf58878ae679803f0; ?>
<?php unset($__attributesOriginal03c0e80d38d2a15cf58878ae679803f0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal03c0e80d38d2a15cf58878ae679803f0)): ?>
<?php $component = $__componentOriginal03c0e80d38d2a15cf58878ae679803f0; ?>
<?php unset($__componentOriginal03c0e80d38d2a15cf58878ae679803f0); ?>
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

                <?php echo e(html()->form('POST', route('backend.roles.store'))->class('form-horizontal')->open()); ?>


                <div class="row mb-3">
                    <?php
                    $field_name = 'name';
                    $field_lable = __('labels.backend.roles.fields.name');
                    $field_placeholder = $field_lable;
                    $required = 'required';
                    ?>
                    <div class="col-12 col-sm-2">
                        <div class="form-group">
                            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')); ?> <?php echo field_required($required); ?>

                        </div>
                    </div>
                    <div class="col-12 col-sm-10">
                        <div class="form-group">
                            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <?php
                    $field_name = 'name';
                    $field_lable = __('Abilities');
                    $field_placeholder = $field_lable;
                    $required = '';
                    ?>
                    <div class="col-12 col-sm-2">
                        <div class="form-group">
                            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')); ?> <?php echo field_required($required); ?>

                        </div>
                    </div>
                    <div class="col-12 col-sm-10">
                        <div class="form-group">
                            <?php echo e(__('Select permissions from the list:')); ?>


                            <?php if($permissions->count()): ?>
                                <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="form-check">
                                        <?php echo e(html()->label($permission->name)->for('permission-' . $permission->id)->class('form-check-label')); ?>

                                        <?php echo e(html()->checkbox('permissions[]', old('permissions') && in_array($permission->name, old('permissions')) ? true : false, $permission->name)->id('permission-' . $permission->id)->class('form-check-input')); ?>

                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <?php if (isset($component)) { $__componentOriginal9b9e18b95e82fd4467419c83b8a91f29 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b9e18b95e82fd4467419c83b8a91f29 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.create','data' => ['title' => ''.e(__('Create')).' '.e(ucwords(Str::singular($module_name))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.create'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Create')).' '.e(ucwords(Str::singular($module_name))).'']); ?>
                                <?php echo e(__('Create')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9b9e18b95e82fd4467419c83b8a91f29)): ?>
<?php $attributes = $__attributesOriginal9b9e18b95e82fd4467419c83b8a91f29; ?>
<?php unset($__attributesOriginal9b9e18b95e82fd4467419c83b8a91f29); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9b9e18b95e82fd4467419c83b8a91f29)): ?>
<?php $component = $__componentOriginal9b9e18b95e82fd4467419c83b8a91f29; ?>
<?php unset($__componentOriginal9b9e18b95e82fd4467419c83b8a91f29); ?>
<?php endif; ?>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="float-end">
                            <div class="form-group">
                                <?php if (isset($component)) { $__componentOriginal98d403696e9440d7fce00fa99530283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal98d403696e9440d7fce00fa99530283d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.cancel','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.cancel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal98d403696e9440d7fce00fa99530283d)): ?>
<?php $attributes = $__attributesOriginal98d403696e9440d7fce00fa99530283d; ?>
<?php unset($__attributesOriginal98d403696e9440d7fce00fa99530283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal98d403696e9440d7fce00fa99530283d)): ?>
<?php $component = $__componentOriginal98d403696e9440d7fce00fa99530283d; ?>
<?php unset($__componentOriginal98d403696e9440d7fce00fa99530283d); ?>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo e(html()->form()->close()); ?>

            </div>
        </div>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcbd37a8fcd74c8a79412655eadaa4da4)): ?>
<?php $attributes = $__attributesOriginalcbd37a8fcd74c8a79412655eadaa4da4; ?>
<?php unset($__attributesOriginalcbd37a8fcd74c8a79412655eadaa4da4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcbd37a8fcd74c8a79412655eadaa4da4)): ?>
<?php $component = $__componentOriginalcbd37a8fcd74c8a79412655eadaa4da4; ?>
<?php unset($__componentOriginalcbd37a8fcd74c8a79412655eadaa4da4); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\resources\views/backend/roles/create.blade.php ENDPATH**/ ?>