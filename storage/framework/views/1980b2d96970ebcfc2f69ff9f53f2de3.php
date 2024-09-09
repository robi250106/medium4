

<?php $__env->startSection('content'); ?>

    <head>
        <title>Our Story</title>
    </head>

    <body>

        <div class="container">
            <h1> Perjalanan Inovasi dan Semangat </h1>
        </div>
        <img src="<?php echo e(asset('img/image1.jpg')); ?>" alt="Our Team">
        <div class="container">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        <div class="container">
            <h3>Misi Kami:</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking
                at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                as opposed to using 'Content here, content here', making it look like readable English. Many desktop
                publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for
                'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the
                years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            <h3>Visi Kami:</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking
                at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                as opposed to using 'Content here, content here', making it look like readable English. Many desktop
                publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for
                'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the
                years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            <h3>Gabunglah dengan Kisah Kami:</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking
                at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                as opposed to using 'Content here, content here', making it look like readable English. Many desktop
                publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for
                'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the
                years, sometimes by accident, sometimes on purpose (injected humour and the like).]</p>
        </div>

    </body>

    </html>
<?php $__env->stopSection(); ?>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 50px;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    p {
        line-height: 1.5;
    }

    img {
        display: block;
        margin: 20px auto;
        max-width: 100%;
    }

    h2 {
        color: #555;
        margin-top: 30px;
    }
</style>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\medium\resources\views/story.blade.php ENDPATH**/ ?>