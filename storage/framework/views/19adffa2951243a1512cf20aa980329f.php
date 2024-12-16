

<?php $__env->startSection('title'); ?> <?php echo e(__($module_title)); ?> <?php $__env->stopSection(); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.breadcrumb-item','data' => ['type' => 'active','icon' => ''.e($module_icon).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.breadcrumb-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'active','icon' => ''.e($module_icon).'']); ?><?php echo e(__($module_title)); ?> <?php echo $__env->renderComponent(); ?>
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



<div class="card">
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
            <i class="<?php echo e($module_icon); ?>"></i> <?php echo e(__($module_title)); ?>

            <small class="text-muted"><?php echo e(__($module_action)); ?></small>

             <?php $__env->slot('toolbar', null, []); ?> 
                <a id="tmbl" class="btn btn-sm btn-primary mt-1" data-bs-toggle="modal" data-bs-target="#exampleModal" data-toggle="tooltip" href="#" aria-label="Tambah Pengaduan" data-coreui-original-title="Tambah Pengaduan"><i class="fas fa-plus"></i></a>
            

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form method="POST" action="">
                    <?php echo csrf_field(); ?>
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pengaduan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="text-align: left;">
                    <div class="mb-3">
                        <label for="nama" :value="__('nama')" class="form-label">Nama</label>
                        <input id="nama" type="text" class="form-control" name="nama" value="<?php echo e(old('nama')); ?>" placeholder="Ketik Nama Anda">
                    </div>
                    <div class="mb-3">
                        <label for="nohp" :value="__('nohp')" class="form-label">No HP</label>
                        <input id="nohp" type="text" class="form-control" name="nohp" value="<?php echo e(old('nohp')); ?>" placeholder="Ketik Nomor HP">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" :value="__('deskripsi')" class="form-label">Deskripsi Pengaduan</label>
                        <textarea id="deskripsi" class="form-control" name="deskripsi" value="<?php echo e(old('deskripsi')); ?>" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"> <i class="fas fa-check"></i> Submit</button>
                    </div>
                    </div>
                    </form>
                </div>
                </div>
                            
            
            
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
                    <div class="table-responsive">
                        <table class="table-bordered table-hover table-responsive-sm table" id="datatable">
                            <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Nama
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        No HP
                                    </th>
                                    <th>
                                        Deskripsi Pengaduan
                                    </th>
                                    <th>
                                        Tanggal Submit
                                    </th>
                                    <?php if(Auth::user()->roles->pluck('name')[0] =='user'): ?>  
                                    <!-- nothing -->
                                    <?php else: ?>
                                    <?php endif; ?>
                                </tr>
                            </thead>

                            <tbody>
                            <!-- <input type="text" value="<?php echo e(Auth::id()); ?>">
                            <input type="text" value="<?php echo e(Auth::user()->roles->pluck('name')[0]); ?>">
                            <input type="text" value="<?php echo e(Auth::user()->email); ?>"> -->

                            <?php if(Auth::user()->roles->pluck('name')[0] =='user'): ?>    
                            <?php $__currentLoopData = $$module_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module_name_singular): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          
                                    <tr>
                                        <td>
                                        <?php echo e($module_name_singular->id); ?>

                                        </td>
                                        <td>
                                        <?php echo e($module_name_singular->nama); ?>

                                        </td>
                                        <td>
                                        <?php echo e($module_name_singular->email); ?>

                                        </td>
                                        <td>
                                        <?php echo e($module_name_singular->nohp); ?>

                                        </td>
                                        <td>
                                        <?php echo e($module_name_singular->deskripsi); ?>

                                        </td>
                                        <td>
                                        <?php echo e($module_name_singular->created_at); ?>

                                        </td>

                                            <!-- td nothing -->

                                          
                                    </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                    <?php $__currentLoopData = $module_name_super; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $super): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                        <?php echo e($super->id); ?>

                                        </td>
                                        <td>
                                        <?php echo e($super->nama); ?>

                                        </td>
                                        <td>
                                        <?php echo e($super->email); ?>

                                        </td>
                                        <td>
                                        <?php echo e($super->nohp); ?>

                                        </td>
                                        <td>
                                        <?php echo e($super->deskripsi); ?>

                                        </td>
                                        <td>
                                        <?php echo e($super->created_at); ?>

                                        </td>
                                        <!-- <td class="text-end">
                                            <a class='btn btn-sm btn-primary mt-1' data-toggle="tooltip"
                                                href='7'
                                                title="Edit <?php echo e(ucwords(Str::singular($module_name))); ?>"><i
                                                    class="fas fa-wrench"></i></a>
                                            <a class='btn btn-sm btn-success mt-1' data-toggle="tooltip"
                                                href='8'
                                                title="Show <?php echo e(ucwords(Str::singular($module_name))); ?>"><i
                                                    class="fas fa-tv"></i></a>
                                        </td> -->
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>


                                    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-7">
                    <div class="float-left">
                        <!-- Total <?php echo e($$module_name->total()); ?> <?php echo e(ucwords($module_name)); ?> -->
                    </div>
                </div>
                <div class="col-5">
                    <div class="float-end mb-2">
                        <?php if(Auth::user()->roles->pluck('name')[0] =='user'): ?>  
                        <?php echo $$module_name->render(); ?>

                        <?php else: ?>
                        <?php echo $module_name_super->render(); ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script>
        $('svg.w-5.h-5').css("width", 25)
        $('div.flex.justify-between.flex-1').remove()
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\resources\views/backend/pengaduan/index.blade.php ENDPATH**/ ?>