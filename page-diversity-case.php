<?php get_header('product'); ?>
<?php get_template_part( 'include/header-diversity-child' ); ?>
    <main>
    <div class="keyvisual" id="home">
        <div class="title">
        <div class="titlebg">
        ご利用事例
        </div>
        </div>
    </div>
	 <ul class="caselist">
	 <?php
		$wp_query = new WP_Query([
			'post_type'      => 'diversitycase', 
            'posts_per_page' => 12,
            'paged' => get_query_var('paged', 1),
		]);
		?>
		<?php
		if ($wp_query->have_posts()) :
			while ($wp_query->have_posts()) : $wp_query->the_post();
			$case_company = get_field('companyname');
            $case_logo = get_field('companylogo');
		?>
			<li class="caseitem">
			<a href="<?php the_permalink(); ?>" class="casesingle">
				<div class="casepic">
					<?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
				</div>
                <div class="companyname"><?= $case_company ?></div>
				<h2 class="casetitle">
					<?php echo wp_trim_words( get_the_title(), 40, '…' ); ?>
				</h2>
				<div class="caselogo">
                <?php if ($case_logo) {
                    echo '<img src="' . esc_url($case_logo['url']) . '">';} ?>
				</div>
				</a>
			</li>
			<?php endwhile; else : ?>
			<p>まだ記事がありません</p>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
		</ul>
    </div>
    <?php get_template_part( 'include/c_pager_num' ); ?>
    <?php get_template_part( 'include/contactbtn-diversity-child' ); ?>
    </main>
    <?php get_template_part( 'include/footer-diversity' ); ?>
<?php get_footer('product'); ?>