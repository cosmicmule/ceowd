<?php
$ci =& get_instance();
$ci->load->model('my_db');
$id = $ci->uri->segment(3);

	if(!empty($_POST)){
		
		$data = array(
			'name' => $_POST['name'],
			'website' => $_POST['website'],
			'section' => $_POST['section'],
			);

		$results = $ci->my_db->get_db_item_update("gc",$id,$data);
	}

	$query = $ci->my_db->get_db_item("gc",$id);
?>


<section class="row page_content_admin small-12 medium-12 large-12">
	
	<div class="top_frame"></div>
	<div class="small-12 medium-8 large-8 columns ">
			<h3>Edit General Contractors</h3>
			<form id="create" role="form" method="post" action="<?php echo current_url(); ?>">
				<?php foreach ($query->result() as $row){ ?>
				<label for="name">Building Name *</label>
				<input type="text" class="required" id="name" autofocus="autofocus" data-placement="left" title="Enter full name in text field." placeholder="Enter full name" name="name" value="<?php echo $row->name;?>">
			
				<label for="website">General Contractor name *</label>
				<input type="text" class="required" id="website" data-placement="left" title="Enter Email in text field." placeholder="Enter your Email" name="website" value="<?php echo $row->website;?>">
				
				<label for="section">Section *</label>
				<select id="section" name="section">
					<option value = "commerical" <?php if($row->section == "commerical"){echo 'selected='.'selected';}?> ><?php echo $row->section; ?></option>
					<option value = "residential"<?php if($row->section == "residential"){echo 'selected='.'selected';}?> >Residential</option>
				</select>
				 <?php } ?>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
<section>


