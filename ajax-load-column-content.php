<?php
$category_filter = isset($_GET['column_category']) ? sanitize_text_field($_GET['column_category']) : '';
$args = array(
    'post_type' => 'column',
    'paged' => get_query_var('paged')
);

if (!empty($category_filter)) {
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'column_top_cate',
            'field' => 'slug',
            'terms' => $category_filter,
        ),
    );
}

$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
    while ($the_query->have_posts()) : $the_query->the_post();
    ?>   
    <li class="onecolumn">
        <a href="<?php the_permalink(); ?>" class="acolumn">
            <div class="clmnpic">
                <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
            </div>
            <h2 class="clmtitle">
                <?php echo wp_trim_words( get_the_title(), 30, '…' ); ?>
            </h2>
            <p class="clmdate">
                <time datetime="<?php the_time('Y.m.d'); ?>">
                    <?php the_time('Y.m.d'); ?>
                </time>
            </p>
            <div class="clmctg">
                <?php
                $custom_categories = get_the_terms(get_the_ID(), 'column_top_cate');

                if ($custom_categories && !is_wp_error($custom_categories)) {
                    foreach ($custom_categories as $custom_category) {
                        echo '<span class="' . $custom_category->slug . '">' . $custom_category->name . '</span>';
                    }
                }
                ?>
            </div>
            <div class="clmcentent">
                <?php echo wp_trim_words( get_the_content(), 58, '…' ); ?>
            </div>
        </a>
    </li>
    <?php endwhile; else: ?>
    <p>まだ記事がありません</p>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>