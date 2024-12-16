<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'data' => '',
    'module_name',
    'module_path',
    'module_title' => '',
    'module_icon' => '',
    'module_action' => 'Trash',
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'data' => '',
    'module_name',
    'module_path',
    'module_title' => '',
    'module_icon' => '',
    'module_action' => 'Trash',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div class="card">
    <?php if($slot != ''): ?>
        <div class="card-body">
            <?php echo e($slot); ?>

        </div>
    <?php else: ?>
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
                    <a class="btn btn-secondary btn-sm" data-toggle="tooltip" href='<?php echo e(route("backend.$module_name.index")); ?>'
                        title="<?php echo e(__(ucwords($module_name))); ?> <?php echo app('translator')->get('List'); ?>"><i class="fas fa-list"></i>
                        <?php echo app('translator')->get('List'); ?></a>
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
                <div class="col-12">

                    <?php if(count($data) > 0): ?>
                        <div class="table-responsive">
                            <table class="table-bordered table-hover table" id="datatable">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Updated At
                                        </th>
                                        <th>
                                            Created By
                                        </th>
                                        <th class="text-end">
                                            Action
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <?php echo e($row->id); ?>

                                            </td>
                                            <td>
                                                <strong>
                                                    <?php echo e($row->name); ?>

                                                </strong>
                                            </td>
                                            <td>
                                                <?php echo e($row->updated_at->isoFormat('llll')); ?>

                                            </td>
                                            <td>
                                                <?php echo e($row->created_by); ?>

                                            </td>
                                            <td class="text-end">
                                                <a class="btn btn-warning btn-sm" data-method="PATCH"
                                                    data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip"
                                                    href="<?php echo e(route("backend.$module_name.restore", $row)); ?>"
                                                    title="<?php echo e(__('labels.backend.restore')); ?>">
                                                    <i
                                                        class="fa-solid fa-rotate-left"></i>&nbsp;<?php echo e(__('labels.backend.restore')); ?>

                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    <?php else: ?>
                        <div class="text-center">
                            <p>
                                <?php echo app('translator')->get('No record found in trash!'); ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="card-footer">
        <?php if(!empty($data)): ?>
            <div class="row">
                <div class="col-12 col-sm-7">
                    <div class="float-start">
                        <small><?php echo app('translator')->get('Total'); ?> <?php echo e($data->total()); ?> <?php echo e(ucwords($module_name)); ?></small>
                    </div>
                </div>
                <div class="col-12 col-sm-5">
                    <div class="float-end">
                        <?php echo $data->render(); ?>

                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\resources\views/components/backend/layouts/trash.blade.php ENDPATH**/ ?>