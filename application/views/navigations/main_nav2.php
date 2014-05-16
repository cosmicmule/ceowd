<?php 
$component = $this->uri->segment(2);
$this->load->helper('url');
$custombase_url =  "http://www.ceowd.com/2014_working/";
?>

<nav class="row top-bar" data-topbar>
  <ul class="title-area">
    <li class="name">
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section" style="margin:0">

    <?php echo index_page(); ?>
    <!-- Right Nav Section -->
    <ul class="right">
      <li <?php if($component == "admin"){echo 'class="active"';}?> ><a href="<?php echo $custombase_url;?>admin/">Home</a></li>
      <li class="has-dropdown">
        <a <?php if($component == "create-project" || $component == "edit-project" || $component == "add-images-project"){echo 'class="active"';}?> href="#">Create Projects</a>
        <ul class="dropdown">
          <li <?php if($component == "view-all-projects"){echo 'class="active"';}?>><a href="<?php echo $custombase_url;?>admin/view-all-projects">View All Projects</a></li>
          <li <?php if($component == "create-project"){echo 'class="active"';}?>><a href="<?php echo $custombase_url;?>admin/create-project">Add New Project</a></li>
        </ul>
      </li>
      <li class="has-dropdown">
        <a href="<?php base_url();?>gc">General Contractors</a>
         <ul class="dropdown">
          <li <?php if($component == "view-all-gc"){echo 'class="active"';}?>><a href="<?php echo $custombase_url;?>admin/view-all-gc">View All GC</a></li>
          <li <?php if($component == "create-gc"){echo 'class="active"';}?>><a href="<?php echo $custombase_url;?>admin/add-gc">Add New GC</a></li>
        </ul>
      </li>
         <li class="has-dropdown">
        <a href="<?php base_url();?>gc">Projects Photos</a>
         <ul class="dropdown">
          <li <?php if($component == "view-all-photos"){echo 'class="active"';}?>><a href="<?php echo $custombase_url;?>admin/view-all-photos">View All Photo Gallery</a></li>
          <li <?php if($component == "add-images-project"){echo 'class="active"';}?>><a href="<?php echo $custombase_url;?>admin/add-photos">Add Photos</a></li>
        </ul>
      </li>
      <li <?php if($component == "logout"){echo 'class="active"';}?>><a href="<?php echo $custombase_url;?>admin/logout">Log-Out</a></li>
    </ul>
  </section>
</nav>