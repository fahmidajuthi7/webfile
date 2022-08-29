
<?php

include'head_script.php';
include'menu.php';
?>



<section class="container-fluid paddings gallery ab_banner" >
	<div class="gl_icon">
		<i class="fa fa-users" aria-hidden="true"></i>

	</div>
	<div class="container ">
	<h2>Our Project</h2>
	</div>
</section>

<section class="container-fluid paddings slogan">	
	<div class="container">	

		
		
<?php if (isset($_GET['page_id']) && $_GET['sub_id']=='view') { ?>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ab_banner2">
			<a class="col-lg-4 col-md-4 col-sm-4 col-xs-12 h_serv">
				<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<img src="images/g1.jpg" />
				</div>
				<div class="serv_text">
					<h3 style="text-align:center" >Womens Employment</h3>
					<p> Lorem ipsum dolor sit amet, blandit vestibulum id posuere mi aliquam, tempus per non lorem praesent, cras mollis malesuada sed, potenti massa facere tellus. Venenatis pellentesque pellentesque nostra sodales justo. </p>
					<p> Lorem ipsum dolor sit amet, blandit vestibulum id posuere mi aliquam, tempus per non lorem praesent, cras mollis malesuada sed, potenti massa facere tellus. Venenatis pellentesque pellentesque nostra sodales justo. </p>
					
				</div>
				
			</a>
			<a class="col-lg-4 col-md-4 col-sm-4 col-xs-12 h_serv">
				<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<img src="images/g3.jpg" />
				</div>
				<div class="serv_text">
					<h3 style="text-align:center" >Blood Donate Campaign</h3>
					<p> Lorem ipsum dolor sit amet, blandit vestibulum id posuere mi aliquam, tempus per non lorem praesent, cras mollis malesuada sed, potenti massa facere tellus. Venenatis pellentesque pellentesque nostra sodales justo. </p>
					<p> Lorem ipsum dolor sit amet, blandit vestibulum id posuere mi aliquam, tempus per non lorem praesent, cras mollis malesuada sed, potenti massa facere tellus. Venenatis pellentesque pellentesque nostra sodales justo. </p>
				</div>
			</a>
			<a class="col-lg-4 col-md-4 col-sm-4 col-xs-12 h_serv">
				<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<img src="images/g2.jpg" />
				</div>
				<div class="serv_text">
					<h3 style="text-align:center" >Day Class For Street Child</h3>
					<p> Lorem ipsum dolor sit amet, blandit vestibulum id posuere mi aliquam, tempus per non lorem praesent, cras mollis malesuada sed, potenti massa facere tellus. Venenatis pellentesque pellentesque nostra sodales justo. </p>
					<p> Lorem ipsum dolor sit amet, blandit vestibulum id posuere mi aliquam, tempus per non lorem praesent, cras mollis malesuada sed, potenti massa facere tellus. Venenatis pellentesque pellentesque nostra sodales justo. </p>
				</div>
			</a>
			
		</div>
		

	
	<?php
	}
	?>

	
	<?php if (isset($_GET['page_id']) && $_GET['sub_id']=='scholarship') { ?>
	
		<h2>SCHOLARSHIP ANNOUNCEMENT</h2>
		<p> The Sobuj Bangla Organization, Chittagong, BD, is pleased to announce its first round of scholarship grants for the academic year 2015. Ten to fifteen exceptional candidates of Chittagong descent will be selected to receive scholarship awards of up to 6000 TK (Per 3 month) .</p>

		<p>Current awards of the program who wish to renew their scholarship are required to submit a renewal application from and necessary documents.</p>

		<p>The purpose of the scholarship program is to further the human capital development of the Bangladesh people by supporting the pursuit of excellence among poor students in a field of studies of their choice.</p>

		<p>In order to apply, applicants must be enrolled in or already accepted into a Scholl program in Chittagong. Applicants must also demonstrate proof of Bangladesh.</p>

		<p>The complete application form along with all supporting documents must be received by mail or email (PDF) on or before Dec 25, 2014 to the Sobuj Bangla Organization. Receipt of application will be acknowledged by email. Selected applicants will be contacted for a phone interview. Awards will be announced on Dec 03, 2014.</p>

		<p>For further information, please contact:<br/>

		Call: +8801813260735<br/>

		Mail: scholarship@sbangla.org </p>
	<?php
	}
	?>	
	<?php if (isset($_GET['page_id']) && $_GET['sub_id']=='blood') { ?>
	
		<h2>Our  Blood Bank</h2>
		<p> Man for man, blood for life. Your single donation can help one or more patients. Every 2 seconds someone needs blood. Your blood helps more than one life at a time- Accident victims, premature babies, patients undergoing major surgeries require whole blood, where your blood after testing is used directly. Patients suffering from trauma, anemia, and other surgeries require only red blood cells, which is separated from your blood.</p>
		<p>You may become a donor with us by registering your blood group. We hope it will help you and help to save lives. </p>
		<div class="slogan col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h4>Help Line (For Blood) : 8801813260735 || 8801775724343 || 8801732423267 || 8801970003999</h4>	
		</div>
		<br/>
		<br/>
		<br/>
		<h2>Chittagong Division</h2>
		<a class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bgroup" data-toggle="modal" data-target="#mymodel">
			<h3>Blood Group A <i class="fa fa-hand-o-right" aria-hidden="true"></i> </h3>
		</a>
		<a class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bgroup" data-toggle="modal" data-target="#mymodel">
			<h3>Blood Group B <i class="fa fa-hand-o-right" aria-hidden="true"></i> </h3>
		</a>
		<a class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bgroup" data-toggle="modal" data-target="#mymodel">
			<h3>Blood Group AB <i class="fa fa-hand-o-right" aria-hidden="true"></i> </h3>
		</a>
		<a class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bgroup" data-toggle="modal" data-target="#mymodel">
			<h3>Blood Group O <i class="fa fa-hand-o-right" aria-hidden="true"></i> </h3>
		</a>
	<?php
	}
	?>	
	</div>
</section>
<section class="container-fluid paddings gallery " >
	<div class="gl_icon">
		<i class="fa fa-phone" aria-hidden="true"></i>		
	</div>
	<h2 class="no_pad" >Contact With Us For Any Kind Of Information<br/>01717-XXXXXXX</h2>
	 
</section>
<!--slider js  start-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<div class="modal mod_fade  fade "  id="mymodel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-content container ">
		<div class="modal-dialog " style="zindex:99999;width:100%;">
		  <div class="modal-header">
		  <h2 style=" text-transform: capitalize;">Blood Group A </h2>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
		  </div>
		  <div class="modal-body">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<h4>Md. Nahid Sarwar  (A+)</h4>
			<p>Location : Bus terminal, Bohaddarhat, Chittagong <br/> Contact : 8801775724343 <br/> Last Giving : 1.6.2015</p>
			
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<h4>Md. Ershad Khan ( A+ )</h4>
			<p>Location :Chittagong, Chandgaong, Pathaniagoda <br/> Contact : 01820017210 <br/> Last Giving : </p>
			
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<h4>Jitu  (A+)</h4>
			<p>Location :Chittagong, Chandgaong, Pathaniagoda <br/> Contact : 01820017210 <br/> Last Giving : </p>
			
			</div>
			
				
			</div>
		</div>							
	</div>
</div>
	
<!--slider js end-->

<?php
	include'footer.php';
?>
