<?php /* Template Name: Главная */ ?>
<!DOCTYPE html>
<html>
<?php get_header(); ?>
<body>
	<header class="main-header" data-uk-sticky>
		<div class="uk-container">
			<div class="main-header__cols">
				<div class="main-header__leftside">
					<img class="main-header__logo" src="<?php echo get_template_directory_uri(); ?>/dist/img/logo.svg" alt="">
				</div>
				<div class="main-header__rightside">
					<nav class="main-header__nav">
						<ul>
							<li><a href="#">Главная</a></li>
							<li><a href="#">Работы</a></li>
							<li><a href="#">Статьи</a></li>
							<li><a href="#">Контакты</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<main class="home">
		<div class="home__intro">
			<div class="uk-container">
				<div class="home__content">
					<h1 class="home__intro-title">Портфолио Remzov, bitch!</h1>
				</div>
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
		<section class="home__recent-projects">
			<div class="uk-container">
				<h2 class="section-title section-title_green">Последние работы</h2>
				<div class="home__recent-projects-grid">
					<div>
						<div class="recent-project">
							<div class="recent-project__image uk-cover-container">
								<img src="<?php echo get_template_directory_uri(); ?>/dist/img/project-1.jpg" alt="" data-uk-cover>
							</div>
							<div class="recent-project__desc">
								<div class="recent-project__title">
									Проект №1
								</div>
								<div class="recent-project__text">
									Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне...
								</div>
								<a class="link-more" href="">Перейти</a>
							</div>
						</div>
					</div>
					<div>
						<div class="recent-project">
							<div class="recent-project__image uk-cover-container">
								<img src="<?php echo get_template_directory_uri(); ?>/dist/img/project-2.jpg" alt="" data-uk-cover>
							</div>
							<div class="recent-project__desc">
								<div class="recent-project__title">
									Проект №2
								</div>
								<div class="recent-project__text">
									Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне...
								</div>
								<a class="link-more" href="">Перейти</a>
							</div>
						</div>
					</div>
					<div>
						<div class="recent-project">
							<div class="recent-project__image uk-cover-container">
								<img src="<?php echo get_template_directory_uri(); ?>/dist/img/project-3.jpg" alt="" data-uk-cover>
							</div>
							<div class="recent-project__desc">
								<div class="recent-project__title">
									Проект №3
								</div>
								<div class="recent-project__text">
									Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне...
								</div>
								<a class="link-more" href="">Перейти</a>
							</div>
						</div>
					</div>
					<div>
						<div class="recent-project">
							<div class="recent-project__image uk-cover-container">
								<img src="<?php echo get_template_directory_uri(); ?>/dist/img/project-4.jpg" alt="" data-uk-cover>
							</div>
							<div class="recent-project__desc">
								<div class="recent-project__title">
									Проект №4
								</div>
								<div class="recent-project__text">
									Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне...
								</div>
								<a class="recent-project__more" href="">Перейти</a>
							</div>
						</div>
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
								Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века...
							</div>
							<a class="link-more" href="#">Читать</a>
						</div>
						<div class="recent-news__image">
							<img src="<?php echo get_template_directory_uri(); ?>/dist/img/uikit.jpg" alt="">
						</div>

						</article>
						<article class="recent-news">
							<header class="recent-news__heading">
								<div>
									<h3 class="recent-news__title">Заголовок статьи №1</h3>
								</div>
								<div>
									<time class="recent-news__time" datetime="2018-09-23">2018-09-23</time>
								</div>
							</header>
							<div class="recent-news__text">
								Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века...
							</div>
							<a class="link-more" href="#">Читать</a>
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
						<a class="home__studio-link" href="#">Перейти</a>
					</div>
				</div>
			</div>
		</section>
	</main>
	<footer class="main-footer">
		<div class="uk-container">
			<div class="main-footer__content">
				<div class="main-footer__leftside">
					<div class="main-footer__owner">
						© 2018 Remz — frontend developer Remzov Nikita
					</div>
				</div>
				<div class="main-footer__rightside">
					<a class="main-footer__sitemap" href="#">Карта сайта</a>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/dist/bundle.js"></script>
	</body>
</html>
