<?php get_header(); ?>
	

			

		<div class="contents--index">
			<section class="searchArea">
				<div class="searchLogo"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/search.png"></div>
			
			
				<div class="formArea">
	        <form method="post" action="<?php echo $_POST['tsInput'] ?>">
	        	<dl class="searchBox">
							<dt><input type="text" class="tsInput" name="tsInput" value="<?php echo $_POST['tsInput'] ?>"></dt>
							<dd><button type="submit" name="" value=""><span></span></button></dd>
						</dl>
	        </form>

	        


    		</div>
	      <div class="tsArea"></div>



			</section>
		</div><!--contents-->



<?php get_footer(); ?>