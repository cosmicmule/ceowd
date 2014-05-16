<?php 
$ci =& get_instance();
$ci->load->model('my_db');

if($ci->uri->segment(3) == "delete"){
	$ci->my_db->set_for_deletion("imageLibrary",$ci->uri->segment(4));
	redirect( 'admin/view-all-photos', 'refresh');
}

$query = $ci->my_db->get_all("imageLibrary");
?>


<section class="row page_content_admin">
	
	<div class="top_frame"></div>
	<div class="small-12 medium-12 large-12 columns ">
			<h3>View All Photos</h3>
			<table style="width:100%">
			  <thead>
			    
			    <tr>
			      <th>Project Reference</th>
			      <th>Image</th>
			      <th>Delete</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php foreach ($query->result() as $row){ ?>
			    <tr>
			      <td><?php echo $row->referenceId;?></td>
			      <td><img src="<?php echo base_url(); ?>application/img/projects/thumb/<?php echo $row->thumb;?>" alt=""></td>
			      <td><a href="<?php echo base_url() ?>admin/view-all-photos/delete/<?php echo $row->id;?>">Delete</a></td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
		</div>
<section>


