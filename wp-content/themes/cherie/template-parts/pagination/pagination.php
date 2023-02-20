<?php if(cherie_show_posts_nav()) : ?>

	<div class="art-pagination art-default-pagination">

		<?php if(get_previous_posts_link()): ?>
			<div class="art-left-arrow">
				<span class="prev-page">
					<?php echo get_previous_posts_link( '<i class="icon-cherie-short-arrow-left"></i>' ); ?>
				</span>
			</div>
		<?php endif; ?>

		<div class="art-center-buttons">
			<?php cherie_page_links(); ?>
		</div>

		<?php if(get_next_posts_link()): ?>
			<div class="art-right-arrow">
				<span class="next-page">
					<?php echo get_next_posts_link( '<i class="icon-cherie-short-arrow-right"></i>' ); ?>
				</span>
			</div>
		<?php endif; ?>

	</div>

<?php endif; ?>