<?php
/*
	 Template Name: Gallery Page
	 Descripttion: Displays photos
 */
 ?>
 <?php get_header(); ?>
<div class="social">
		<div class="shareicons">
			<ul>
				<li><a href="https://www.facebook.com/pages/D-Flex-Strategic-Solutions-Inc/537228659688698"><img src="<?php echo get_template_directory_uri(); ?>/images/Active-Facebook-icon.png" title="Facebook"/></a></li>
				<li><a href="https://twitter.com/Dflex_Strategic"><img src="<?php echo get_template_directory_uri(); ?>/images/Active-Twitter-icon.png" title="Twitter"/></a></li>
				<li><a href="http://ph.linkedin.com/pub/dflex-strategic-solutions-inc/85/b54/5a9"><img src="<?php echo get_template_directory_uri(); ?>/images/Active-linkedin-icon.png" title="LinkedIn"/></a></li>
			</ul>
		</div>
		
		<div id="search">
			<div class="button-search"></div>
			<input type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
	 		</div>

</div>

			
<!--------------Content--------------->
<section id="content">
	<div class="zerogrid block">	
		<div class="row block04">
			<div class="col16">
				<section>
					<p>Home >> Gallery</p>
				</section>
			</div>
		</div>
		
		<div class="row block06">
			<div class="col04">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ga1.jpg"/>
				<p><a href="#">PROJECT 01</a></p>
			</div>
			<div class="col04">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ga2.jpg"/>
				<p><a href="#">PROJECT 02</a></p>
			</div>
			<div class="col04">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ga3.jpg"/>
				<p><a href="#">PROJECT 03</a></p>
			</div>
			<div class="col04">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ga4.jpg"/>
				<p><a href="#">PROJECT 04</a></p>
			</div>
			<div class="col04">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ga5.jpg"/>
				<p><a href="#">PROJECT 05</a></p>
			</div>
			<div class="col04">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ga6.jpg"/>
				<p><a href="#">PROJECT 06</a></p>
			</div>
			<div class="col04">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ga7.jpg"/>
				<p><a href="#">PROJECT 07</a></p>
			</div>
			<div class="col04">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ga8.jpg"/>
				<p><a href="#">PROJECT 08</a></p>
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<footer>
	<div class="wrapfooter">
	<p>Copyright © 2014 - <a href="http://www.dflexssi.com/" target="_blank">D-Flex Strategic Solutions Inc.</p>
	</div>
</footer>

</body></html>