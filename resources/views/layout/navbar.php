

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo url('/'); ?>">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo url('/'); ?>"><?php echo trans('main.home') ?>home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo url('register'); ?>"><?php echo trans('main.register') ?>Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo url('login'); ?>"><?php echo trans('main.login') ?>Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo url('users'); ?>"><?php echo trans('main.users') ?>Users</a>
        </li>
        <li class="nav-item">
          <?php if(session('locale') == 'ar'): ?>
          <li><a class="nav-link" href="<?php echo url('lang?lang=en'); ?>"><?php echo trans('main.english'); ?>English</a></li>
          <?php else: ?>
            <li><a class="nav-link" href="<?php echo url('lang?lang=ar'); ?>"><?php echo trans('main.arabic'); ?>Arabic</a></li>
          <?php endif; ?>
           
        </li>
        
      </ul>
    
    </div>
  </div>
</nav>