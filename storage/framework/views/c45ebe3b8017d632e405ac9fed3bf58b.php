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
    <?php if (isset($component)) { $__componentOriginal593cc07d57ff55114f4fd57c5b40afcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal593cc07d57ff55114f4fd57c5b40afcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.layouts.show','data' => ['data' => $$module_name_singular,'moduleName' => $module_name,'modulePath' => $module_path,'moduleTitle' => $module_title,'moduleIcon' => $module_icon,'moduleAction' => $module_action]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.layouts.show'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($$module_name_singular),'module_name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($module_name),'module_path' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($module_path),'module_title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($module_title),'module_icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($module_icon),'module_action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($module_action)]); ?>

        <?php if (isset($component)) { $__componentOriginal57a22d33ea7984d606412297cfe33b67 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal57a22d33ea7984d606412297cfe33b67 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.section-header','data' => ['data' => $$module_name_singular,'moduleName' => $module_name,'moduleTitle' => $module_title,'moduleIcon' => $module_icon,'moduleAction' => $module_action]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($$module_name_singular),'module_name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($module_name),'module_title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($module_title),'module_icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($module_icon),'module_action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($module_action)]); ?>
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
            <div class="col-12 col-sm-8">

                <?php if (isset($component)) { $__componentOriginalaf5c73767219669181ba5b1c1bb351ca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaf5c73767219669181ba5b1c1bb351ca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.section-show-table','data' => ['data' => $$module_name_singular,'moduleName' => $module_name]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.section-show-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($$module_name_singular),'module_name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($module_name)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaf5c73767219669181ba5b1c1bb351ca)): ?>
<?php $attributes = $__attributesOriginalaf5c73767219669181ba5b1c1bb351ca; ?>
<?php unset($__attributesOriginalaf5c73767219669181ba5b1c1bb351ca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaf5c73767219669181ba5b1c1bb351ca)): ?>
<?php $component = $__componentOriginalaf5c73767219669181ba5b1c1bb351ca; ?>
<?php unset($__componentOriginalaf5c73767219669181ba5b1c1bb351ca); ?>
<?php endif; ?>

            </div>
            <div class="col-12 col-sm-4">
                <h5>
                    Category
                </h5>
                <ul>
                    <li>
                        <a
                            href="<?php echo e(route('backend.categories.show', [$$module_name_singular->category_id, $$module_name_singular->category->slug])); ?>"><?php echo e($$module_name_singular->category->name); ?></a>
                    </li>
                </ul>

                <h5>
                    Tags <small>(<?php echo e(count($$module_name_singular->tags)); ?>)</small>
                </h5>

                <ul>
                    <?php $__currentLoopData = $$module_name_singular->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(route('backend.tags.show', [$tag->id, $tag->slug])); ?>"><?php echo e($tag->name); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\Modules/Post/Resources/views/backend/posts/show.blade.php ENDPATH**/ ?>