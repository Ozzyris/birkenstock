<section id="toolbar">
    <a id="hamburger_icon" onclick="switch_menu(); return false;" href="#" title="Menu">
      <span class="line line-1"></span>
      <span class="line line-2"></span>
      <span class="line line-3"></span>
    </a>
     <p>Hello ALEX, How are you today ?</p>
</section>

<nav id="left_navigation">
  <div class="introduction">
    <img id="alfred_logo" src="<?php echo base_url(); ?>assets/AlfredAtWork/images/alfred.svg" />
    <h1>Alfred @ Work</h1>
  </div>
  <ul class="menu">
    <li><a <?php if($active == 'dashboard'){ echo 'class="active"'; } ?> href="<?php echo base_url(); ?>/alfredatwork/dashboard" >Dashboard</a></li>
    <li><a <?php if($active == 'home'){ echo 'class="active"'; } ?> href="<?php echo base_url(); ?>/alfredatwork/home" >Home</a></li>
    <li><a <?php if($active == 'news'){ echo 'class="active"'; } ?> href="<?php echo base_url(); ?>/alfredatwork/news" >News</a></li>
    <li><a <?php if($active == 'product'){ echo 'class="active"'; } ?> href="<?php echo base_url(); ?>/alfredatwork/collection" >Products</a></li>
    <li><a <?php if($active == 'profile'){ echo 'class="active"'; } ?> id="<?php echo base_url(); ?>/alfredatwork/btnAccount" href="<?php echo base_url(); ?>/alfredatwork/profile">Your Account</a></li>
    <li id="btn_logout" ><a href="<?php echo base_url(); ?>/alfredatwork/logout">Logout</a></li>
  </ul>
</nav>