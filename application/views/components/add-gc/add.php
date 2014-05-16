<?php
	if(!empty($_POST)){
		$ci =& get_instance();
		$ci->load->model('my_db');
		$gc_name = $_POST['name'];
		$gc_email = $_POST['website'];

		$data = array(
			'name' => $_POST['name'],
			'website' => $_POST['website'],
			'section' => $_POST['section'],
			);

		$results = $ci->my_db->create_Entry("gc",$data);
	}





?>
<!-- background - rotater -->
<section class="row page_content_admin small-12 medium-12 large-12">
	
	<div class="top_frame"></div>
	<div class="small-12 medium-8 large-8 columns ">
			<h3>Add General Contractors</h3>
			<form id="create" role="form" method="post" action="<?php echo current_url(); ?>">
				<label for="name">GC Name *</label>
				<input type="text" class="required" id="name" autofocus="autofocus" data-placement="left" title="Enter full name in text field." placeholder="Enter full name" name="name" value=""></input>
			
				<label for="website">General Contractor Website *</label>
				<input type="text" class="required" id="website" data-placement="left" title="Enter Email in text field." placeholder="Enter your Email" name="website" value=""></input>
				
				<label for="message">Section *</label>
				<select name="section">
					<option value = "commerical">Commerical</option>
					<option value = "residential">Residential</option>
				</select>
				
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
<section>


