<?php $__env->startSection('content'); ?>
    <div style="display: flex; align-items: center;">
    <div style="flex: 1;">
        <h1 style="font-family: 'Charter', serif !important;font-weight: 500;font-size:8em;">
            HUMAN <br />
            stories & ideas
        </h1>
        <p style="font-family: 'KievitOT', sans-serif !important;font-size:1.6em;">
            A place to read, write, and deepen your understanding
        </p>

        <a href="#" class="btn btn-light rounded-pill bg-dark mt-3" style="color: #fff;font-size:1.5em;padding: 15px 40px;">
            Start reading
        </a>
    </div>
        <img src="<?php echo e(asset('img/home.webp')); ?>" alt="" style="max-width: 35%; height: auto;">
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['title' => 'Home'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\medium4\resources\views/welcome.blade.php ENDPATH**/ ?>