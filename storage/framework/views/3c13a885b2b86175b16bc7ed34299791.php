

<?php $__env->startSection('content'); ?>

    <head>
        <title>Write Your Story</title>
    </head>

    <body>
        <h1>Write Your Story</h1>

        <div class="container">
            <textarea class="bg-light" id="story" placeholder="Write here"></textarea>
            <div class="d-grid gap-2">
                <button onclick="saveStory()">Save Story</button>
            </div>
        </div>

    </body>
<?php $__env->stopSection(); ?>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }

    .container {
        width: 600px;
        /* Sesuaikan lebar container */
        max-width: 100%;
        /* Agar tidak melebihi lebar layar */
    }

    textarea::placeholder {
        color: rgb(153, 140, 140);
    }

    h1 {
        text-align: center;
    }

    textarea {
        width: 100%;
        height: 300px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }

    button:hover {
        background-color: #0069d9;

    }
</style>
<script>
    function saveStory() {
        var storyText = document.getElementById("story").value;
        // Implement your logic to save the story here
        console.log("Story saved:", storyText);
    }
</script>
<script>
    function saveStory() {
        var storyText = document.getElementById("story").value;
        localStorage.setItem("story", storyText);
        console.log("Story saved to local storage.");
    }
</script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\medium\resources\views/write/index.blade.php ENDPATH**/ ?>