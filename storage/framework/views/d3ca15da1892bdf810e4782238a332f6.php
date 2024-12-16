<?php $__env->startSection('title'); ?>
    <?php echo e($$module_name_singular->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <section class="body-font bg-gray-100 px-6 text-gray-600 dark:bg-gray-800 dark:text-gray-400 sm:px-20">
        <div class="container mx-auto flex flex-col items-center py-8 sm:py-16 md:flex-row">
            <div
                class="flex flex-col items-center text-center sm:w-4/12 md:items-start md:pr-16 md:text-left lg:flex-grow lg:pr-24">
                <h1 class="mb-4 text-3xl font-medium text-gray-800 dark:text-gray-200 sm:text-4xl">
                    <?php echo e($$module_name_singular->name); ?>

                </h1>
                <?php if($$module_name_singular->intro != ''): ?>
                    <p class="mb-8 leading-relaxed">
                        <?php echo e($$module_name_singular->intro); ?>

                    </p>
                <?php endif; ?>

                <?php echo $__env->make('frontend.includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="mb-4 w-full sm:mb-0 sm:w-8/12">
                <img class="rounded object-cover object-center shadow-md" src="<?php echo e($$module_name_singular->image); ?>"
                    alt="<?php echo e($$module_name_singular->name); ?>">
            </div>
        </div>
    </section>

    <section class="px-6 py-6 dark:bg-gray-700 dark:text-gray-300 sm:px-20 sm:py-10">
        <div class="container mx-auto flex flex-col md:flex-row">
            <div class="flex flex-col sm:w-8/12 sm:pr-8 lg:flex-grow">
                <div class="pb-5">
                    <p>
                        <?php echo $$module_name_singular->content; ?>

                    </p>
                </div>

                <hr>

                <div class="py-5">
                    <div class="flex flex-col justify-between sm:flex-row">
                        <div class="pb-2">
                            <?php echo e(__('Written by')); ?>:
                            <?php echo e(isset($$module_name_singular->created_by_alias) ? $$module_name_singular->created_by_alias : $$module_name_singular->created_by_name); ?>

                        </div>
                        <div class="pb-2">
                            <?php echo e(__('Published at')); ?>: <?php echo e($$module_name_singular->published_at->isoFormat('llll')); ?>

                        </div>
                    </div>
                </div>

                <div class="flex flex-row justify-between py-5">
                    <div>
                        <span class="font-weight-bold">
                            <?php echo app('translator')->get('Category'); ?>:
                        </span>
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
                    </div>
                </div>

                <?php if(count($$module_name_singular->tags)): ?>
                    <div class="py-5">
                        <span class="font-weight-bold">
                            <?php echo app('translator')->get('Tags'); ?>:
                        </span>

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
                    </div>
                <?php endif; ?>

                <div class="py-5">
                    <div class="flex flex-row content-center items-center justify-around">
                        <h6 class="">Share with others</h6>

                        <div>
                            <?php $title_text = $$module_name_singular->name; ?>

                            <button
                                class="tooltip m-2 rounded-sm border border-gray-400 p-2 transition duration-300 ease-out hover:border-gray-600 hover:bg-gray-100 hover:shadow-lg dark:hover:bg-gray-600 dark:hover:text-gray-200"
                                data-title='Share on Twitter' data-placement="top" data-sharer="twitter"
                                data-via="muktolibrary" data-title="<?php echo e($title_text); ?>" data-hashtags="muktolibrary"
                                data-url="<?php echo e(url()->full()); ?>" data-toggle="tooltip" data-original-title="Share on Twitter"
                                title="Share on Twitter">
                                <svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                </svg>
                            </button>

                            <button
                                class="tooltip m-2 rounded-sm border border-gray-400 p-2 transition duration-300 ease-out hover:border-gray-600 hover:bg-gray-100 hover:shadow-lg dark:hover:bg-gray-600 dark:hover:text-gray-200"
                                data-title='Share on Facebook' data-placement="top" data-sharer="facebook"
                                data-hashtag="muktolibrary" data-url="<?php echo e(url()->full()); ?>" data-toggle="tooltip"
                                data-original-title="Share on Facebook" title="Share on Facebook">
                                <svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="py-5">
                    
                </div>
            </div>

            <div class="flex flex-col sm:w-4/12">
                <div class="py-5 sm:pt-0">
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('recent-posts', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3507847953-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-style'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('after-scripts'); ?>
    <script type="module" src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\Modules/Post/Resources/views/frontend/posts/show.blade.php ENDPATH**/ ?>