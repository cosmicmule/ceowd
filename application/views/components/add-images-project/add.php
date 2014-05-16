<!-- background - rotater -->
<section class="row page_content_admin small-12 medium-12 large-12">
	
	<div class="top_frame"></div>
	<div class="small-12 medium-8 large-8 columns ">
			<h3>add-images-project</h3>
			<form id="create" role="form" method="post" action="<?php echo base_url(); ?>admin/insert_data/">
				<label for="name">Building Name *</label>
				<input type="text" class="required" id="name" autofocus="autofocus" data-placement="left" title="Enter full name in text field." placeholder="Enter full name" name="name" value=""></input>
			
				<label for="email">General Contractor name *</label>
				<input type="email" class="required" id="email" data-placement="left" title="Enter Email in text field." placeholder="Enter your Email" name="email" value=""></input>
				
				<label for="message">Section *</label>
				<select>
					<option value = "commerical">Commerical</option>
					<option value = "residential">Residential</option>
				</select>
				
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
<section>


