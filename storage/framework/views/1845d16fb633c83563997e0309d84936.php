<div class="row">
    <div class="col-12 col-sm-5 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'name';
            $field_lable = __("post::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')->for($field_name)); ?>

            <?php echo field_required($required); ?>

            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>

    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'slug';
            $field_lable = __("post::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')->for($field_name)); ?>

            <?php echo field_required($required); ?>

            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>

    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'created_by_alias';
            $field_lable = __("post::$module_name.$field_name");
            $field_placeholder = "Hide Author User's Name and use Alias";
            $required = '';
            ?>
            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')->for($field_name)); ?>

            <?php echo field_required($required); ?>

            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'intro';
            $field_lable = __("post::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')->for($field_name)); ?>

            <?php echo field_required($required); ?>

            <?php echo e(html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'content';
            $field_lable = __("post::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')->for($field_name)); ?>

            <?php echo field_required($required); ?>

            <?php echo e(html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'image';
            $field_lable = __("post::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')->for($field_name)); ?>

            <?php echo field_required($required); ?>

            <div class="input-group mb-3">
                <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required", 'aria-label' => 'Image', 'aria-describedby' => 'button-image'])); ?>

                <button class="btn btn-outline-info" id="button-image" data-input="<?php echo e($field_name); ?>"
                    type="button"><i class="fas fa-folder-open"></i>&nbsp;<?php echo app('translator')->get('Browse'); ?></button>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'category_id';
            $field_lable = __("post::$module_name.$field_name");
            $field_options = !empty($data) ? optional($data->category())->pluck('name', 'id') : '';
            $selected = !empty($data) ? optional($data->category())->pluck('id')->toArray() : '';
            $field_placeholder = __('Select an option');
            $required = 'required';
            ?>
            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')->for($field_name)); ?>

            <?php echo field_required($required); ?>

            <?php echo e(html()->select($field_name, $field_options, $selected)->placeholder($field_placeholder)->class('form-select select2-category')->attributes(["$required"])); ?>

        </div>
    </div>
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'type';
            $field_lable = __("post::$module_name.$field_name");
            $field_placeholder = __('Select an option');
            $required = 'required';
            $select_options = \Modules\Post\Enums\PostType::toArray();
            ?>
            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')->for($field_name)); ?>

            <?php echo field_required($required); ?>

            <?php echo e(html()->select($field_name, $select_options)->class('form-select')->attributes(["$required"])); ?>

        </div>
    </div>
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'is_featured';
            $field_lable = __("post::$module_name.$field_name");
            $field_placeholder = __('Select an option');
            $required = 'required';
            $select_options = [
                '0' => 'No',
                '1' => 'Yes',
            ];
            ?>
            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')->for($field_name)); ?>

            <?php echo field_required($required); ?>

            <?php echo e(html()->select($field_name, $select_options)->class('form-select')->attributes(["$required"])); ?>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'tags_list[]';
            $field_lable = __("post::$module_name.tags");
            $field_options = !empty($data) ? optional($data->tags)->pluck('name', 'id') : '';
            $selected = !empty($data)
                ? optional($data->tags)
                    ->pluck('id')
                    ->toArray()
                : '';
            $field_placeholder = __('Select an option');
            $required = '';
            ?>
            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')->for($field_name)); ?>

            <?php echo field_required($required); ?>

            <?php echo e(html()->multiselect($field_name, $field_options, $selected)->class('form-control select2-tags')->attributes(["$required"])); ?>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'status';
            $field_lable = __("post::$module_name.$field_name");
            $field_placeholder = __('Select an option');
            $required = 'required';
            $select_options = \Modules\Post\Enums\PostStatus::toArray();
            ?>
            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')->for($field_name)); ?>

            <?php echo field_required($required); ?>

            <?php echo e(html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-select')->attributes(["$required"])); ?>

        </div>
    </div>
    <div class="col-12 col-sm-6 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'published_at';
            $field_lable = __("post::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')->for($field_name)); ?>

            <?php echo field_required($required); ?>

            <?php echo e(html()->datetime($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-5 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'meta_title';
            $field_lable = __("post::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')->for($field_name)); ?>

            <?php echo field_required($required); ?>

            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
    <div class="col-12 col-sm-5 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'meta_keywords';
            $field_lable = __("post::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')->for($field_name)); ?>

            <?php echo field_required($required); ?>

            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
    <div class="col-12 col-sm-2 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'order';
            $field_lable = __("post::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')->for($field_name)); ?>

            <?php echo field_required($required); ?>

            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'meta_description';
            $field_lable = __("post::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')->for($field_name)); ?>

            <?php echo field_required($required); ?>

            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
    <div class="col-12 col-sm-6 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'meta_og_image';
            $field_lable = __("post::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            <?php echo e(html()->label($field_lable, $field_name)->class('form-label')->for($field_name)); ?>

            <?php echo field_required($required); ?>

            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
</div>


<?php $__env->startPush('after-styles'); ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
    <style>
        .note-editor.note-frame :after {
            display: none;
        }

        .note-editor .note-toolbar .note-dropdown-menu,
        .note-popover .popover-content .note-dropdown-menu {
            min-width: 180px;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('after-scripts'); ?>
    <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
    <script type="module">
        // Define function to open filemanager window
        var lfm = function(options, cb) {
            var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
            window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
            window.SetUrl = cb;
        };

        // Define LFM summernote button
        var LFMButton = function(context) {
            var ui = $.summernote.ui;
            var button = ui.button({
                contents: '<i class="note-icon-picture"></i> ',
                tooltip: 'Insert image with filemanager',
                click: function() {
                    lfm({
                        type: 'image',
                        prefix: '/laravel-filemanager'
                    }, function(lfmItems, path) {
                        lfmItems.forEach(function(lfmItem) {
                            context.invoke('insertImage', lfmItem.url);
                        });
                    });
                }
            });
            return button.render();
        };

        $('#content').summernote({
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['fontname', 'fontsize', 'bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'lfm', 'video']],
                ['view', ['codeview', 'undo', 'redo', 'help']],
            ],
            buttons: {
                lfm: LFMButton
            }
        });
    </script>

    <script type="module" src="<?php echo e(asset('vendor/laravel-filemanager/js/stand-alone-button.js')); ?>"></script>
    <script type="module">
        $('#button-image').filemanager('image');
    </script>

    <!-- Select2 Library -->
    <?php if (isset($component)) { $__componentOriginal0ffec7df51857b2f80a6919b7e1f1451 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0ffec7df51857b2f80a6919b7e1f1451 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.library.select2','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('library.select2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0ffec7df51857b2f80a6919b7e1f1451)): ?>
<?php $attributes = $__attributesOriginal0ffec7df51857b2f80a6919b7e1f1451; ?>
<?php unset($__attributesOriginal0ffec7df51857b2f80a6919b7e1f1451); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0ffec7df51857b2f80a6919b7e1f1451)): ?>
<?php $component = $__componentOriginal0ffec7df51857b2f80a6919b7e1f1451; ?>
<?php unset($__componentOriginal0ffec7df51857b2f80a6919b7e1f1451); ?>
<?php endif; ?>
    <script type="module">
        $(document).ready(function() {
            $(document).on('select2:open', () => {
                document.querySelector('.select2-search__field').focus();
                document.querySelector('.select2-container--open .select2-search__field').focus();
            });

            $('.select2-category').select2({
                theme: 'bootstrap-5',
                placeholder: '<?php echo app('translator')->get('Select an option'); ?>',
                minimumInputLength: 2,
                allowClear: true,
                ajax: {
                    url: '<?php echo e(route('backend.categories.index_list')); ?>',
                    dataType: 'json',
                    data: function(params) {
                        return {
                            q: $.trim(params.term)
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                }
            });

            $('.select2-tags').select2({
                theme: 'bootstrap-5',
                placeholder: '<?php echo app('translator')->get('Select an option'); ?>',
                minimumInputLength: 2,
                allowClear: true,
                ajax: {
                    url: '<?php echo e(route('backend.tags.index_list')); ?>',
                    dataType: 'json',
                    data: function(params) {
                        return {
                            q: $.trim(params.term)
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\Modules/Post/Resources/views/backend/posts/form.blade.php ENDPATH**/ ?>