<?php get_header(); ?>

<main>
<?php
$cat = get_the_category();
$catname = $cat[0]->cat_name;
?>
<!-- メインビジュアル -->
<div class="blog-mv">
    <div class="blog-mv-wrapper">
        <h2 class="blog-mv-title blog-reports">活動レポート</h2>
        <div class="mv-sun"></div>
    </div>
</div>
<!-- blog -->
<section id="blog" class="blog">
    <div class="breadcrumb">
        <a href="<?php echo esc_url(home_url()); ?>" class="breadcrumb-link">Top</a>
        <p class="link-active">活動レポート</p>
    </div>
    <h2 class="section-title-jp" style="display:none;">活動レポート<span>Report</span></h2>
    <ul class="">
            <?php
            $args = array(
                'posts_per_page' => 4,
                'category_name' => 'report'
            );
            ?>
            <?php $posts = get_posts($args); ?>
            <?php foreach ($posts as $post) : ?>
                <?php setup_postdata($post); ?>
                <li class="blog-item">
                    <a href="<?php the_permalink(); ?>">
                        <div class="diary-item-body">
                            <div style="text-align: center;">
                                <div style="width: 80%; text-align:center;margin:0 auto">
                                    <?php the_post_thumbnail()?>
                                </div>
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