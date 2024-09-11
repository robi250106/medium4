<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="get-started-card">
            <div class="get-started-header">
                <h2>Get Started</h2>
            </div>
            <div class="get-started-body">
                <p>Welcome to our platform! To get started, please follow the steps below:</p>
                <ol>
                    <li>Create an account by signing up.</li>
                    <li>Verify your email address.</li>
                    <li>Complete your profile to get personalized recommendations.</li>
                </ol>
                <a href="<?php echo e(route('story')); ?>" class="btn btn-primary">Masuk ke our story</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['title' => 'Get Started'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\medium4\resources\views/get-started/index.blade.php ENDPATH**/ ?>