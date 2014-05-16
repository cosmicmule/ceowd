<div class="contain-to-grid">
  <nav class="top-bar" data-topbar>
    <ul class="title-area">
      <li class="name">
        <h1></h1>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
    </ul>

    <section class="top-bar-section top-bar-section-overide">
      <!-- Right Nav Section -->
      <ul class="right">
        <li class="<?php if($this->uri->segment(1) == 'home' || $this->uri->segment(1) == ''){echo 'active';} ?>"><a  href="<?php echo base_url();?>home">HOME</a></li>
        <li class="<?php if($this->uri->segment(1) == 'about'){echo 'active';} ?>"><a href="<?php echo base_url();?>about">ABOUT US</a></li>
        <li class="<?php if($this->uri->segment(1) == 'commerical'){echo 'active';} ?>"><a href="<?php echo base_url();?>commerical">COMMERICAL</a></li>
        <li class="<?php if($this->uri->segment(1) == 'residential'){echo 'active';} ?>"><a href="<?php echo base_url();?>residential">RESIDENTIAL</a></li>
        <li class="<?php if($this->uri->segment(1) == 'contact'){echo 'active';} ?>"><a  href="<?php echo base_url();?>contact">CONTACT</a></li>
      </ul>
  </nav>
</div>