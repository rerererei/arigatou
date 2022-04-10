<?php get_header(); ?>

<main>
    <?php
    $cat = get_the_category();
    $catname = $cat[0]->cat_name;
    ?>
    <!-- メインビジュアル -->
    <div class="blog-mv">
        <div class="blog-mv-wrapper">
            <div class="mv-sun"></div>
        </div>
    </div>
    <!-- blog -->
    <section id="blog" class="blog">
        <?php $catSlug = get_the_category()[0]->slug;?>
        <div class="breadcrumb">
            <a href="<?php echo esc_url(home_url()); ?>" class="breadcrumb-link">Top</a>
            <?php if($catSlug == 'recruit'): ?>
                <a href="<?php echo esc_url(home_url()); ?>/category/recruit" class="breadcrumb-link link-active">募集職種</a>
            <?php elseif($catSlug == 'report'):?>
                <a href="<?php echo esc_url(home_url()); ?>/category/reports" class="breadcrumb-link link-active">活動レポート</a>
            <?php endif;?>
        </div>
        <h1 class="section-title-jp"><?php the_title()?></h2>
            <?php if (has_post_thumbnail()):?>
            <div class="blog-item-img">
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="介護の画像">
            </div>
            <?php endif;?>
            <div class="blog-item-body">
                <p class="blog-item-date"><?php echo get_the_date('Y.m.d'); ?></p>
                <p class="blog-item-text">
                    <?php the_content() ?>
                </p>
            </div>

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