<?php get_header(); ?>
<main>
    <div class="keyvisual" id="home">
        <img src="<?php img_dir() ?>/pages/pagekv.png" class="pagekv">
        <div class="title">
            <div class="titlesm"><span>コラム一覧</span></div>
            <div class="titlebg">
                COLUMNS
            </div>
        </div>
    </div>
    <form method="get">
        <div class="category-select">
            <div class="select-name">カテゴリーから探す</div>
            <div class="select-container">
            <select name="column_category" id="column_category">
                <option value="" <?php selected('', $category_filter); ?>>すべて</option>
                <?php
                $column_categories = get_terms('column_top_cate', array('hide_empty' => true));
                foreach ($column_categories as $category) {
                    $category_link = get_term_link($category);
                    $selected = ($category->slug === $category_filter) ? 'selected' : '';
                    echo '<option value="' . esc_attr($category->slug) . '" ' . $selected . '>' . esc_html($category->name) . '</option>';
                }
                ?>
            </select>
            </div>
        </div>
    </form>
    <div id="column-content">
        <ul class="columns">
        </ul>
    </div>
    <?php get_template_part('include/contactbtn'); ?>
</main>
<?php get_footer(); ?>