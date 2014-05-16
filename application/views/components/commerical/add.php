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

<section class="row page_content_container">
	<!-- Page content messaging -->
	<div class="top_frame"></div>
	<div class="large-12 large-centered columns clearfix messaging">
	  	<h2 class="large-12 columns">Our Commercial Services</h2>
	  	<p class="large-12 columns">
				Custom Engineered Openings provides it’s customers with a complete package for exterior and interior 
				glazing so as to reduce the number of subcontractors needed on each project. This also adds simplicity 
				to the coordination process and allows for smooth transitions between the installations of different 
				materials.
			</p>
	</div>
	<!-- Page content messaging -->

	<div class="small-12 medium-12 large-12 columns  residential_services" >
		
		<img class="left large-3" src="<?php echo base_url(); ?>application/img/commerical_support_gfx.jpg">
		
			<h3 class="small-12 medium-12 large-8 columns" >Services</h3>
			<p class="small-12 medium-12 large-9 columns clearfix" >Custom Engineered Openings provides it’s customers with a complete package for exterior and interior 
				glazing so as to reduce the number of subcontractors needed on each project. This also adds simplicity 
				to the coordination process and allows for smooth transitions between the installations of different 
				materials.</p>
			<h5 class="left small-12 medium-9 large-9 clearfix" >Service Listing</h5>
			<div class="service_listing">
			<ul class="left small-12 medium-6 large-4">
				<li>Curtainwall Systems</li>
				<li>Window wall</li>
				<li>Storefront</li>
				<li>Composite Metal Panels</li>
				<li>Blasted Windows</li>
			</ul>

			<ul class="left small-12 medium-6 large-3">
				<li>Glass Handrail</li>
				<li>Custom Interiors</li>
				<li>Fire Rated Glazing</li>
				<li>Custom Window and Door Installations</li>
			</ul>
			</div>
	</div>
	
	<div class="small-12 medium-12 large-12 columns" data-equalizer>
		<h3 id="Recent_List" style="padding-top:40px">Clients List </h3>
		<ul class=" commerical_gallery" data-equalizer-watch >
		   
		   
		   <?php foreach ($query->result() as $row):?>

		   <?php $images_query = $ci->my_db->get_project_gallery('imageLibrary',$row->id); ?>
		   

			<li class="small-12 medium-4 large-4 columns our_vision" equalizer-watch>
				<?php $count = 0; ?>
				<h5><?php echo $row->address;?></h5>
					
					<!-- thumb -->
					<?php foreach ($images_query->result() as $row2):?>
					<?php if(!$count > 0){ ?> 
						<div class="display thumbnailContainer">
							<img class="lazy" src="./application/img/transparent.gif" data-src="./application/img/projects/full/<?php echo $row2->full;?>">	
						</div> 
					<?php } ?>
					<?php if($images_query->num_rows() == 1){?>
					<?php break;}else{?> 
					<div class="columns small-3 medium-3 large-3"><img src="./application/img/projects/thumb/<?php echo $row2->thumb;?>" data-thumb="thumbnail"></div>
					<?php } ?>
					<?php $count += 1;?>
					<?php endforeach;?>
					<!-- thumb -->


				<div class="small-12 medium-12 large-12 columns">
					<div style="overflow:hidden; height:200px;">
						<h5 style="margin:0;padding:10px; background:none"><strong>Project Details:</strong></h5>
						<p><strong>Completed:</strong>	<?php echo $row->completeDate;?>
						<?php $gc_query = $ci->my_db->get_db_item('gc',$row->gc); ?>
						<?php foreach ($gc_query->result() as $row3){ ?>
						</br><strong>GC:</strong> <a href="<?php echo "http://".$row3->website;?>" target="blank"><?php echo $row3->name;?></a>
						<?php } ?>
						</br><strong>Work:</strong> <?php echo $row->work;?></p>
					</div>
					<!--<button class="tiny button" name="LearnMore" value="#">Full Project Details</button>-->
				</div>
		  	</li>
		  	<?php endforeach;?>
		 
		</ul>
	</div>


  		

	


		
		

</section>