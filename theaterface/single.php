<?php get_header("2"); ?>

		<div class="contents--theater">

			<section class="theaterKey">
				<h1 class="theaterName"><?php the_title(); ?></h1>
			</section>

			<section class="theaterDetail">
			
				<div class="mapBtnArea">

					<?php $startPoint01 = get_field('startPoint01'); ?>
					<?php if(empty($startPoint01)):?>
					<?php else:?>
						<div class="mapBtnInner">
							<a href="javascript:void(0)" class="mapBtn">
								<p class="startPoint"><?php the_field('startPoint01'); ?></p>
							</a>
							<div class="hideMapWrapper">
								<div class="hideMap">
									<div class="closeMap"><a href="javascript:void(0)">▼閉じる</a></div>
									<iframe src="<?php echo the_field('startPoint01-map'); ?>" width="100%" height="440" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					<?php endif;?>

					<?php $startPoint02 = get_field('startPoint02'); ?>
					<?php if(empty($startPoint02)):?>
					<?php else:?>
						<div class="mapBtnInner">
							<a href="javascript:void(0)" class="mapBtn">
								<p class="startPoint"><?php the_field('startPoint02'); ?></p>
							</a>
							<div class="hideMapWrapper">
								<div class="hideMap">
									<div class="closeMap"><a href="javascript:void(0)">▼閉じる</a></div>
									<iframe src="<?php echo the_field('startPoint02-map'); ?>" width="100%" height="440" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					<?php endif;?>

					<?php $startPoint03 = get_field('startPoint03'); ?>
					<?php if(empty($startPoint03)):?>
					<?php else:?>
						<div class="mapBtnInner">
							<a href="javascript:void(0)" class="mapBtn">
								<p class="startPoint"><?php the_field('startPoint03'); ?></p>
							</a>
							<div class="hideMapWrapper">
								<div class="hideMap">
									<div class="closeMap"><a href="javascript:void(0)">▼閉じる</a></div>
									<iframe src="<?php echo the_field('startPoint03-map'); ?>" width="100%" height="440" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					<?php endif;?>

					<?php $startPoint04 = get_field('startPoint04'); ?>
					<?php if(empty($startPoint04)):?>
					<?php else:?>
						<div class="mapBtnInner">
							<a href="javascript:void(0)" class="mapBtn">
								<p class="startPoint"><?php the_field('startPoint04'); ?></p>
							</a>
							<div class="hideMapWrapper">
								<div class="hideMap">
									<div class="closeMap"><a href="javascript:void(0)">▼閉じる</a></div>
									<iframe src="<?php echo the_field('startPoint04-map'); ?>" width="100%" height="440" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					<?php endif;?>

					<?php $startPoint05 = get_field('startPoint05'); ?>
					<?php if(empty($startPoint05)):?>
					<?php else:?>
						<div class="mapBtnInner">
							<a href="javascript:void(0)" class="mapBtn">
								<p class="startPoint"><?php the_field('startPoint05'); ?></p>
							</a>
							<div class="hideMapWrapper">
								<div class="hideMap">
									<div class="closeMap"><a href="javascript:void(0)">▼閉じる</a></div>
									<iframe src="<?php echo the_field('startPoint05-map'); ?>" width="100%" height="440" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					<?php endif;?>

				</div>


				<div class="theaterMap">
					<?php the_post_thumbnail(); ?>
				</div>


				<div class="theaterContact">

					<?php if( get_field('theaterTel') ) { ?>
						<a href="tel:<?php the_field('theaterTel'); ?>" class="theaterContactBtn tleBtn">
							<p class="tleBtn__text">電話をする</p>
						</a>
					<?php } ?>

					<?php if( get_field('siteurl') ) { ?>
						<a href="<?php the_field('siteurl'); ?>" class="theaterContactBtn siteBtn">
							<p class="siteBtn__text">HPを見る</p>
						</a>
					<?php } ?>


				</div>
			

			</section>

		</div><!--contents-->


<?php get_footer("2"); ?>