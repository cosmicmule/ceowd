<?php
$ci =& get_instance();
$ci->load->library('mail_lib');

	if(!empty($_POST)){
		$sent = $ci->mail_lib->contact_message('admin@ceowd.com'); 
		echo $sent;
	}

?>

<section class="orbit-container">
	<ul data-orbit data-options="slide_number: false;pause_on_hover:false;animation_speed:5000;timer_speed: 6000;navigation_arrows:false;">
	  <li>
	    <img src="./application/img/frontpage_banner_1.jpg" width="100%" /> 
	  </li>
	  <li>
	    <img src="./application/img/frontpage_banner_2.jpg" width="100%" /> 
	  </li>
	</ul>
<section>

<section class="row page_content_container">
	<div class="top_frame"></div>
	<div class="small-12 medium-8 large-8 columns ">
			<?php if(!empty($sent) == 1){ ?> 
				<div data-alert class="alert-box" style="color:white">We have recieved your email. We will contact you shortly.<a href="#" class="close">&times;</a></div>
			<?php }?>
			<h3>Contact us for a free consultation today!</h3>
			<form id="create" role="form" method="post" action="<?php echo base_url(); ?>contact">
				<label for="name">Name *</label>
				<input type="text" class="required" id="name" autofocus="autofocus" data-placement="left" title="Enter full name in text field." placeholder="Enter full name" name="name" value=""></input>
			
				<label for="email">Email *</label>
				<input type="email" class="required" id="email" data-placement="left" title="Enter Email in text field." placeholder="Enter your Email" name="email" value=""></input>
				
				<label for="message">Message *</label>
				<textarea class="required" id="message" data-placement="left" title="Enter message in text field." placeholder="Create your message" name="message" value=""></textarea>
				
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>



			<div class="small-12 large-4 columns contactOptions">
			<h4 style="margin:5px 5px 15px;">Contact Options</h4>
			<ul>
				<li>
					<div class="our_vision">
						<iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=1055+Bay+Blvd.,+Suite+I+Chula+Vista,+CA+91911&key=AIzaSyAoiC2vcPKj2yIOcEhhZNEBmvUS_o4Bxbk"></iframe>
						<p style="font-size:14px">
							Custom Engineered Openings</br>
							Windows & Doors</br>
							1055 Bay Blvd., Suite I</br>
							Chula Vista, CA 91911</p>
					</div>
				</li>
				<li>
					<p style="font-size:100%">By Phone</p>
					<span class="iconephone"></span><a style="margin-left:5px; font-size:90%;" href="tel:+6194728565">619-472-8565</a>
				</li>
				<li>
					<p style="font-size:100%">Estimation</p>
					<p style="font-size:90%">Steve – Southern California</br>Tel: 951-296-6657</br>Email:<a href="mailto:steve@ceowd.com/">steve@ceowd.com</a></p>
					<p style="font-size:90%">Marc Todd - Northern California</br>Tel: 925-917-1557</br>Email:<a href="mailto:marc@ceowd.com">marc@ceowd.com</a></p>
				</li>
				
			</ul>
		</div>
	
</section>

