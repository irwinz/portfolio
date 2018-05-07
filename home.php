<?php /* Template Name: Главная */ ?>
<!DOCTYPE html>
<html>
<?php get_header(); ?>
<body>
	<?php get_template_part('_header'); ?>
	<main class="home">
		<div class="home__intro">
			<div class="home__intro-content">
				<h1 class="home__intro-title">Портфолио Remzov, bitch!</h1>
			</div>
			<a class="home__intro-button" href="#about" uk-scroll="offset: 80">
				<span class="home__intro-button-icon uk-preserve" uk-icon="icon: arrow-down"></span>
			</a>
		</div>
		<section class="home__about" id="about">
			<div class="uk-container">
				<h2 class="section-title section-title_dark">О себе</h2>
				<div class="home__about-cols">
					<div class="home__photo">
						<img src="<?php echo get_template_directory_uri(); ?>/dist/img/about-photo.jpg" alt="">
					</div>
					<div class="home__about-text">
						<p>Всем привет!</p>
						<p>Меня зовут Никита. Я Front-end developer. С тех пор как впервые увидел на экране "Hello world!", понял, что это то, чему хочу посвятить всего себя!</p>
						<p>С тех пор утекло немало строчек кода. Сейчас я работаю в команде. Мы создаем все от Landing page до eCommerce проектов.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="home__project-items">
			<div class="uk-container">
				<h2 class="section-title section-title_green">Последние работы</h2>
				<div class="landing__partners-slider uk-visible-toggle" data-uk-slider>
				    <div class="uk-position-relative">
						<div class="uk-slider-container">
						    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
								<li>
									<div class="project-item">
										<div class="project-item__image uk-cover-container">
											<img src="<?php echo get_template_directory_uri(); ?>/dist/img/project-1.jpg" alt="" data-uk-cover>
										</div>
										<div class="project-item__desc">
											<div class="project-item__title">
												Проект №4
											</div>
											<div class="project-item__text">
												Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне...
											</div>
											<a class="link-more" href="#">Перейти</a>
										</div>
									</div>
						        </li>
						        <li>
									<div class="project-item">
										<div class="project-item__image uk-cover-container">
											<img src="<?php echo get_template_directory_uri(); ?>/dist/img/project-2.jpg" alt="" data-uk-cover>
										</div>
										<div class="project-item__desc">
											<div class="project-item__title">
												Проект №4
											</div>
											<div class="project-item__text">
												Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне...
											</div>
											<a class="link-more" href="#">Перейти</a>
										</div>
									</div>
						        </li>
						        <li>
									<div class="project-item">
										<div class="project-item__image uk-cover-container">
											<img src="<?php echo get_template_directory_uri(); ?>/dist/img/project-3.jpg" alt="" data-uk-cover>
										</div>
										<div class="project-item__desc">
											<div class="project-item__title">
												Проект №4
											</div>
											<div class="project-item__text">
												Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне...
											</div>
											<a class="link-more" href="#">Перейти</a>
										</div>
									</div>
						        </li>
						        <li>
									<div class="project-item">
										<div class="project-item__image uk-cover-container">
											<img src="<?php echo get_template_directory_uri(); ?>/dist/img/project-4.jpg" alt="" data-uk-cover>
										</div>
										<div class="project-item__desc">
											<div class="project-item__title">
												Проект №4
											</div>
											<div class="project-item__text">
												Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне...
											</div>
											<a class="link-more" href="#">Перейти</a>
										</div>
									</div>
						        </li>
								<li>
									<div class="project-item">
										<div class="project-item__image uk-cover-container">
											<img src="<?php echo get_template_directory_uri(); ?>/dist/img/project-1.jpg" alt="" data-uk-cover>
										</div>
										<div class="project-item__desc">
											<div class="project-item__title">
												Проект №4
											</div>
											<div class="project-item__text">
												Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне...
											</div>
											<a class="link-more" href="#">Перейти</a>
										</div>
									</div>
								</li>
								<li>
									<div class="project-item">
										<div class="project-item__image uk-cover-container">
											<img src="<?php echo get_template_directory_uri(); ?>/dist/img/project-2.jpg" alt="" data-uk-cover>
										</div>
										<div class="project-item__desc">
											<div class="project-item__title">
												Проект №4
											</div>
											<div class="project-item__text">
												Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне...
											</div>
											<a class="link-more" href="#">Перейти</a>
										</div>
									</div>
								</li>
						    </ul>
						</div>
						<a class="uk-position-center-left-out" href="#" data-uk-slidenav-previous data-uk-slider-item="previous"></a>
						<a class="uk-position-center-right-out" href="#" data-uk-slidenav-next data-uk-slider-item="next"></a>
					</div>
				</div>
				<a class="view-all" href="#"><span>Посмотреть все</span></a>
			</div>
		</section>
		<section class="home__recent-articles">
			<div class="uk-container">
				<h2 class="section-title">Свежие статьи</h2>
				<div class="home__recent-articles-grid">
						<article class="recent-news">
							<div class="recent-news__image uk-cover-container">
								<img src="<?php echo get_template_directory_uri(); ?>/dist/img/uikit.jpg" alt="" data-uk-cover>
							</div>
							<div class="recent-news__desc">
								<header class="recent-news__heading">
									<div>
										<h3 class="recent-news__title">Заголовок статьи №1</h3>
									</div>
									<div>
										<time class="recent-news__time" datetime="2018-09-23">2018-09-23</time>
									</div>
								</header>
								<div class="recent-news__text">
									Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для...
								</div>
								<a class="link-more" href="#">Читать</a>
							</div>
						</article>
						<article class="recent-news">
							<div class="recent-news__image uk-cover-container">
								<img src="<?php echo get_template_directory_uri(); ?>/dist/img/avocode.jpg" alt="" data-uk-cover>
							</div>
							<div class="recent-news__desc">
								<header class="recent-news__heading">
									<div>
										<h3 class="recent-news__title">Заголовок статьи №1</h3>
									</div>
									<div>
										<time class="recent-news__time" datetime="2018-09-23">2018-09-23</time>
									</div>
								</header>
								<div class="recent-news__text">
									Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для...
								</div>
								<a class="link-more" href="#">Читать</a>
							</div>
						</article>
					</div>
				</div>
				<a class="view-all" href="#"><span>Посмотреть все</span></a>
			</div>
		</section>
		<section class="home__studio">
			<div class="uk-container">
				<div class="home__studio-cols">
					<div class="home__studio-offer">
						Хотите разработать сайт с нуля под ключ? Вы можете заказать всю работу веб-студии "ДоменАРТ"!
					</div>
					<div>
						<a class="home__studio-link" href="#"><span>Перейти <span class="home__studio-link-icon uk-preserve" uk-icon="icon: arrow-right"></span></span></a>
					</div>
				</div>
			</div>
		</section>
	</main>
<?php get_template_part('_footer'); ?>
</body>
</html>
