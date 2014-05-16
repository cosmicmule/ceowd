<?php $ci =& get_instance(); ?>

<section class="row page_content_admin small-12 medium-12 large-12">
	
	<div class="top_frame"></div>
	<div class="small-12 medium-8 large-8 columns ">
			<h3>Add General Contractors</h3>
			<form id="create" role="form" method="post" action="<?php echo current_url(); ?>">
				<label for="name">General Contracter Name *</label>
				<input type="text" class="required" id="name" autofocus="autofocus" data-placement="left" title="Enter full name in text field." placeholder="Enter full name" name="name" value=""></input>
			
				<label for="email">General Contractor Website *</label>
				<input type="email" class="required" id="email" data-placement="left" title="Enter Email in text field." placeholder="Enter your Email" name="email" value=""></input>
				
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
<section>


