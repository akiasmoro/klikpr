<div>
    <div class="row mt-4">
        <div class="col">
            <input class="form-control my-2" type="text" placeholder=" Search" wire:model.live="searchTerm" />

            <div class="table-responsive">
                <table class="table-hover table-responsive-sm table" wire:loading.class="table-secondary">
                    <thead>
                        <tr>
                            <th><?php echo e(__('labels.backend.users.fields.name')); ?></th>
                            <th><?php echo e(__('labels.backend.users.fields.email')); ?></th>
                            <th><?php echo e(__('labels.backend.users.fields.status')); ?></th>
                            <th><?php echo e(__('labels.backend.users.fields.roles')); ?></th>
                            <th><?php echo e(__('labels.backend.users.fields.permissions')); ?></th>
                            <th><?php echo e(__('labels.backend.users.fields.social')); ?></th>

                            <th class="text-end"><?php echo e(__('labels.backend.action')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <strong>
                                        <a href="<?php echo e(route('backend.users.show', $user->id)); ?>">
                                            <?php echo e($user->name); ?>

                                        </a>
                                    </strong>
                                </td>
                                <td><?php echo e($user->email); ?></td>
                                <td>
                                    <?php echo $user->status_label; ?>

                                    <?php echo $user->confirmed_label; ?>

                                </td>
                                <td>
                                    <!--[if BLOCK]><![endif]--><?php if($user->getRoleNames()->count() > 0): ?>
                                        <ul class="fa-ul">
                                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $user->getRoleNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li>
                                                    <span class="fa-li"><i class="fa-solid fa-user-shield fa-fw"></i></span>
                                                    <?php echo e(ucwords($role)); ?>

                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                        </ul>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </td>
                                <td>
                                    <!--[if BLOCK]><![endif]--><?php if($user->getAllPermissions()->count() > 0): ?>
                                        <ul>
                                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $user->getDirectPermissions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($permission->name); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                        </ul>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </td>
                                <td>
                                    <ul class="list-unstyled">
                                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $user->providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <i class="fab fa-<?php echo e($provider->provider); ?>"></i>
                                                <?php echo e(label_case($provider->provider)); ?>

                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                    </ul>
                                </td>

                                <td class="text-end">
                                    <a class="btn btn-success btn-sm mt-1" data-toggle="tooltip"
                                        href="<?php echo e(route('backend.users.show', $user)); ?>"
                                        title="<?php echo e(__('labels.backend.show')); ?>"><i
                                            class="fas fa-desktop fa-fw"></i></a>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_users')): ?>
                                        <a class="btn btn-primary btn-sm mt-1" data-toggle="tooltip"
                                            href="<?php echo e(route('backend.users.edit', $user)); ?>"
                                            title="<?php echo e(__('labels.backend.edit')); ?>"><i class="fas fa-wrench fa-fw"></i></a>
                                        <a class="btn btn-info btn-sm mt-1" data-toggle="tooltip"
                                            href="<?php echo e(route('backend.users.changePassword', $user)); ?>"
                                            title="<?php echo e(__('labels.backend.changePassword')); ?>"><i
                                                class="fas fa-key fa-fw"></i></a>
                                        <!--[if BLOCK]><![endif]--><?php if($user->status != 2): ?>
                                            <a class="btn btn-danger btn-sm mt-1" data-method="PATCH"
                                                data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip"
                                                data-confirm="Are you sure?"
                                                href="<?php echo e(route('backend.users.block', $user)); ?>"
                                                title="<?php echo e(__('labels.backend.block')); ?>"><i
                                                    class="fas fa-ban fa-fw"></i></a>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        <!--[if BLOCK]><![endif]--><?php if($user->status == 2): ?>
                                            <a class="btn btn-info btn-sm mt-1" data-method="PATCH"
                                                data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip"
                                                data-confirm="Are you sure?"
                                                href="<?php echo e(route('backend.users.unblock', $user)); ?>"
                                                title="<?php echo e(__('labels.backend.unblock')); ?>"><i
                                                    class="fas fa-check fa-fw"></i></a>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        <a class="btn btn-danger btn-sm mt-1" data-method="DELETE"
                                            data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip"
                                            data-confirm="Are you sure?" href="<?php echo e(route('backend.users.destroy', $user)); ?>"
                                            title="<?php echo e(__('labels.backend.delete')); ?>"><i
                                                class="fas fa-trash-alt fa-fw"></i></a>
                                        <!--[if BLOCK]><![endif]--><?php if($user->email_verified_at == null): ?>
                                            <a class="btn btn-primary btn-sm mt-1" data-toggle="tooltip"
                                                href="<?php echo e(route('backend.users.emailConfirmationResend', $user->id)); ?>"
                                                title="Send Confirmation Email"><i class="fas fa-envelope fa-fw"></i></a>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-7">
            <div class="float-left">
                <?php echo $users->total(); ?> <?php echo e(__('labels.backend.total')); ?>

            </div>
        </div>
        <div class="col-5">
            <div class="float-end">
                <?php echo $users->links(); ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\resources\views/livewire/users-index.blade.php ENDPATH**/ ?>