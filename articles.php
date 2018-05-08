<?php /* Template Name: Проекты */ ?>
<!DOCTYPE html>
<html>
<?php get_header(); ?>
<body>
<?php get_template_part('_header'); ?>
    <main class="articles">
        <div class="articles__page-intro page-intro">
            <div class="page-intro__content">
                <h1 class="page-intro__title"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="articles__content">
            <div class="uk-container">
                <div class="recent-news__pool">
                    <?php
                        $articles = new WP_Query(array('category' => 'Статьи', 'posts_per_page' => 2, 'paged' => get_query_var('paged')));
                        if ($articles->have_posts()):
                        while ($articles->have_posts()):
                        $articles->the_post();
                    ?>
                    <div class="news-item">
                        <div class="news-item__image uk-cover-container">
                            <img src="<?php the_field('article_image') ?>" alt="" data-uk-cover>
                            <a class="news-item__image-link" href="<?php the_permalink() ?>"></a>
                        </div>
                        <div class="news-item__desc">
                            <header class="news-item__heading">
                                <div>
                                    <a class="news-item__title-link" href="<?php the_permalink() ?>">
                                        <h3 class="news-item__title"><?php the_title() ?></h3>
                                    </a>
                                </div>
                                <div>
                                    <time class="news-item__time" datetime="<?php the_time('d.m.Y') ?>"><?php the_time('d.m.Y') ?></time>
                                </div>
                            </header>
                            <div class="news-item__text">
                                <?php the_field('article_intro') ?>
                            </div>
                            <a class="link-more" href="<?php the_permalink() ?>">Читать</a>
                        </div>
                    </div>
                    <?php
                        endwhile;
                        echo paginate_links(array('total' => $articles->max_num_pages));
                        endif;
                    ?>


                <!-- <div class="recent-news__pagination">
                    <ul class="uk-pagination uk-flex-center" uk-margin>
                        <li><a href="#"><span uk-pagination-previous></span></a></li>
                        <li><a href="#">1</a></li>
                        <li class="uk-disabled"><span>...</span></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li class="uk-active"><span>7</span></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">9</a></li>
                        <li><a href="#">10</a></li>
                        <li class="uk-disabled"><span>...</span></li>
                        <li><a href="#">20</a></li>
                        <li><a href="#"><span uk-pagination-next></span></a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </main>
<?php get_template_part('_footer'); ?>
</body>
</html>
