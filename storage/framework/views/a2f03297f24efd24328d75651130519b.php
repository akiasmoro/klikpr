<footer id="footer1" class="footer px-4 mt-4">
    <div>
        <?php if(setting('show_copyright')): ?>
            <small>
                <?php echo app('translator')->get('Copyright'); ?> &copy; <?php echo e(date('Y')); ?>

                <a class="text-muted" href="/"><?php echo e(app_name()); ?></a>
            </small>
        <?php endif; ?>
    </div>
    <div class="ms-auto"><small><?php echo setting('footer_text'); ?></small></div>
</footer>
<?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\resources\views/components/backend/includes/footer.blade.php ENDPATH**/ ?>