<?php
$ci =& get_instance();
$ci->load->model('my_db');
$id = $ci->uri->segment(3);

	if(!empty($_POST)){
		
		$data = array(
			'address' => $_POST['address'],
			'completeDate' => $_POST['completeDate'],
			'gc' => $_POST['gc'],
			'work' => $_POST['work'],
			'section' => $_POST['section'],
			);

		$results = $ci->my_db->get_db_item_update("projects",$id,$data);
	}

$query = $ci->my_db->get_db_item("projects",$id);
$query2 = $ci->my_db->get_all("gc");


?>

<section class="row page_content_admin small-12 medium-12 large-12">
	
	<div class="top_frame"></div>
	<div class="small-12 medium-8 large-8 columns ">
			<h3>Create Completed Project</h3>
			<form id="create" role="form" method="post" action="<?php echo current_url(); ?>">
				<?php foreach ($query->result() as $row2){ ?>
				<label for="address">Project Title *</label>
				<input type="text" class="required" id="address" autofocus="autofocus" title="Enter Building Name." placeholder="Enter Buiding Name" name="address" value="<?php echo $row2->address ?>"></input>
				
				<label for="completeDate">Complete date *</label>
				<input type="text" class="required" id="completeDate" title="Job Completion Date." placeholder="Enter Job Completion Date." name="completeDate" value="<?php echo $row2->completeDate ?>"></input>
			
				<label for="gc">General Contractor *</label>
				<select class="required" id="gc" name="gc">
					<?php foreach ($query2->result() as $row){ ?>
					<option value = "<?php echo $row->id; ?>" <?php if($row2->gc == $row->id){echo 'selected='.'selected';}?>><?php echo $row->name; ?></option>
					 <?php } ?>
				</select>

				<label for="work">Work Done *</label>
				<textarea id="work" name="work"><?php echo $row2->work ?></textarea>

				<label for="section">Section Project relate to:</label>
				<select class="required" id="section" name="section">
					<option value = "commerical">Commerical</option>
					<option value = "residential">Residential</option>
				</select>
				<?php } ?>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
<section>

