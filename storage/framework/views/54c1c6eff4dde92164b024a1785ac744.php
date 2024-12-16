<?php
$notifications = optional(auth()->user())->unreadNotifications;
$notifications_count = optional($notifications)->count();
$notifications_latest = optional($notifications)->take(5);
?>

<div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar">
    <div class="sidebar-header border-bottom">
        <div class="sidebar-brand d-sm-flex justify-content-center">
            <a href="/">
                <img class="sidebar-brand-full" src="<?php echo e(asset('img/logo-with-text.jpg')); ?>" alt="<?php echo e(app_name()); ?>"
                    height="46">
                <img class="sidebar-brand-narrow" src="<?php echo e(asset('img/logo-square.jpg')); ?>" alt="<?php echo e(app_name()); ?>"
                    height="46">
            </a>
        </div>
        <button class="btn-close d-lg-none" data-coreui-dismiss="offcanvas" data-coreui-theme="dark" type="button"
            aria-label="Close"
            onclick="coreui.Sidebar.getInstance(document.querySelector(&quot;#sidebar&quot;)).toggle()"></button>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('backend.dashboard')); ?>">
                <i class="nav-icon fa-solid fa-cubes"></i>&nbsp;<?php echo app('translator')->get('Dashboard'); ?>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('backend.peta.index')); ?>">
                <i class="nav-icon fa-solid fa-map"></i>&nbsp;<?php echo app('translator')->get('Peta'); ?>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('backend.konsultasi.index')); ?>">
                <i class="nav-icon fa-solid fa-book"></i>&nbsp;<?php echo app('translator')->get('Konsultasi'); ?>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('backend.pengaduan.index')); ?>">
                <i class="nav-icon fa-solid fa-circle-exclamation"></i>&nbsp;<?php echo app('translator')->get('Pengaduan'); ?>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('backend.notifications.index')); ?>">
                <i class="nav-icon fa-regular fa-bell"></i>&nbsp;<?php echo app('translator')->get('Notifications'); ?>
                <?php if($notifications_count): ?>
                    &nbsp;<span class="badge badge-sm bg-info ms-auto"><?php echo e($notifications_count); ?></span>
                <?php endif; ?>
            </a>
        </li>

        <?php
            $module_name = "posts";
            $text = __('Posts');
            $icon = "fa-regular fa-file-lines";
            $permission = "view_".$module_name;
            $url = route('backend.'.$module_name.'.index');
        ?>
        <?php if (isset($component)) { $__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.sidebar-nav-item','data' => ['permission' => $permission,'url' => $url,'icon' => $icon,'text' => $text]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.sidebar-nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['permission' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($permission),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($url),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($text)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b)): ?>
<?php $attributes = $__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b; ?>
<?php unset($__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b)): ?>
<?php $component = $__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b; ?>
<?php unset($__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b); ?>
<?php endif; ?>

        <?php
            $module_name = "categories";
            $text = __('Categories');
            $icon = "fa-solid fa-diagram-project";
            $permission = "view_".$module_name;
            $url = route('backend.'.$module_name.'.index');
        ?>
        <?php if (isset($component)) { $__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.sidebar-nav-item','data' => ['permission' => $permission,'url' => $url,'icon' => $icon,'text' => $text]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.sidebar-nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['permission' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($permission),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($url),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($text)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b)): ?>
<?php $attributes = $__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b; ?>
<?php unset($__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b)): ?>
<?php $component = $__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b; ?>
<?php unset($__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b); ?>
<?php endif; ?>
        
        <?php
            $module_name = "tags";
            $text = __('Tags');
            $icon = "fa-solid fa-tags";
            $permission = "view_".$module_name;
            $url = route('backend.'.$module_name.'.index');
        ?>
        <?php if (isset($component)) { $__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.sidebar-nav-item','data' => ['permission' => $permission,'url' => $url,'icon' => $icon,'text' => $text]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.sidebar-nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['permission' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($permission),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($url),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($text)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b)): ?>
<?php $attributes = $__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b; ?>
<?php unset($__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b)): ?>
<?php $component = $__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b; ?>
<?php unset($__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b); ?>
<?php endif; ?>
        
        <?php
            $module_name = "settings";
            $text = __('Settings');
            $icon = "fa-solid fa-gears";
            $permission = "edit_".$module_name;
            $url = route('backend.'.$module_name);
        ?>
        <?php if (isset($component)) { $__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.sidebar-nav-item','data' => ['permission' => $permission,'url' => $url,'icon' => $icon,'text' => $text]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.sidebar-nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['permission' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($permission),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($url),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($text)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b)): ?>
<?php $attributes = $__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b; ?>
<?php unset($__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b)): ?>
<?php $component = $__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b; ?>
<?php unset($__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b); ?>
<?php endif; ?>
        
        <?php
            $module_name = "backups";
            $text = __('Backups');
            $icon = "fa-solid fa-box-archive";
            $permission = "view_".$module_name;
            $url = route('backend.'.$module_name.'.index');
        ?>
        <?php if (isset($component)) { $__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.sidebar-nav-item','data' => ['permission' => $permission,'url' => $url,'icon' => $icon,'text' => $text]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.sidebar-nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['permission' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($permission),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($url),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($text)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b)): ?>
<?php $attributes = $__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b; ?>
<?php unset($__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b)): ?>
<?php $component = $__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b; ?>
<?php unset($__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b); ?>
<?php endif; ?>
        
        <?php
            $module_name = "users";
            $text = __('Users');
            $icon = "fa-solid fa-user-group";
            $permission = "view_".$module_name;
            $url = route('backend.'.$module_name.'.index');
        ?>
        <?php if (isset($component)) { $__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.sidebar-nav-item','data' => ['permission' => $permission,'url' => $url,'icon' => $icon,'text' => $text]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.sidebar-nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['permission' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($permission),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($url),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($text)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b)): ?>
<?php $attributes = $__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b; ?>
<?php unset($__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b)): ?>
<?php $component = $__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b; ?>
<?php unset($__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b); ?>
<?php endif; ?>
        
        <?php
            $module_name = "roles";
            $text = __('Roles');
            $icon = "fa-solid fa-user-shield";
            $permission = "view_".$module_name;
            $url = route('backend.'.$module_name.'.index');
        ?>
        <?php if (isset($component)) { $__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.sidebar-nav-item','data' => ['permission' => $permission,'url' => $url,'icon' => $icon,'text' => $text]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.sidebar-nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['permission' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($permission),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($url),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($text)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b)): ?>
<?php $attributes = $__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b; ?>
<?php unset($__attributesOriginal690e7c357d12ebee0eab45ff08b5ee6b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b)): ?>
<?php $component = $__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b; ?>
<?php unset($__componentOriginal690e7c357d12ebee0eab45ff08b5ee6b); ?>
<?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_logs')): ?>
            <li class="nav-group" aria-expanded="true">
                <a class="nav-link nav-group-toggle" href="#">
                    <i class="nav-icon fa-solid fa-list-ul"></i>&nbsp;<?php echo app('translator')->get('Logs'); ?>
                </a>
                <ul class="nav-group-items compact" style="height: auto;">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('log-viewer::dashboard')); ?>">
                            <span class="nav-icon"><span class="nav-icon-bullet"></span></span> Log Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('log-viewer::logs.list')); ?>">
                            <span class="nav-icon"><span class="nav-icon-bullet"></span></span> Daily Log
                        </a>
                    </li>
                </ul>
            </li>
        <?php endif; ?>

    </ul>
    <div class="sidebar-footer border-top d-none d-md-flex">
        <button class="sidebar-toggler" data-coreui-toggle="unfoldable" type="button"></button>
    </div>
</div>
<?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\resources\views/backend/includes/sidebar.blade.php ENDPATH**/ ?>