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
                    <div class="news-item">
                        <div class="news-item__image uk-cover-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/uikit.jpg" alt="" data-uk-cover>
                            <a class="news-item__image-link" href="#"></a>
                        </div>
                        <div class="news-item__desc">
                            <header class="news-item__heading">
                                <div>
                                    <a class="news-item__title-link" href="#">
                                        <h3 class="news-item__title">Заголовок статьи №1</h3>
                                    </a>
                                </div>
                                <div>
                                    <time class="news-item__time" datetime="2018-09-23">2018-09-23</time>
                                </div>
                            </header>
                            <div class="news-item__text">
                                Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для...
                            </div>
                            <a class="link-more" href="#">Читать</a>
                        </div>
                    </div>
                    <div class="news-item">
                        <div class="news-item__image uk-cover-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/avocode.jpg" alt="" data-uk-cover>
                            <a class="news-item__image-link" href="#"></a>
                        </div>
                        <div class="news-item__desc">
                            <header class="news-item__heading">
                                <div>
                                    <a class="news-item__title-link" href="#">
                                        <h3 class="news-item__title">Заголовок статьи №2</h3>
                                    </a>
                                </div>
                                <div>
                                    <time class="news-item__time" datetime="2018-09-23">2018-09-23</time>
                                </div>
                            </header>
                            <div class="news-item__text">
                                Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для...
                            </div>
                            <a class="link-more" href="#">Читать</a>
                        </div>
                    </div>
                    <div class="news-item">
                        <div class="news-item__image uk-cover-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/uikit.jpg" alt="" data-uk-cover>
                            <a class="news-item__image-link" href="#"></a>
                        </div>
                        <div class="news-item__desc">
                            <header class="news-item__heading">
                                <div>
                                    <a class="news-item__title-link" href="#">
                                        <h3 class="news-item__title">Заголовок статьи №3</h3>
                                    </a>
                                </div>
                                <div>
                                    <time class="news-item__time" datetime="2018-09-23">2018-09-23</time>
                                </div>
                            </header>
                            <div class="news-item__text">
                                Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для...
                            </div>
                            <a class="link-more" href="#">Читать</a>
                        </div>
                    </div>
                </div>
                <div class="recent-news__pagination">
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
                </div>
            </div>
        </div>
    </main>
<?php get_template_part('_footer'); ?>
</body>
</html>
