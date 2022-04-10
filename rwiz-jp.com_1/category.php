<?php get_header(); ?>

<main>
    <?php
    $cat = get_the_category();
    $catname = $cat[0]->cat_name;
    ?>
    <!-- メインビジュアル -->
    <div class="blog-mv">
        <div class="blog-mv-wrapper">
            <h2 class="blog-mv-title">日記</h2>
            <div class="mv-sun"></div>
        </div>
    </div>
    <!-- blog -->
    <section id="blog" class="blog">
        <div class="breadcrumb">
            <a href="<?php echo esc_url(home_url()); ?>" class="breadcrumb-link">Top</a>
            <p class="link-active">Diary</p>
        </div>
        <h2 class="section-title-jp">日記<span>diary</span></h2>

        <ul class="blog-list">
            <?php
            $args = array(
                'posts_per_page' => 4
            );
            ?>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                    $cat = get_the_category();
                    $catname = $cat[0]->cat_name;
                    ?>
                    <li class="blog-item">
						<a href="javascript:void(0)">
                            <div class="blog-item-img">
                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="介護の画像">
                            </div>
                            <div class="blog-item-body">
                                <p class="blog-item-date"><?php echo get_the_date('Y.m.d'); ?></p>
                                <div class="blog-item-title"><?php the_title(); ?></div>
                                <p class="blog-item-text">
                                    <?php the_content() ?>
                                </p>
                            </div>
						</a>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>

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