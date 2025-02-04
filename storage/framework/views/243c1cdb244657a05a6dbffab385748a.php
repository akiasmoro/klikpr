<nav class="border-2 border-gray-200 bg-white shadow-md dark:border-gray-700 dark:bg-gray-900">
    <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
        <a class="flex items-center space-x-3 rtl:space-x-reverse" href="/">
            <img class="h-9" src="<?php echo e(asset('img/logo-with-text.jpg')); ?>" alt="<?php echo e(app_name()); ?> Logo" />
        </a>
        <div class="flex items-center justify-end space-x-1 rtl:space-x-reverse md:order-2 md:space-x-0">
            <button
                class="rounded-lg p-2.5 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                id="theme-toggle" type="button">
                <svg class="hidden h-5 w-5" id="theme-toggle-dark-icon" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg class="hidden h-5 w-5" id="theme-toggle-light-icon" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>

            <button
                class="inline-flex cursor-pointer items-center justify-center rounded px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white"
                data-dropdown-toggle="language-dropdown-menu" type="button">
                <svg class="icon icon-tabler icons-tabler-outline icon-tabler-language"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 5h7" />
                    <path d="M9 3v2c0 4.418 -2.239 8 -5 8" />
                    <path d="M5 9c0 2.144 2.952 3.908 6.7 4" />
                    <path d="M12 20l4 -9l4 9" />
                    <path d="M19.1 18h-6.2" />
                </svg>
                <span class="ms-2 hidden sm:block">
                    <?php echo e(strtoupper(app()->currentLocale())); ?>

                </span>
            </button>
            <!-- Dropdown:language-dropdown-menu -->
            <div class="z-50 my-4 hidden list-none divide-y divide-gray-100 rounded-lg bg-white text-base shadow dark:bg-gray-700"
                id="language-dropdown-menu">
                <ul class="py-2 font-medium" role="none">
                    <?php $__currentLoopData = config('app.available_locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale_code => $locale_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                href="<?php echo e(route('language.switch', $locale_code)); ?>" role="menuitem">
                                <div class="inline-flex items-center">
                                    <?php echo e($locale_name); ?>

                                </div>
                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>

            <?php if(auth()->guard()->guest()): ?>
                <?php if(user_registration()): ?>
                    <a class="inline-flex cursor-pointer items-center justify-center rounded px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white"
                        href="<?php echo e(route('register')); ?>">
                        <svg class="icon icon-tabler icons-tabler-outline icon-tabler-user-bolt me-2"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4c.267 0 .529 .026 .781 .076" />
                            <path d="M19 16l-2 3h4l-2 3" />
                        </svg>
                        <span class="ms-2 hidden sm:block">
                            <?php echo e(__('Register')); ?>

                        </span>
                    </a>
                <?php endif; ?>
                <a class="inline-flex cursor-pointer items-center justify-center rounded px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white"
                    href="<?php echo e(route('login')); ?>">
                    <svg class="icon icon-tabler icons-tabler-outline icon-tabler-login me-2"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M15 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                        <path d="M21 12h-13l3 -3" />
                        <path d="M11 15l-3 -3" />
                    </svg>
                    <span class="ms-2 hidden sm:block">
                        <?php echo e(__('Login')); ?>

                    </span>
                </a>
            <?php endif; ?>

            <?php if(auth()->guard()->check()): ?>
                <button
                    class="inline-flex cursor-pointer items-center justify-center rounded-lg px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white"
                    data-dropdown-toggle="user-dropdown-menu" type="button">
                    <img class="h-9 rounded-md" src="<?php echo e(asset(Auth::user()->avatar)); ?>" alt="">
                    <span class="ms-2 hidden sm:block">
                        <?php echo e(Auth::user()->last_name); ?>

                    </span>
                </button>
                <!-- Dropdown:user-dropdown-menu -->
                <div class="z-50 my-4 hidden list-none divide-y divide-gray-100 rounded-lg bg-white text-base shadow dark:bg-gray-700"
                    id="user-dropdown-menu">
                    <ul class="py-2 font-medium" role="none">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_backend')): ?>
                            <li class="border-b-2 border-gray-200">
                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                    href="<?php echo e(route('backend.dashboard')); ?>" role="menuitem">
                                    <div class="inline-flex items-center">
                                        <svg class="icon icon-tabler icons-tabler-outline icon-tabler-layout-dashboard me-2"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M5 4h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
                                            <path
                                                d="M5 16h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
                                            <path
                                                d="M15 12h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
                                            <path
                                                d="M15 4h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
                                        </svg>
                                        <?php echo e(__('Admin Dashboard')); ?>

                                    </div>
                                </a>
                            </li>
                            <?php endif; ?>
                            <li>
                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                    href="<?php echo e(route('frontend.users.profile')); ?>" role="menuitem">
                                    <div class="inline-flex items-center">
                                        <svg class="icon icon-tabler icons-tabler-outline icon-tabler-user-bolt me-2"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4c.267 0 .529 .026 .781 .076" />
                                            <path d="M19 16l-2 3h4l-2 3" />
                                        </svg>
                                        <?php echo e(Auth::user()->name); ?>

                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                    href="<?php echo e(route('frontend.users.profileEdit')); ?>" role="menuitem">
                                    <div class="inline-flex items-center">
                                        <svg class="icon icon-tabler icons-tabler-outline icon-tabler-settings-cog me-2"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M12.003 21c-.732 .001 -1.465 -.438 -1.678 -1.317a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c.886 .215 1.325 .957 1.318 1.694" />
                                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                            <path d="M19.001 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M19.001 15.5v1.5" />
                                            <path d="M19.001 21v1.5" />
                                            <path d="M22.032 17.25l-1.299 .75" />
                                            <path d="M17.27 20l-1.3 .75" />
                                            <path d="M15.97 17.25l1.3 .75" />
                                            <path d="M20.733 20l1.3 .75" />
                                        </svg>
                                        <?php echo e(__('Settings')); ?>

                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                    href="<?php echo e(route('logout')); ?>" role="menuitem"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <div class="inline-flex items-center">
                                        <svg class="icon icon-tabler icons-tabler-outline icon-tabler-logout me-2"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                                            <path d="M9 12h12l-3 -3" />
                                            <path d="M18 15l3 -3" />
                                        </svg>
                                        <?php echo e(__('Logout')); ?>

                                    </div>
                                </a>
                            </li>
                            <form id="logout-form" style="display: none;" action="<?php echo e(route('logout')); ?>" method="POST">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </ul>
                    </div>
                <?php endif; ?>
                <button
                    class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
                    data-collapse-toggle="navbar-language" type="button" aria-controls="navbar-language"
                    aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>

            <div class="hidden w-full items-center justify-between md:order-1 md:flex md:w-auto" id="navbar-language">
                <ul
                    class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 font-medium rtl:space-x-reverse dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:p-0 md:dark:bg-gray-900">
                    <?php if (isset($component)) { $__componentOriginal60ba81ad315c3ebabe40526fbfddb04f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal60ba81ad315c3ebabe40526fbfddb04f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.nav-item','data' => ['active' => request()->routeIs('home')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('home'))]); ?>
                        <?php echo e(__('Home')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal60ba81ad315c3ebabe40526fbfddb04f)): ?>
<?php $attributes = $__attributesOriginal60ba81ad315c3ebabe40526fbfddb04f; ?>
<?php unset($__attributesOriginal60ba81ad315c3ebabe40526fbfddb04f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal60ba81ad315c3ebabe40526fbfddb04f)): ?>
<?php $component = $__componentOriginal60ba81ad315c3ebabe40526fbfddb04f; ?>
<?php unset($__componentOriginal60ba81ad315c3ebabe40526fbfddb04f); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal60ba81ad315c3ebabe40526fbfddb04f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal60ba81ad315c3ebabe40526fbfddb04f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.nav-item','data' => ['href' => route('frontend.posts.index'),'active' => request()->routeIs('frontend.posts.*')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('frontend.posts.index')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('frontend.posts.*'))]); ?>
                        <?php echo e(__('Posts')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal60ba81ad315c3ebabe40526fbfddb04f)): ?>
<?php $attributes = $__attributesOriginal60ba81ad315c3ebabe40526fbfddb04f; ?>
<?php unset($__attributesOriginal60ba81ad315c3ebabe40526fbfddb04f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal60ba81ad315c3ebabe40526fbfddb04f)): ?>
<?php $component = $__componentOriginal60ba81ad315c3ebabe40526fbfddb04f; ?>
<?php unset($__componentOriginal60ba81ad315c3ebabe40526fbfddb04f); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal60ba81ad315c3ebabe40526fbfddb04f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal60ba81ad315c3ebabe40526fbfddb04f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.nav-item','data' => ['href' => route('frontend.categories.index'),'active' => request()->routeIs('frontend.categories.*')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('frontend.categories.index')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('frontend.categories.*'))]); ?>
                        <?php echo e(__('Categories')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal60ba81ad315c3ebabe40526fbfddb04f)): ?>
<?php $attributes = $__attributesOriginal60ba81ad315c3ebabe40526fbfddb04f; ?>
<?php unset($__attributesOriginal60ba81ad315c3ebabe40526fbfddb04f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal60ba81ad315c3ebabe40526fbfddb04f)): ?>
<?php $component = $__componentOriginal60ba81ad315c3ebabe40526fbfddb04f; ?>
<?php unset($__componentOriginal60ba81ad315c3ebabe40526fbfddb04f); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal60ba81ad315c3ebabe40526fbfddb04f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal60ba81ad315c3ebabe40526fbfddb04f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.nav-item','data' => ['href' => '/admin/peta','target' => '_blank']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/admin/peta','target' => '_blank']); ?>
                        <div style="display:flex; align-items:center;">
                            <img src="<?php echo e(asset('img/logo-klikpr-menu.png')); ?>"  /> &nbsp;
                            <span><?php echo e(__('KLIKPR')); ?></span> 
                        </div>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal60ba81ad315c3ebabe40526fbfddb04f)): ?>
<?php $attributes = $__attributesOriginal60ba81ad315c3ebabe40526fbfddb04f; ?>
<?php unset($__attributesOriginal60ba81ad315c3ebabe40526fbfddb04f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal60ba81ad315c3ebabe40526fbfddb04f)): ?>
<?php $component = $__componentOriginal60ba81ad315c3ebabe40526fbfddb04f; ?>
<?php unset($__componentOriginal60ba81ad315c3ebabe40526fbfddb04f); ?>
<?php endif; ?>
                </ul>
            </div>

        </div>
    </nav>
<?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\resources\views/frontend/includes/header.blade.php ENDPATH**/ ?>