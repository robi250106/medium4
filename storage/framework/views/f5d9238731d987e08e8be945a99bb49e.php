<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            Tell your story matte
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('write.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Author</label>
                    <input type="text" name="author" class="form-control">
                </div>
                <div class="mb-3 form-floating">
                    <textarea class="form-control" name="ur_story" placeholder="Leave a comment here" id="floatingTextarea" style="height: 200px"></textarea>
                    <label for="floatingTextarea">Your Story</label>
                </div>
                <button type="submit" class="btn btn-primary">Publish</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['title' => 'Write'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\medium4\resources\views/write/index.blade.php ENDPATH**/ ?>