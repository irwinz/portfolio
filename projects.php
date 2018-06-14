<?php /* Template Name: Проекты */ ?>
<!DOCTYPE html>
<html>
<?php get_header(); ?>
<body>
<?php get_template_part('_header'); ?>
    <main class="projects">
        <div class="projects__page-intro page-intro">
            <div class="page-intro__content">
                <h1 class="page-intro__title"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="projects__content">
            <div class="uk-container">
                <div class="projects__filter">
                    <button class="projects__filter-item projects__filter-item_isActive" type="button">Все</button>
                    <button class="projects__filter-item" type="button">Визитки</button>
                    <button class="projects__filter-item" type="button">Лендинги</button>
                    <button class="projects__filter-item" type="button">Кейсы</button>
                </div>
                <div class="projects__grid">
                    <?php 
                        $projects = get_posts(array(
                            'numberposts' => 4,
                            'post_type' => 'projects'
                            )
                        );
                        foreach ($projects as $key => $post): 
                    ?>
                    <div>
                        <div class="project-item">
                            <div class="project-item__image uk-cover-container">
                                <?php $image = get_field('project_gallery', $post->id)[0]; ?>	
                                <img src="<?php echo $image['url'] ?>" alt="" data-uk-cover>
                            </div>
                            <div class ="project-item__desc">
                                <div class="project-item__title">
                                    <?php the_title(); ?>
                                </div>
                                <div class="project-item__text">
                                    <?php the_content(); ?>
                                </div>
                                <button class="link-more js-project" uk-toggle="target: #project" type="button" data-id="<?php echo the_id(); ?>">Подробнее</button>
                            </div>
                        </div>
                    </div>
                    <?php 
                        endforeach; 
                        wp_reset_postdata();
                    ?>
                </div>
                <button class="show-more" type="button"><span>Показать ещё</span></button>
            </div>
        </div>
        <div class="project-modal" id="project" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <button class="uk-modal-close-default" type="button" data-uk-close></button>
                <div class="project-modal__grid">
                    <div>
                        <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow>
                            <ul class="uk-slideshow-items"></ul>
                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
                        </div>
                    </div>
                    <div>
                        <div class="project-modal__caption">
                            <h2 class="project-modal__title"></h2>
                            <div class="project-modal__desc">
                            </div>
                            <a class="link-out" href="#"><span>Перейти<span class="link-out__icon uk-preserve" uk-icon="icon: arrow-right"></span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_template_part('_footer'); ?>
</body>
</html>
