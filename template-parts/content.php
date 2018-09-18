<div class="post__wrapper">
	<?php the_title( sprintf( '<h2 class="post__title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	<div class="post__content">
		<div class="post__content-text">
			<?php the_content( 'Read more...' ); ?>
		</div>
		<div class="post__content-image">
			<?php
				echo '<img src="' . get_the_post_thumbnail_url( get_the_ID(), 'medium' ) .'">';
			?>
		</div>
	</div>
</div>


