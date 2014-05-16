<?php 
$ci =& get_instance();
$ci->load->library('session');


	if(!empty($_POST)){
		$ci =& get_instance();
		$ci->load->model('my_db');
		$results = $ci->my_db->login();

		if($results == "failed"){
			$results_output = 'User Name or Password does match out system, Please try again.';
		}else{
			$data = array('logged_in' => TRUE );
			$ci->load->library('session');
			$ci->session->set_userdata($data);
			redirect( 'admin/admin', 'refresh');
		}
	}
	
?>


<section class="row page_content_admin small-12 medium-12 large-12">
	
	<div class="top_frame"></div>
	<div class="small-12 medium-8 large-8 columns ">
			
			<?php if(isset( $results ) == "failed"){ ?>
				<div data-alert class="alert-box">
				 	<?php echo $results_output; ?>
				</div>
			<?php } ?>
			
			<h3>login</h3>
			

			<form id="create" role="form" method="post" action="<?php echo current_url(); ?>">
				<label for="name">User Name *</label>
				<input type="text" class="required" id="name" autofocus="autofocus" data-placement="left" title="Enter full name in text field." placeholder="Enter full name" name="username" value=""></input>
			
				<label for="password">Password</label>
				<input type="text" class="required" id="password" data-placement="left" title="Enter Password in text field." placeholder="Enter your Email" name="password" value=""></input>
				
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
<section>


