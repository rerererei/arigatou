<?php get_header(); ?>

<main>
<?php
$cat = get_the_category();
$catname = $cat[0]->cat_name;
?>
<!-- メインビジュアル -->
<div class="blog-mv">
    <div class="blog-mv-wrapper">
        <h2 class="blog-mv-title blog-recruit">募集職種・募集要項</h2>
        <div class="mv-sun"></div>
    </div>
</div>
<!-- blog -->
<section id="blog" class="blog">
    <div class="breadcrumb">
        <a href="<?php echo esc_url(home_url()); ?>" class="breadcrumb-link">Top</a>
        <p class="link-active">募集職種</p>
    </div>
    <ul class="blog-list">
        <?php
        $args = array(
            'posts_per_page' => 4,
            'category_name' => 'recruit'
        );
        ?>
        <?php $posts = get_posts($args); ?>
        <?php foreach ($posts as $post) : ?>
            <?php   ($post); ?>
            <li class="recruit-list-item">
                <a href="<?php the_permalink(); ?>">
                    <div class="diary-item-body">
                        <div class="diary-item-body-inner">
                            <div class="diary-item-title"><?php the_title(); ?></div>
                            <p class="diary-item-date"><?php echo get_the_date('Y.m.d'); ?></p>
                        </div>
                    </div>
                </a>
            </li>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
    </ul>

    <div class="link-btn">
        <?php
        if (function_exists("pagination")) {
            pagination($wp_query->max_num_pages);
        }
        ?>
    </div>
</section>
</main>

<?php get_footer(); ?>