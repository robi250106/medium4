<nav class="navbar navbar-expand-lg bg-secondary" style="border-bottom: 1px solid black; border-left: transparent; border-right: transparent; border-top: transparent;">
  <div class="container-fluid">
    <a class="navbar-brand ms-5" href="<?php echo e(route('home')); ?>" style="font-size: 2em;font-weight:700;">
      Medium
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto me-5 mb-2 mb-lg-0">
        <li class="nav-item me-3">
          <a class="nav-link <?php echo e((request()->is('story*')) ? 'active' : ''); ?>" href="<?php echo e(route('story')); ?>">
            Our Story
          </a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link <?php echo e((request()->is('membership*')) ? 'active' : ''); ?>" href="<?php echo e(route('member')); ?>">
            Membership
          </a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link <?php echo e((request()->is('write*')) ? 'active' : ''); ?>" href="<?php echo e(route('write')); ?>">
            Write</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link <?php echo e((request()->is('sign*')) ? 'active' : ''); ?> text-black" href="<?php echo e(route('sign')); ?>">
            Sign In
          </a>
        </li>
        </li>
            </a>
        </li>
        <li class="nav-item me-3">
          <a class="btn btn-light rounded-pill bg-dark" style="color: #fff" href="#">Get Started</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php /**PATH C:\laragon\www\medium4\resources\views/layouts/nav.blade.php ENDPATH**/ ?>