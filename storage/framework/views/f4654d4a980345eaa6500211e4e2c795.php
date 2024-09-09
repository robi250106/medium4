<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <div>
                        <b>Single</b>
                    </div>
                    <div class="mt-3">
                        Ini single
                    </div>
                    <hr>
                    <div class="mt-3">
                        <a href="#" class="btn btn-dark">Get Membership</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <div>
                        <b>Premium</b>
                    </div>
                    <div class="mt-3">
                        Ini Premium
                    </div>
                    <hr>
                    <div class="mt-3">
                        <a href="#" class="btn btn-dark">Get Membership</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <div>
                        <b>Business</b>
                    </div>
                    <div class="mt-3">
                        Ini Business
                    </div>
                    <hr>
                    <div class="mt-3">
                        <a href="#" class="btn btn-dark">Get Membership</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['title' => 'Membership'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\medium4\resources\views/membership/index.blade.php ENDPATH**/ ?>