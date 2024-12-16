<?php $__env->startSection('title'); ?>
    <?php echo e($$module_name_singular->name); ?> - <?php echo e(__($module_action)); ?> - <?php echo e(__($module_title)); ?>

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
    <?php if (isset($component)) { $__componentOriginal593cc07d57ff55114f4fd57c5b40afcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal593cc07d57ff55114f4fd57c5b40afcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.layouts.show','data' => ['data' => $$module_name_singular]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.layouts.show'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($$module_name_singular)]); ?>
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
            <i class="<?php echo e($module_icon); ?> fa-fw"></i> <?php echo e($$module_name_singular->name); ?> <small
                class="text-muted"><?php echo e(__($module_title)); ?></small>

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
                <?php if (isset($component)) { $__componentOriginal2069d544d3cc5860e4d89c6ceb57fc0f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2069d544d3cc5860e4d89c6ceb57fc0f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.buttons.edit','data' => ['class' => 'ms-1','title' => ''.e(__('Edit')).' '.e(ucwords(Str::singular($module_name))).'','route' => ''.route("backend.$module_name.edit", $$module_name_singular).'','small' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.buttons.edit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'ms-1','title' => ''.e(__('Edit')).' '.e(ucwords(Str::singular($module_name))).'','route' => ''.route("backend.$module_name.edit", $$module_name_singular).'','small' => true]); ?>
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
            <div class="col-12 col-sm-6">
                <div class="table-responsive">
                    <table class="table-bordered table-hover table">
                        <tr>
                            <th><?php echo e(__("labels.backend.$module_name.fields.name")); ?></th>
                            <td><?php echo e($$module_name_singular->name); ?></td>
                        </tr>

                        <tr>
                            <th><?php echo e(__("labels.backend.$module_name.fields.permissions")); ?></th>
                            <td>
                                <?php if($$module_name_singular->permissions()->count() > 0): ?>
                                    <ul>
                                        <?php $__currentLoopData = $$module_name_singular->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($permission->name); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                <?php endif; ?>
                            </td>
                        </tr>

                        <tr>
                            <th><?php echo e(__("labels.backend.$module_name.fields.created_at")); ?></th>
                            <td><?php echo e($$module_name_singular->created_at); ?><br><small>(<?php echo e($$module_name_singular->created_at->diffForHumans()); ?>)</small>
                            </td>
                        </tr>

                        <tr>
                            <th><?php echo e(__("labels.backend.$module_name.fields.updated_at")); ?></th>
                            <td><?php echo e($$module_name_singular->updated_at); ?><br /><small>(<?php echo e($$module_name_singular->updated_at->diffForHumans()); ?>)</small>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="table-responsive">
                    <table class="table-bordered table">
                        <thead>
                            <tr>
                                <th>List of users (<small>Total: <?php echo e($users->count()); ?></small>)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td> <a href="<?php echo e(route('backend.users.show', $user->id)); ?>"><?php echo e($user->name); ?></a>
                                        <span class="float-end"><?php echo $user->status_label; ?></span></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal593cc07d57ff55114f4fd57c5b40afcb)): ?>
<?php $attributes = $__attributesOriginal593cc07d57ff55114f4fd57c5b40afcb; ?>
<?php unset($__attributesOriginal593cc07d57ff55114f4fd57c5b40afcb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal593cc07d57ff55114f4fd57c5b40afcb)): ?>
<?php $component = $__componentOriginal593cc07d57ff55114f4fd57c5b40afcb; ?>
<?php unset($__componentOriginal593cc07d57ff55114f4fd57c5b40afcb); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\resources\views/backend/roles/show.blade.php ENDPATH**/ ?>