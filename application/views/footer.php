<?php $method = $this->uri->segment(1); ?>
<footer class="row">
	<div class="small-12 medium-9 large-9 columns">
		<h4 class="customBorder">Contact Us</h4>
		<ul class="contactInfo">
			<li>Email: <a href="mainto:services@ramonafundinginc.com">Services@ramonafundinginc.com</a></li>
			<li>Phone: 888-869-8397</li>
		</ul>
	</div>
	<div class="small-12 medium-3 large-3 columns stayconnected" >
		<h4 class="customBorder">Stay Connected</h4>
		<div class="row">
			<div class="mall-12 medium-12 large-12 columns customPadding_10 ">
				
				   <div id="fb-root"></div>
				    <script>
				      window.fbAsyncInit = function() {
				        FB.init({
				          appId      : '1411385802460859',
				          status     : true,
				          xfbml      : true
				        });
				      };

				      (function(d, s, id){
				         var js, fjs = d.getElementsByTagName(s)[0];
				         if (d.getElementById(id)) {return;}
				         js = d.createElement(s); js.id = id;
				         js.src = "//connect.facebook.net/en_US/all.js";
				         fjs.parentNode.insertBefore(js, fjs);
				       }(document, 'script', 'facebook-jssdk'));
				    </script>
				<div class="fb-like" data-href="<?php echo base_url().$method;?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
				
			</div>
			<div class="mall-12 medium-12 large-12 columns customPadding_10">
				<a href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			</div>
			<div class="mall-12 medium-12 large-12 columns customPadding_10;">
				<!-- Place this tag where you want the +1 button to render. -->
				<div class="g-plusone" data-size="small" data-annotation="inline"></div>

				<!-- Place this tag after the last +1 button tag. -->
				<script type="text/javascript">
				  (function() {
				    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				    po.src = 'https://apis.google.com/js/platform.js';
				    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				  })();
				</script>
			</div>
		</div>
	</div>

</footer>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="<?php echo base_url();?>application/js/vendor/jquery.laziestloader.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.1.1/js/foundation.min.js"></script>


<?php 
	//  custom javascript libraries
	for ($i = 0; $i < count($libs); $i++) { ?>
	<script src="<?php echo $libs[$i];?>"></script>
	<?php } ?>
	<script type="text/javascript">$(document).foundation();</script>
	</body>
</html>
