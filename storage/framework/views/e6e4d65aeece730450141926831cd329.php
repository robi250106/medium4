

<?php $__env->startSection('content'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medium App</title>
</head>
<div class="dashboard-container">
    <main>
    <section class="overview-cards">
        <!-- Card 1: Total Users -->
        <div class="card bg-info" >
          <h2>Total Users</h2>
          <p>139</p>
          <i class="fas fa-users"></i>
        </div>
        <!-- Card 2: Recent Sign-ups -->
        <div class="card bg-info">
          <h2>Recent Sign-ups</h2>
          <p>135</p>
          <i class="fas fa-chart-line"></i>
        </div>
        <!-- Card 3: Top Referrers -->
        <div class="card bg-info">
          <h2>Top Referrers</h2>
          <p>Google, Facebook, Twitter</p>
          <i class="fas fa-share-alt"></i>
        </div>
        <!-- Card 4: Top Reffers -->
        <div class="card bg-info">
          <h2>Total of the Class</h2>
          <p>7</p>
          <i class="fas fa-share-alt"></i>
        </div>
      </section>
    
      <!-- Recent Activity Feed -->
      <section class="activity-feed">
        <h2>Recent Activity</h2>
        <ul>
          <li>
            <p>John Doe signed up 2 hours ago</p>
            <i class="fas fa-user-plus"></i>
          </li>
          <li>
            <p>Jane Doe logged in 1 hour ago</p>
            <i class="fas fa-user-check"></i>
          </li>
          <li>
            <p>New blog post published 3 hours ago</p>
            <i class="fas fa-pencil-alt"></i>
          </li>
        </ul>
        
      </section>
    
      <!-- Call to Action Button -->
    
    <!-- Footer Section -->
    <footer>
      <!-- Copyright Information -->
      <p>&copy; 2023 STARBIN</p>
    </footer>
    </div>
    
    <!-- Styles -->
    <style>
    .dashboard-container {
      max-width: 1200px;
      margin: 40px auto;
      padding: 20px;
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .overview-cards {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    
    .card {
      background-color: #fff;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 10px;
      margin: 20px;
      width: calc(33.33% - 20px);
    }
    
    .activity-feed {
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 10px;
    }
    
    .btn-primary {
      background-color: #337ab7;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
    }
    
    .btn-primary:hover {
      background-color: #23527c;
    }
    </style>
    <?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\medium\resources\views/front/index.blade.php ENDPATH**/ ?>