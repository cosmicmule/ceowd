<?php
$ci =& get_instance();
$ci->load->model('my_db');

	if(!empty($_POST)){

		$data = array(
			'address' => $_POST['address'],
			'completeDate' => $_POST['completeDate'],
			'gc' => $_POST['gc'],
			'work' => $_POST['work'],
			'section' => $_POST['section'],
			);

		$results = $ci->my_db->create_Entry("projects",$data);
	}

$query = $ci->my_db->gc_output("gc");


?>

<section class="row page_content_admin small-12 medium-12 large-12">
	
	<div class="top_frame"></div>
	<div class="small-12 medium-8 large-8 columns ">
			<h3>Create Completed Project</h3>
			<form id="create" role="form" method="post" action="<?php echo current_url(); ?>">
				<label for="address">Project Title *</label>
				<input type="text" class="required" id="address" autofocus="autofocus" title="Enter Building Name." placeholder="Enter Buiding Name" name="address" value=""></input>
				
				<label for="completeDate">Complete date *</label>
				<input type="text" class="required" id="completeDate" title="Job Completion Date." placeholder="Enter Job Completion Date." name="completeDate" value=""></input>
			
				<label for="gc">General Contractor *</label>
				<select class="required" id="gc" name="gc">
					<?php foreach ($query->result() as $row){ ?>
					<option value = "<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
					 <?php } ?>

				</select>

				<label for="work">Work Done *</label>
				<textarea id="work" name="work"></textarea>

				<label for="section">Section Project relate to:</label>
				<select class="required" id="section" name="section">
					<option value = "commerical">Commerical</option>
					<option value = "residential">Residential</option>
				</select>
				
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
<section>


