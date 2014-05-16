<?php 
$ci =& get_instance();
$ci->load->model('my_db');

if($ci->uri->segment(3) == "delete"){
	$ci->my_db->set_for_deletion("gc",$ci->uri->segment(4));
	redirect( 'admin/view-all-gc', 'refresh');
}

$query = $ci->my_db->gc_output("gc");
?>

<section class="row page_content_admin">
	
	<div class="top_frame"></div>
	<div class="small-12 medium-12 large-12 columns ">
			<h3>View All Contractors</h3>
			<table style="width:100%">
			  <thead>
			    <tr>
			      <th>GC Name</th>
			      <th>GC Website</th>
			      <th>Sections</th>
			      <th>Edit GC</th>
			      <th>Delete</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php foreach ($query->result() as $row){ ?>
			    <tr>
			      <td><?php echo $row->name;?></td>
			      <td><a href="<?php echo $row->website;?>"><?php echo $row->website;?></a></td>
			      <td><?php echo $row->section;?></td>
			      <td><a href="<?php echo base_url() ?>admin/edit-gc/<?php echo $row->id;?>">Edit GC</a></td>
			      <td><a href="<?php echo base_url() ?>admin/view-all-gc/delete/<?php echo $row->id;?>">Delete</a></td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
		</div>
<section>


