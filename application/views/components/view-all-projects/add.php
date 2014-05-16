<?php 
$ci =& get_instance();
$ci->load->model('my_db');


if($ci->uri->segment(3) == "delete"){
	$ci->my_db->set_for_deletion("projects",$ci->uri->segment(4));
	redirect( 'admin/view-all-projects', 'refresh');
}

$query = $ci->my_db->gc_output("projects");
$max = 1; 

?>


<!-- background - rotater -->
<section class="row page_content_admin">
	
	<div class="top_frame"></div>
	<div class="small-12 medium-12 large-12 columns ">
			<h3>View All Projects</h3>
			<table style="width:100%">
			  <thead>
			    
			    <tr>
			      <th>Project Address</th>
			      <th>Complete Date</th>
			      <th>General Contractor</th>
			      <th>Work Done</th>
			      <th>Section</th>
			      <th>Position</th>
			      <th>Edit</th>
			      <th>Delete Item</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php foreach ($query->result() as $row){ ?>
			    <tr>
			    	<td><?php echo $row->address;?></td>
			    	<td><?php echo $row->completeDate;?></td>
			    	<td><?php echo $row->gc;?></td>
			    	<td><?php $string = $row->work; echo substr($string,0,strpos($string," ",$max));?></td>
			    	<td><?php echo $row->section;?></td>
			    	<td><?php echo $row->positionCount;?></td>
			    	<td><a href="<?php echo base_url() ?>admin/edit-projects/<?php echo $row->id;?>">Edit</a></td>
			    	<td><a href="<?php echo base_url() ?>admin/view-all-projects/delete/<?php echo $row->id;?>">Delete</a></td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
		</div>
<section>


