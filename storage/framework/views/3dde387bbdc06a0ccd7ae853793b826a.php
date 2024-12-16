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

        <div class="row mt-4">
            <div class="col">
                <?php echo e(html()->form('POST', route("backend.$module_name.store"))->class('form')->acceptsFiles()->open()); ?>


                <div class="row">
                    <div class="col-12 col-sm-6 mb-3">
                        <div class="form-group">
                            <?php
                            $field_name = 'first_name';
                            $field_lable = label_case($field_name);
                            $field_placeholder = $field_lable;
                            $required = 'required';
                            ?>
                            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')); ?> <?php echo field_required($required); ?>

                            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 mb-3">
                        <div class="form-group">
                            <?php
                            $field_name = 'last_name';
                            $field_lable = label_case($field_name);
                            $field_placeholder = $field_lable;
                            $required = 'required';
                            ?>
                            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')); ?> <?php echo field_required($required); ?>

                            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 mb-3">
                        <div class="form-group">
                            <?php
                            $field_name = 'email';
                            $field_lable = label_case($field_name);
                            $field_placeholder = $field_lable;
                            $required = 'required';
                            ?>
                            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')); ?> <?php echo field_required($required); ?>

                            <?php echo e(html()->email($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 mb-3">
                        <div class="form-group">
                            <?php
                            $field_name = 'mobile';
                            $field_lable = label_case($field_name);
                            $field_placeholder = $field_lable;
                            $required = '';
                            ?>
                            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')); ?> <?php echo field_required($required); ?>

                            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 mb-3">
                        <div class="form-group">
                            <?php
                            $field_name = 'password';
                            $field_lable = label_case($field_name);
                            $field_placeholder = $field_lable;
                            $required = 'required';
                            ?>
                            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')); ?> <?php echo field_required($required); ?>

                            <?php echo e(html()->password($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 mb-3">
                        <div class="form-group">
                            <?php
                            $field_name = 'password_confirmation';
                            $field_lable = label_case($field_name);
                            $field_placeholder = $field_lable;
                            $required = 'required';
                            ?>
                            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')); ?> <?php echo field_required($required); ?>

                            <?php echo e(html()->password($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

                        </div>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <?php echo e(html()->label(__('labels.backend.users.fields.status'))->class('col-6 col-sm-2 form-label')->for('status')); ?>


                    <div class="col-6 col-sm-10">
                        <?php echo e(html()->checkbox('status', true, '1')); ?> <?php echo app('translator')->get('Active'); ?>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <?php echo e(html()->label(__('labels.backend.users.fields.confirmed'))->class('col-6 col-sm-2 form-label')->for('confirmed')); ?>


                    <div class="col-6 col-sm-10">
                        <?php echo e(html()->checkbox('confirmed', true, '1')); ?> <?php echo app('translator')->get('Email Confirmed'); ?>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <?php echo e(html()->label(__('labels.backend.users.fields.email_credentials'))->class('col-6 col-sm-2 form-label')->for('confirmed')); ?>


                    <div class="col-6 col-sm-10">
                        <?php echo e(html()->checkbox('email_credentials', true, '1')); ?> <?php echo app('translator')->get('Email Credentials'); ?>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <?php echo e(html()->label('Abilities')->class('col-sm-2 form-label')); ?>


                    <div class="col">
                        <div class="row">
                            <div class="col-12 col-sm-7 mb-3">
                                <div class="card card-accent-info">
                                    <div class="card-header">
                                        <?php echo app('translator')->get('Roles'); ?>
                                    </div>
                                    <div class="card-body">
                                        <?php if($roles->count()): ?>
                                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="card mb-3">
                                                    <div class="card-header">
                                                        <div class="checkbox">
                                                            <?php echo e(html()->label(html()->checkbox('roles[]', old('roles') && in_array($role->name, old('roles')) ? true : false, $role->name)->id('role-' . $role->id) .'&nbsp;' .ucwords($role->name) .'&nbsp;(' .$role->name .')')->for('role-' . $role->id)); ?>

                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <?php if($role->id != 1): ?>
                                                            <?php if($role->permissions->count()): ?>
                                                                <?php $__currentLoopData = $role->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <i
                                                                        class="far fa-check-circle mr-1"></i>&nbsp;<?php echo e($permission->name); ?>&nbsp;
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php else: ?>
                                                                <?php echo app('translator')->get('None'); ?>
                                                            <?php endif; ?>
                                                        <?php else: ?>
                                                            <?php echo app('translator')->get('All Permissions'); ?>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <!--card-->
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-5 mb-3">
                                <div class="card card-accent-primary">
                                    <div class="card-header">
                                        <?php echo app('translator')->get('Permissions'); ?>
                                    </div>
                                    <div class="card-body">
                                        <?php if($permissions->count()): ?>
                                            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="checkbox">
                                                    <?php echo e(html()->label(html()->checkbox('permissions[]', old('permissions') && in_array($permission->name, old('permissions')) ? true : false, $permission->name)->id('permission-' . $permission->id) .' ' .$permission->name)->for('permission-' . $permission->id)); ?>

                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <?php if (isset($component)) { $__componentOriginal9ea0105027514645b96ba9a83bc7d3f4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ea0105027514645b96ba9a83bc7d3f4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.buttons.create','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.buttons.create'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Create <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ea0105027514645b96ba9a83bc7d3f4)): ?>
<?php $attributes = $__attributesOriginal9ea0105027514645b96ba9a83bc7d3f4; ?>
<?php unset($__attributesOriginal9ea0105027514645b96ba9a83bc7d3f4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ea0105027514645b96ba9a83bc7d3f4)): ?>
<?php $component = $__componentOriginal9ea0105027514645b96ba9a83bc7d3f4; ?>
<?php unset($__componentOriginal9ea0105027514645b96ba9a83bc7d3f4); ?>
<?php endif; ?>
                    </div>
                    <div class="col-6">
                        <div class="float-end">
                            <?php if (isset($component)) { $__componentOriginal5794c7fc05153298c931f4198c188381 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5794c7fc05153298c931f4198c188381 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.buttons.cancel','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.buttons.cancel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5794c7fc05153298c931f4198c188381)): ?>
<?php $attributes = $__attributesOriginal5794c7fc05153298c931f4198c188381; ?>
<?php unset($__attributesOriginal5794c7fc05153298c931f4198c188381); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5794c7fc05153298c931f4198c188381)): ?>
<?php $component = $__componentOriginal5794c7fc05153298c931f4198c188381; ?>
<?php unset($__componentOriginal5794c7fc05153298c931f4198c188381); ?>
<?php endif; ?>
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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\resources\views/backend/users/create.blade.php ENDPATH**/ ?>