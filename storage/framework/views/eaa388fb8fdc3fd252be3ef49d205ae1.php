

<?php $__env->startSection('content'); ?>

    <head>
        <title>Membership Form</title>
    </head>

    <body>

        <form class="bg-secondary">
            <label for="name" class="text-white">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email" class="text-white">Email:</label>
            <input type="email"   id="email" name="email" required><br><br>

            <label for="membership_type" class="text-white">Membership
                Type:</label>
            <select id="membership_type" name="membership_type">
                <option value="basic">Free</option>
                <option value="premium">VIP 2</option>
                <option value="premium">VIP 3</option>
                <option value="premium">VIP 4</option>
                <option value="premium">Premium</option>

            </select><br><br>

            <label for="terms" class="text-white">Terms and Conditions:</label>
            <input type="checkbox" id="terms" name="terms" required>
            <label for="terms" class="text-white">I agree to the terms and conditions</label><br><br>

            <input type="submit" value="Submit">
        </form>

    </body>
<?php $__env->stopSection(); ?>
<style>
    form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #cccccc;
        border-radius: 5px;
    }

    label {
        display: block;
        margin-bottom: 5px;

    }

    input[type="text"],
    input[type="email"],
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius:
            3px;
    }

    input[type="checkbox"] {
        margin-right: 5px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;

        border-radius: 3px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color:
            #0069d9;
    }
</style>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\medium\resources\views/member.blade.php ENDPATH**/ ?>