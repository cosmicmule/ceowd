<?php 
$ci =& get_instance();
$ci->load->model('my_db');
$section =  $this->uri->segment(1);
$query = $ci->my_db->filter('projects',$section);
$images_query = $ci->my_db->filter('projects',$section);
?>

<section class="orbit-container">
	<ul data-orbit data-options="slide_number: false;pause_on_hover:false;animation_speed:5000;timer_speed: 6000;navigation_arrows:false;">
	  <li>
	    <img src="./application/img/frontpage_banner_1.jpg" width="100%" /> 
	  </li>
	  <li>
	    <img src="./application/img/frontpage_banner_2.jpg" width="100%" /> 
	  </li>
	</ul>
<section>

<section class="row wrapper page_content_container">
	<div class="top_frame"></div>
	<div class="large-12 large-centered columns clearfix messaging_residential">
	  	<h2 class="large-12 columns">Residential Services</h2>
	  	<p>Custom Engineered Openings provides it’s customers with a complete package for exterior and interior 
		glazing so as to reduce the number of subcontractors needed on each project. This also adds simplicity 
		to the coordination process and allows for smooth transitions between the installations of different 
		materials.</p>
	</div>

	<div class="small-12 medium-12 large-12 columns" >
		
			<img class="left small-3 medium-3 large-3" src="<?php echo base_url(); ?>application/img/residential_support_gfx.jpg">
		
			<h3 class="small-12 medium-5 large-9 columns" >Services</h3>
			<p class="small-12 medium-9 large-9 columns clearfix" >Custom Engineered Openings provides it’s customers with a complete package for exterior and interior 
				glazing so as to reduce the number of subcontractors needed on each project. This also adds simplicity 
				to the coordination process and allows for smooth transitions between the installations of different 
				materials.</p>
			<h5 class="left small-12 medium-9 large-9 clearfix" >Service Listing</h5>
			<div class="service_listing">

				<ul class="right small-12 medium-4 large-4 columns">
					
					<li>Energy Efficient Dual Panes</li>
					<li>Sliding Glass Doors</li>
					<li>In-House Expert Installation</li>
					<li>Friendly & Knowledgeable Staff</li>
					<li>Tinted & Low-E glass</li>
					<li>Reduces Noise by up to 50%</li>
					<li>French and Standard Grids</li>
				</ul>

				<ul class="right small-12 medium-5 large-5 columns">
					<li>Retro & New Construction</li>
					<li>Install Bay and Bow Windows</li>
					<li>Install Skylights</li>
					<li>Create New Window Spaces</li>
					<li>Remove Unwanted Windows</li>
					<li>Change Door and Window Spaces</li>
					<li>Stucco and Drywall Work</li>
					<li>Create New Window Spaces</li>
					<li>Reframing</li>
				</ul>
			</div>
	</div>

	<div id="Recent_List" class="small-12 medium-12 large-12 columns">
		<h3 style="padding-top:40px">Clients List </h3>
		<ul class="clearing-thumbs commerical_gallery">
		   
			<?php foreach ($query->result() as $row):?>
			<?php $images_query = $ci->my_db->get_project_gallery('imageLibrary',$row->id); ?>

			<li class="small-12 medium-4 large-4 columns our_vision">
				<?php $count = 0; ?>
				<h5><?php echo $row->address;?></h5>
					
					<!-- thumb -->
					<?php foreach ($images_query->result() as $row2):?>
					<?php if(!$count > 0){ ?> <div class="display"><img src="./application/img/projects/full/<?php echo $row2->full;?>"></div> <?php } ?>
					<?php if($images_query->num_rows() == 1){?>
					<?php break;}else{?> 
					<div class="columns small-3 medium-3 large-3"><img src="./application/img/projects/thumb/<?php echo $row2->thumb;?>"></div>
					<?php } ?>
					<?php $count += 1;?>
					<?php endforeach;?>
					<!-- thumb -->


				<div class="small-12 medium-12 large-12 columns">
					<div style="overflow:hidden; height:200px;">
						<h5 style="margin:0;padding:10px; background:none"><strong>Project Details:</strong></h5>
						<p><strong>Completed:</strong>	<?php echo $row->completeDate;?></br><strong>GC:</strong> <a href="#"><?php echo $row->gc;?></a>
						</br><strong>Work:</strong> <?php echo $row->work;?></p>
					</div>
					<button class="tiny button" name="LearnMore" value="#">Full Project Details</button>
				</div>
		  	</li>
		  	<?php endforeach;?>

		</ul>
	</div>
</section>