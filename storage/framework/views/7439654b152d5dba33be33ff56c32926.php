<?php $__env->startSection('title'); ?>
    <?php echo e(__($module_title)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal885417cb62579f505f388b228557db34 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal885417cb62579f505f388b228557db34 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.header-block','data' => ['title' => __('Postingan')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.header-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Postingan'))]); ?>
        <p class="mb-8 leading-relaxed">
            Berita, Kegiatan, dan Dokumentasi DISPERKIm
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
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
            <?php $__currentLoopData = $$module_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $$module_name_singular): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $details_url = route("frontend.$module_name.show", [
                        encode_id($$module_name_singular->id),
                        $$module_name_singular->slug,
                    ]);
                ?>
                <?php if (isset($component)) { $__componentOriginal0a3246743b024a30070683ed74d4e791 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0a3246743b024a30070683ed74d4e791 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.card','data' => ['url' => $details_url,'name' => $$module_name_singular->name,'image' => $$module_name_singular->image]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($details_url),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($$module_name_singular->name),'image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($$module_name_singular->image)]); ?>
                    <?php if($$module_name_singular->created_by_alias): ?>
                        <div class="my-4 flex flex-row items-center">
                            <img class="h-5 w-5 rounded-full sm:h-8 sm:w-8"
                                src="<?php echo e(asset('img/avatars/' . rand(1, 8) . '.jpg')); ?>" alt="Author profile image">
                            <h6 class="small mb-0 ml-2 text-sm dark:text-gray-400">
                                <?php echo e($$module_name_singular->created_by_alias); ?>

                            </h6>
                        </div>
                    <?php else: ?>
                        <div class="my-4 flex flex-row items-center">
                            <img class="h-5 w-5 rounded-full sm:h-8 sm:w-8"
                                src="<?php echo e(asset('img/avatars/' . rand(1, 8) . '.jpg')); ?>" alt="">

                            <a href="<?php echo e(route('frontend.users.profile', $$module_name_singular->created_by)); ?>">
                                <h6 class="small mb-0 ml-2 text-sm dark:text-gray-400">
                                    <?php echo e($$module_name_singular->created_by_name); ?>

                                </h6>
                            </a>
                        </div>
                    <?php endif; ?>

                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        <?php echo e($$module_name_singular->intro); ?>

                    </p>
                    <p>
                        <?php if (isset($component)) { $__componentOriginalcae02e5e6416dd0f111faa2a04e13fc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcae02e5e6416dd0f111faa2a04e13fc5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.badge','data' => ['url' => route('frontend.categories.show', [
                            encode_id($$module_name_singular->category_id),
                            $$module_name_singular->category->slug,
                        ]),'text' => $$module_name_singular->category_name]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('frontend.categories.show', [
                            encode_id($$module_name_singular->category_id),
                            $$module_name_singular->category->slug,
                        ])),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($$module_name_singular->category_name)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcae02e5e6416dd0f111faa2a04e13fc5)): ?>
<?php $attributes = $__attributesOriginalcae02e5e6416dd0f111faa2a04e13fc5; ?>
<?php unset($__attributesOriginalcae02e5e6416dd0f111faa2a04e13fc5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcae02e5e6416dd0f111faa2a04e13fc5)): ?>
<?php $component = $__componentOriginalcae02e5e6416dd0f111faa2a04e13fc5; ?>
<?php unset($__componentOriginalcae02e5e6416dd0f111faa2a04e13fc5); ?>
<?php endif; ?>
                    </p>
                    <p>
                        <?php $__currentLoopData = $$module_name_singular->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if (isset($component)) { $__componentOriginalcae02e5e6416dd0f111faa2a04e13fc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcae02e5e6416dd0f111faa2a04e13fc5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.badge','data' => ['url' => route('frontend.tags.show', [encode_id($tag->id), $tag->slug]),'text' => $tag->name]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('frontend.tags.show', [encode_id($tag->id), $tag->slug])),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tag->name)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcae02e5e6416dd0f111faa2a04e13fc5)): ?>
<?php $attributes = $__attributesOriginalcae02e5e6416dd0f111faa2a04e13fc5; ?>
<?php unset($__attributesOriginalcae02e5e6416dd0f111faa2a04e13fc5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcae02e5e6416dd0f111faa2a04e13fc5)): ?>
<?php $component = $__componentOriginalcae02e5e6416dd0f111faa2a04e13fc5; ?>
<?php unset($__componentOriginalcae02e5e6416dd0f111faa2a04e13fc5); ?>
<?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
        <div class="d-flex justify-content-center w-100 mt-4">
            <?php echo e($$module_name->links()); ?>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\Modules/Post/Resources/views/frontend/posts/index.blade.php ENDPATH**/ ?>