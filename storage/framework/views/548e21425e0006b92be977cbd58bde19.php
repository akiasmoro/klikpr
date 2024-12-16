<?php
$module_icon = 'fa-solid fa-list-check';
?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Logs by Date')); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.breadcrumb-item','data' => ['route' => ''.e(route('log-viewer::dashboard')).'','icon' => ''.e($module_icon).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.breadcrumb-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => ''.e(route('log-viewer::dashboard')).'','icon' => ''.e($module_icon).'']); ?>
            <?php echo e(__('Log Dashboard')); ?>

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
<?php $component->withAttributes(['type' => 'active']); ?><?php echo app('translator')->get('Daily Log'); ?> <?php echo $__env->renderComponent(); ?>
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
    <div class="card mb-4">
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
                <?php echo app('translator')->get('Logs by Date'); ?>

                 <?php $__env->slot('toolbar', null, []); ?> 
                    <?php if (isset($component)) { $__componentOriginal03c0e80d38d2a15cf58878ae679803f0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal03c0e80d38d2a15cf58878ae679803f0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.buttons.return-back','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.buttons.return-back'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
                    <a class="btn btn-primary ms-1" type="button" href="<?php echo e(route('log-viewer::logs.list')); ?>">
                        <i class="fas fa-list-ol"></i> <?php echo app('translator')->get('Daily Log'); ?>
                    </a>
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

            <div class="table-responsive">
                <table class="table-sm table-hover table">
                    <thead>
                        <tr>
                            <?php $__currentLoopData = $headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <th class="<?php echo e($key == 'date' ? 'text-left' : 'text-center'); ?>" scope="col">
                                    <?php if($key == 'date'): ?>
                                        <span class="badge text-bg-info"><?php echo e($header); ?></span>
                                    <?php else: ?>
                                        <span class="badge badge-level-<?php echo e($key); ?>">
                                            <?php echo e(log_styler()->icon($key)); ?> <?php echo e($header); ?>

                                        </span>
                                    <?php endif; ?>
                                </th>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <th class="text-end" scope="col"><?php echo app('translator')->get('Actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td class="<?php echo e($key == 'date' ? 'text-left' : 'text-center'); ?>">
                                        <?php if($key == 'date'): ?>
                                            <span class="badge text-bg-primary"><?php echo e($value); ?></span>
                                        <?php elseif($value == 0): ?>
                                            <span class="badge empty"><?php echo e($value); ?></span>
                                        <?php else: ?>
                                            <a href="<?php echo e(route('log-viewer::logs.filter', [$date, $key])); ?>">
                                                <span
                                                    class="badge badge-level-<?php echo e($key); ?>"><?php echo e($value); ?></span>
                                            </a>
                                        <?php endif; ?>
                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <td class="text-end">
                                    <a class="btn btn-sm btn-info" href="<?php echo e(route('log-viewer::logs.show', [$date])); ?>">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                    <a class="btn btn-sm btn-success"
                                        href="<?php echo e(route('log-viewer::logs.download', [$date])); ?>">
                                        <i class="fa-solid fa-download"></i>
                                    </a>
                                    <a class="btn btn-sm btn-danger" data-log-date="<?php echo e($date); ?>"
                                        href="#delete-log-modal">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td class="text-center" colspan="11">
                                    <span class="badge text-bg-secondary"><?php echo app('translator')->get('The list of logs is empty!'); ?></span>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <?php echo e($rows->links('pagination::bootstrap-5')); ?>

        </div>
    </div>

    
    <div class="modal fade" id="delete-log-modal" aria-labelledby="delete-log-modal-label" aria-hidden="true"
        tabindex="-1">
        <div class="modal-dialog">
            <form id="delete-log-form" action="<?php echo e(route('log-viewer::logs.delete')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <input name="date" type="hidden" value="">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="delete-log-modal-label"><?php echo app('translator')->get('Delete log file'); ?></h1>
                        <button class="btn-close" data-coreui-dismiss="modal" type="button" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p></p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button class="btn btn-sm btn-light" data-coreui-dismiss="modal"
                            type="button"><?php echo app('translator')->get('Cancel'); ?></button>
                        <button class="btn btn-sm btn-danger" data-loading-text="<?php echo app('translator')->get('Loading'); ?>&hellip;"
                            type="submit"><?php echo app('translator')->get('Delete'); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-styles'); ?>
    <?php echo $__env->make('log-viewer::laravel-starter.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('after-scripts'); ?>
    <script type="module">
        function ready(fn) {
            if (document.readyState !== 'loading') {
                fn();
            } else {
                document.addEventListener('DOMContentLoaded', fn);
            }
        }

        ready(() => {
            let deleteLogModal = new coreui.Modal('div#delete-log-modal')
            let deleteLogModalElt = deleteLogModal._element
            let deleteLogForm = document.querySelector('form#delete-log-form')
            let submitBtn = new coreui.Button(deleteLogForm.querySelector('button[type=submit]'))

            document.querySelectorAll("a[href='#delete-log-modal']").forEach((elt) => {
                elt.addEventListener('click', (event) => {
                    event.preventDefault()

                    let date = event.currentTarget.getAttribute('data-log-date')
                    let message =
                        "<?php echo e(__('Are you sure you want to delete this log file: :date ?')); ?>"

                    deleteLogForm.querySelector('input[name=date]').value = date
                    deleteLogModalElt.querySelector('.modal-body p').innerHTML = message.replace(
                        ':date', date)

                    deleteLogModal.show()
                })
            })

            deleteLogForm.addEventListener('submit', (event) => {
                event.preventDefault()
                submitBtn.toggle('loading')

                fetch(event.currentTarget.getAttribute('action'), {
                        method: 'DELETE',
                        headers: {
                            "X-Requested-With": "XMLHttpRequest",
                            'Content-type': 'application/json'
                        },
                        body: JSON.stringify({
                            date: event.currentTarget.querySelector("input[name='date']").value,
                            _token: event.currentTarget.querySelector("input[name='_token']").value,
                        })
                    })
                    .then((resp) => resp.json())
                    .then((resp) => {
                        if (resp.result === 'success') {
                            deleteLogModal.hide()
                            location.reload()
                        } else {
                            alert('AJAX ERROR ! Check the console !')
                            console.error(resp)
                        }
                    })
                    .catch((err) => {
                        alert('AJAX ERROR ! Check the console !')
                        console.error(err)
                    })

                return false
            })

            deleteLogModalElt.addEventListener('hidden.bs.modal', () => {
                deleteLogForm.querySelector('input[name=date]').value = ''
                deleteLogModalElt.querySelector('.modal-body p').innerHTML = ''
            })
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\resources\views/vendor/log-viewer/laravel-starter/logs.blade.php ENDPATH**/ ?>