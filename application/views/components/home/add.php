<?php 
$ci =& get_instance();
$ci->load->model('my_db');
$section =  $this->uri->segment(1);
$query = $ci->my_db->filter_limit('projects',"commerical",3);
$query_residential = $ci->my_db->filter_limit('projects',"residential",3);

?>

<!-- application/img/banner_home.jpg -->
<div class="">
<section class="orbit-container">
	<ul data-orbit data-options="slide_number: false;pause_on_hover:false;animation_speed:5000;timer_speed: 6000;navigation_arrows:false;">
	  <li>
	    <img src="<?php echo base_url(); ?>application/img/frontpage_banner_1.jpg" width="100%" /> 
	  </li>
	  <li>
	    <img src="<?php echo base_url(); ?>application/img/frontpage_banner_2.jpg" width="100%" /> 
	  </li>
	</ul>
<section>

<section class="row wrapper frontpage_content_container">
	
		<!-- tab naviagation-->  
		<dl class="tabs" data-tab>
		  <dd class="first active">
		  <a href="#panel2-1">COMMERICAL SERVICES</a></dd>
		  <dd class="second"><a href="#panel2-2">RESIDENTIAL SERVICES</a></dd>
		</dl>

		<!-- tab 1 -->
		<div class="tabs-content left">
		  
		  <div class="content active" id="panel2-1">
		  	<div class="large-12 large-centered columns" style="background:url('http://www.ceowd.com/2014_working/application/img/customer_review_banner.jpg')0 0;color:white">
		  	<h2 style="padding:10px 0px;color:white;">Custom Engineered Openings</h2>
		  	<h4 style="padding:0 20px 30px 0px; color:#e2e2e2;border:none">A professional and experienced Glazing Contractor striving to exceed your Interior and Exterior design and installation goals.</h4>
		  	</div>
		  	
	  		<div class="large-12 large-centered columns" style="   display:inline-block; margin: 0 auto;"  >
		  		<div class="large-11 large-centered columns" style="margin-top:20px border-bottom:2px solid #959595; ">
				<h2 style="margin-bottom:0;padding: 20px 0 20px 20px; border-bottom:2px solid #e9e9e9; color:#206181">Our Services</h2>
		  		<p style="padding:20px; line-height:1.6rem; color:#515151">Our customers are looking for a glazing subcontractor that can provide a complete exterior and interior glazing package. We specialize in Curtainwall, Window wall, storefront, composite metal panels, glass handrail, custom interiors, fire rated glazing, and custom window and door installations. Custom Engineered Openings provides it’s customers with a complete package for exterior and interior glazing so as to reduce the number of subcontractors needed on each project. This also adds simplicity to the coordination process and allows for smooth transitions between the installations of different materials.</p>
		  		
		  			<ul  style="margin-top:20px" class="small-block-grid-2 medium-block-grid-3 large-block-grid-3 large-centered commerical_services">
					  <li><img src="<?php echo base_url(); ?>application/img/icons/8.gif"/><p>Curtainwall Systems </p></li>
					  <li><img src="<?php echo base_url(); ?>application/img/icons/7.gif"/><p>Window wall</p></li>
					  <li><img src="<?php echo base_url(); ?>application/img/icons/6.gif"/><p>Storefront</p></li>
					  <li><img src="<?php echo base_url(); ?>application/img/icons/5.gif"/><p>Composite Metal </br>Panels</p></li>
					  <li><img src="<?php echo base_url(); ?>application/img/icons/4.gif"/><p>Glass Handrail</p></li>
					  <li><img src="<?php echo base_url(); ?>application/img/icons/3.gif"/><p>Custom Interiors</p></li>
					  <li><img src="<?php echo base_url(); ?>application/img/icons/2.gif"/><p>Fire Rated Glazing</p></li>
					  <li><img src="<?php echo base_url(); ?>application/img/icons/9.gif"/><p>Blast Window</p></li>
					  <li><img src="<?php echo base_url(); ?>application/img/icons/1.gif"/><p>Custom Window and Door Installations</p></li>
					</ul>
		  		</div>
			</div>
		  	
			<div class="large-12 columns recent_project_container">
				
				<div class="large-12 large-centered columns">
					<h2 style="color:#206181;padding: 20px 0 20px 20px; border-bottom:1px solid #e9e9e9; text-align:left">Recent Projects</h2>
					<ul class="recent_gallery small-block-grid-2 medium-block-grid-3 large-block-grid-3">
					<?php foreach ($query->result() as $row):?>

					   <?php $images_query = $ci->my_db->get_project_gallery('imageLibrary',$row->id); ?>
						<li style ="padding-bottom:20px;align-text:center!important;" class="small-12 medium-4 large-4 columns our_vision" equalizer-watch>
							<?php $count = 0; ?>
							<h6 style="height:20px;overflow:hidden;"><?php echo $row->address;?></h6>
								
								<!-- thumb -->
								<?php foreach ($images_query->result() as $row2):?>
								<?php if(!$count > 0){ ?> 
									<div class="display">
										<a class="fancybox" rel="group1" href="./application/img/projects/full/<?php echo $row2->full;?>"><img id="yourImg"  class="lazy" src="./application/img/transparent.gif" data-src="./application/img/projects/full/<?php echo $row2->full;?>">	</a>
									</div> 
								<?php } ?>
								
								<?php $count += 1;?>
								<?php endforeach;?>
								<!-- thumb -->
					  	</li>
		  			<?php endforeach;?>
		  			</ul>
					<div class="large-4 large-centered columns"><a class="tiny button large-12 large-centered columns"   name="LearnMore" href="<?php echo base_url();?>commerical#Recent_List">View More Recent Projects</a></div>

				</div>

			</div>

		  </div>
		<!-- tab 2 -->
		<div class="content" id="panel2-2">
			<div class="large-12 large-centered columns" style="background:url('http://www.ceowd.com/2014_working/application/img/customer_review_banner_blue.jpg')0 0;">
		  		<h2 style="padding:10px 0px; color:#ffffff">Custom Engineered Openings</h2>
		  		<h4 style="padding:0 20px 30px 0px;color:#e2e2e2;border:none">Our belief in the need for modern day craftsmanship</br> was the inspiration for this company.</h4>
		  	</div>

		  	<div class="large-12 large-centered columns" style="   display:inline-block; margin: 0 auto;"  >
		  		<div class="large-11 large-centered columns" style="margin-top:20px border-bottom:2px solid #959595; ">
					<h2 style="margin-bottom:0;padding: 20px 0 20px 20px; border-bottom:2px solid #e9e9e9; color:#206181">Our Services</h2>
		  			<p style="padding:20px; line-height:1.6rem; color:#515151">At Custom Engineered Openings we do not simply slip a new window into your existing opening and rely on silicone to protect your home. We go back to the original framing, correct any damage that may exist then install your new windows in a fashion that, once completed, will enhance the beauty of your home and perform beyond your expectations!</p>
		  			<ul  style="margin-top:20px" class="small-block-grid-2 medium-block-grid-4 large-block-grid-4 large-centered commerical_services">
					  <li><img src="<?php echo base_url(); ?>application/img/icons/8.gif"/><p>Energy Efficient Dual Panes</p></li>
					  <li><img src="<?php echo base_url(); ?>application/img/icons/7.gif"/><p>Reduces Noise by up to 50%</p></li>
					  <li><img src="<?php echo base_url(); ?>application/img/icons/6.gif"/><p>In-House Expert Installation</p></li>
					  <li><img src="<?php echo base_url(); ?>application/img/icons/5.gif"/><p>Friendly & Knowledgeable Staff</p></li>

					
					</ul>
		  		</div>
			</div>

			<div class="large-12 columns recent_project_container">
				
				<div class="large-12 large-centered columns">
					<h2 style="color:#206181;padding: 20px 0 20px 20px; border-bottom:1px solid #e9e9e9; text-align:left">Recent Projects</h2>
					
					<ul class="recent_gallery small-block-grid-2 medium-block-grid-3 large-block-grid-3">
					<?php foreach ($query_residential->result() as $row):?>

					   <?php $images_query = $ci->my_db->get_project_gallery('imageLibrary',$row->id); ?>
						<li style ="padding-bottom:20px;align-text:center!important;" class="small-12 medium-4 large-4 columns our_vision" equalizer-watch>
							<?php $count = 0; ?>
							<h6 style="height:20px;overflow:hidden;"><?php echo $row->address;?></h6>
								
								<!-- thumb -->
								<?php foreach ($images_query->result() as $row2):?>
								<?php if(!$count > 0){ ?> 
									<div class="display">
										<a class="fancybox" rel="group1" href="./application/img/projects/full/<?php echo $row2->full;?>"><img id="yourImg"  class="lazy" src="./application/img/transparent.gif" data-src="./application/img/projects/full/<?php echo $row2->full;?>">	</a>
									</div> 
								<?php } ?>
								
								<?php $count += 1;?>
								<?php endforeach;?>
								<!-- thumb -->
					  	</li>
		  			<?php endforeach;?>
		  			</ul>
					<div class="large-4 large-centered columns"><a class="tiny button large-12 large-centered columns"   name="LearnMore" href="<?php echo base_url();?>residential#Recent_List">View More Recent Projects</a></div>
				</div>
			</div>
			</div>


		</div>
</section>	



