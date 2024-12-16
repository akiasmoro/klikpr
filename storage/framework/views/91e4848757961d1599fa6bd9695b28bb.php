<?php $__env->startSection('title'); ?>
    <?php echo e($$module_name_singular->name); ?> - <?php echo e($$module_name_singular->username); ?> - <?php echo e(__($module_action)); ?>

    <?php echo e(__($module_title)); ?>

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
            <?php echo e($$module_name_singular->name); ?>

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
<?php $component->withAttributes(['type' => 'active']); ?><?php echo e(__($module_title)); ?>

            <?php echo e(__($module_action)); ?> <?php echo $__env->renderComponent(); ?>
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
    <?php if (isset($component)) { $__componentOriginald36b52f60875c92b52c37822caf252de = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald36b52f60875c92b52c37822caf252de = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.layouts.edit','data' => ['data' => $user]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.layouts.edit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user)]); ?>
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
            <i class="<?php echo e($module_icon); ?>"></i> <?php echo e($$module_name_singular->name); ?> <small
                class="text-muted"><?php echo e(__($module_title)); ?>

                <?php echo e(__($module_action)); ?></small>

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
                <?php if (isset($component)) { $__componentOriginal4641b16a0da73e489a5f597c8c13579e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4641b16a0da73e489a5f597c8c13579e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.buttons.show','data' => ['class' => 'ms-1','title' => ''.e(__('Show')).' '.e(ucwords(Str::singular($module_name))).'','route' => ''.route("backend.$module_name.show", $$module_name_singular).'','small' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.buttons.show'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'ms-1','title' => ''.e(__('Show')).' '.e(ucwords(Str::singular($module_name))).'','route' => ''.route("backend.$module_name.show", $$module_name_singular).'','small' => true]); ?>
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
                <?php echo e(html()->modelForm($user, 'PATCH', route('backend.users.update', $user->id))->class('form-horizontal')->acceptsFiles()->open()); ?>


                <div class="form-group row">
                    <?php echo e(html()->label(__('labels.backend.users.fields.avatar'))->class('col-md-2 form-label')->for('name')); ?>


                    <div class="col-md-5 mb-3">
                        <img class="user-profile-image img-fluid img-thumbnail"
                            src="<?php echo e(asset($$module_name_singular->avatar)); ?>" style="max-height:200px; max-width:200px;" />
                    </div>
                    <div class="col-md-5 mb-3">
                        <input id="file-multiple-input" name="avatar" type="file" multiple="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6 mb-3">
                        <div class="form-group">
                            <?php
                            $field_name = 'first_name';
                            $field_lable = __(label_case($field_name));
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
                            $field_lable = __(label_case($field_name));
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
                            $field_name = 'email';
                            $field_lable = __(label_case($field_name));
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
                            $field_lable = __(label_case($field_name));
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
                            $field_name = 'gender';
                            $field_lable = __(label_case($field_name));
                            $field_placeholder = '-- Select an option --';
                            $required = '';
                            $select_options = [
                                'Female' => 'Female',
                                'Male' => 'Male',
                                'Other' => 'Other',
                            ];
                            ?>
                            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')); ?> <?php echo field_required($required); ?>

                            <?php echo e(html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-select')->attributes(["$required"])); ?>

                        </div>
                    </div>

                    <div class="col-12 col-sm-6 mb-3">
                        <div class="form-group">
                            <?php
                            $field_name = 'date_of_birth';
                            $field_lable = __(label_case($field_name));
                            $field_placeholder = $field_lable;
                            $required = '';
                            ?>
                            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')); ?> <?php echo field_required($required); ?>

                            <?php echo e(html()->date($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6 mb-3">
                        <div class="form-group">
                            <?php
                            $field_name = 'address';
                            $field_lable = __(label_case($field_name));
                            $field_placeholder = $field_lable;
                            $required = '';
                            ?>
                            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')); ?> <?php echo field_required($required); ?>

                            <?php echo e(html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 mb-3">
                        <div class="form-group">
                            <?php
                            $field_name = 'bio';
                            $field_lable = __(label_case($field_name));
                            $field_placeholder = $field_lable;
                            $required = '';
                            ?>
                            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')); ?> <?php echo field_required($required); ?>

                            <?php echo e(html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

                        </div>
                    </div>
                </div>

                <?php
                    $socialFieldsNames = $$module_name_singular->socialFieldsNames();
                ?>
                <div class="row">
                    <?php $__currentLoopData = $$module_name_singular->socialFieldsNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12 col-sm-6 mb-3">
                            <div class="form-group">
                                <?php
                                $field_name = 'social_profiles[' . $item . ']';
                                $field_lable = label_case($item);
                                $field_placeholder = $field_lable;
                                $required = '';
                                ?>
                                <?php echo e(html()->label($field_lable, $field_name)->class('form-label')); ?> <?php echo field_required($required); ?>

                                <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div class="row mb-3">
                    <?php
                    $field_name = 'password';
                    $field_lable = __('labels.backend.users.fields.password');
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
                            <a class="btn btn-outline-primary btn-sm"
                                href="<?php echo e(route('backend.users.changePassword', $user->id)); ?>"><i class="fas fa-key"></i>
                                Change password</a>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <?php
                    $field_name = 'confirmed';
                    $field_lable = __('labels.backend.users.fields.confirmed');
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
                            <?php if($user->email_verified_at == null): ?>
                                <a class="btn btn-outline-primary btn-sm" data-toggle="tooltip"
                                    href="<?php echo e(route('backend.users.emailConfirmationResend', $user->id)); ?>"
                                    title="Send Confirmation Email"><i class="fas fa-envelope"></i> Send Confirmation
                                    Email</a>
                            <?php else: ?>
                                <?php echo $user->confirmed_label; ?>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <?php
                    $field_name = 'social';
                    $field_lable = __('labels.backend.users.fields.social');
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
                            <?php $__empty_1 = true; $__currentLoopData = $user->providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <li>
                                    <i class="fab fa-<?php echo e($provider->provider); ?> fa-fw"></i>
                                    <?php echo e(label_case($provider->provider)); ?>

                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php echo e(__('No social profile added!')); ?>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_users_permissions')): ?>
                    <div class="form-group row mb-3">
                        <?php echo e(html()->label(__('Abilities'))->class('col-sm-2 form-label')); ?>

                        <div class="col">
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="card card-accent-primary">
                                        <div class="card-header">
                                            <?php echo app('translator')->get('Roles'); ?>
                                        </div>
                                        <div class="card-body">
                                            <?php if($roles->count()): ?>
                                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="card mb-3">
                                                        <div class="card-header">
                                                            <div class="checkbox">
                                                                <div class="form-check">
                                                                    <input class="form-check-input"
                                                                        id="<?php echo e('role-' . $role->id); ?>" name="roles[]"
                                                                        type="checkbox" value="<?php echo e($role->name); ?>"
                                                                        <?php echo e(in_array($role->name, $userRoles) ? 'checked' : ''); ?>>
                                                                    <label class="form-check-label"
                                                                        for="<?php echo e('role-' . $role->id); ?>">
                                                                        <?php echo e(label_case($role->name) . ' (' . $role->name . ')'); ?>

                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <?php if($role->id != 1): ?>
                                                                <?php if($role->permissions->count()): ?>
                                                                    <?php $__currentLoopData = $role->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <i
                                                                            class="far fa-check-circle fa-fw mr-1"></i>&nbsp;<?php echo e($permission->name); ?>&nbsp;
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php else: ?>
                                                                    <?php echo app('translator')->get('None'); ?>
                                                                <?php endif; ?>
                                                            <?php else: ?>
                                                                <?php echo app('translator')->get('All Permissions'); ?>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="card card-accent-info">
                                        <div class="card-header">
                                            <?php echo app('translator')->get('Permissions'); ?>
                                        </div>
                                        <div class="card-body">
                                            <?php if($permissions->count()): ?>
                                                <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="mb-2">
                                                        <input class="form-check-input"
                                                            id="<?php echo e('permission-' . $permission->id); ?>" name="permissions[]"
                                                            type="checkbox" value="<?php echo e($permission->name); ?>"
                                                            <?php echo e(in_array($permission->name, $userPermissions) ? 'checked' : ''); ?>>
                                                        <label class="form-check-label"
                                                            for="<?php echo e('permission-' . $permission->id); ?>">
                                                            <?php echo e(label_case($permission->name) . ' (' . $permission->name . ')'); ?>

                                                        </label>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="row">
                    <div class="col-4 mb-3">
                        <div class="form-group">
                            <?php if (isset($component)) { $__componentOriginal01f50869d947699da362d3a7b41e6d66 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal01f50869d947699da362d3a7b41e6d66 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.buttons.save','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.buttons.save'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal01f50869d947699da362d3a7b41e6d66)): ?>
<?php $attributes = $__attributesOriginal01f50869d947699da362d3a7b41e6d66; ?>
<?php unset($__attributesOriginal01f50869d947699da362d3a7b41e6d66); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal01f50869d947699da362d3a7b41e6d66)): ?>
<?php $component = $__componentOriginal01f50869d947699da362d3a7b41e6d66; ?>
<?php unset($__componentOriginal01f50869d947699da362d3a7b41e6d66); ?>
<?php endif; ?>
                        </div>
                    </div>

                    <div class="col-8 mb-3">
                        <div class="float-end">
                            <?php if($$module_name_singular->status != 2 && $$module_name_singular->id != 1): ?>
                                <a class="btn btn-danger" data-method="PATCH" data-token="<?php echo e(csrf_token()); ?>"
                                    data-toggle="tooltip" data-confirm="Are you sure?"
                                    href="<?php echo e(route('backend.users.block', $$module_name_singular)); ?>"
                                    title="<?php echo e(__('labels.backend.block')); ?>"><i class="fas fa-ban"></i></a>
                            <?php endif; ?>
                            <?php if($$module_name_singular->status == 2): ?>
                                <a class="btn btn-info" data-method="PATCH" data-token="<?php echo e(csrf_token()); ?>"
                                    data-toggle="tooltip" data-confirm="Are you sure?"
                                    href="<?php echo e(route('backend.users.unblock', $$module_name_singular)); ?>"
                                    title="<?php echo e(__('labels.backend.unblock')); ?>"><i class="fas fa-check"></i> Unblock</a>
                            <?php endif; ?>
                            <?php if($$module_name_singular->email_verified_at == null): ?>
                                <a class="btn btn-primary" data-toggle="tooltip"
                                    href="<?php echo e(route('backend.users.emailConfirmationResend', $$module_name_singular->id)); ?>"
                                    title="Send Confirmation Email"><i class="fas fa-envelope"></i></a>
                            <?php endif; ?>
                            <?php if($$module_name_singular->id != 1): ?>
                                <a class="btn btn-danger" data-method="DELETE" data-token="<?php echo e(csrf_token()); ?>"
                                    data-toggle="tooltip"
                                    href="<?php echo e(route("backend.$module_name.destroy", $$module_name_singular)); ?>"
                                    title="<?php echo e(__('labels.backend.delete')); ?>"><i class="fas fa-trash-alt"></i> Delete</a>
                            <?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal03c0e80d38d2a15cf58878ae679803f0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal03c0e80d38d2a15cf58878ae679803f0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.buttons.return-back','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.buttons.return-back'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo app('translator')->get('Cancel'); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal03c0e80d38d2a15cf58878ae679803f0)): ?>
<?php $attributes = $__attributesOriginal03c0e80d38d2a15cf58878ae679803f0; ?>
<?php unset($__attributesOriginal03c0e80d38d2a15cf58878ae679803f0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal03c0e80d38d2a15cf58878ae679803f0)): ?>
<?php $component = $__componentOriginal03c0e80d38d2a15cf58878ae679803f0; ?>
<?php unset($__componentOriginal03c0e80d38d2a15cf58878ae679803f0); ?>
<?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php echo e(html()->closeModelForm()); ?>

            </div>
            <!--/.col-->
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald36b52f60875c92b52c37822caf252de)): ?>
<?php $attributes = $__attributesOriginald36b52f60875c92b52c37822caf252de; ?>
<?php unset($__attributesOriginald36b52f60875c92b52c37822caf252de); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald36b52f60875c92b52c37822caf252de)): ?>
<?php $component = $__componentOriginald36b52f60875c92b52c37822caf252de; ?>
<?php unset($__componentOriginald36b52f60875c92b52c37822caf252de); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\resources\views/backend/users/edit.blade.php ENDPATH**/ ?>