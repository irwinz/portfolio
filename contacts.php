<?php /* Template Name: Контакты */ ?>
<!DOCTYPE html>
<html>
<?php get_header(); ?>
<body>
    <?php get_template_part('_header'); ?>
    <main class="contacts">
        <div class="contacts__page-intro page-intro">
            <div class="page-intro__content">
                <h1 class="page-intro__title">Контакты</h1>
            </div>
        </div>
        <div class="contacts__content">
            <div class="uk-container">
                <div class="contacts__grid">
    				<div>
                        <div class="contacts__info-row">
                            <img class="contacts__icon" src="<?php echo get_template_directory_uri(); ?>/dist/img/map-icon.svg">
                            <span class="contacts__info">Россия, г. Воронеж</span>
                        </div>
                        <div class="contacts__info-row">
                            <img class="contacts__icon" src="<?php echo get_template_directory_uri(); ?>/dist/img/mail-icon.svg">
                            <span class="contacts__info">xxxxxxxxx@gmail.com</span>
                        </div>
                        <div class="contacts__info-row">
                            <img class="contacts__icon" src="<?php echo get_template_directory_uri(); ?>/dist/img/phone-icon.svg">
                            <span class="contacts__info">xxxx-xxxx-xxx-xxx</span>
                        </div>
                        <div class="contacts__info-row">
                            <img class="contacts__icon" src="<?php echo get_template_directory_uri(); ?>/dist/img/skype-icon.svg">
                            <span class="contacts__info">xxxxxx</span>
                        </div>
                        <div class="contacts__info-row">
                            <img class="contacts__icon" src="<?php echo get_template_directory_uri(); ?>/dist/img/github-icon.svg">
                            <span class="contacts__info">xxxxxxx</span>
                        </div>
    				</div>
                    <div>
                        <form class="contacts-form">
                            <div class="contacts-form__text">
                                Вы также можете связаться со мной, используя форму.
                            </div>
                            <div class="contacts-form__row">
                                <input class="contacts-form__input uk-input" name="contacts_name" type="text" placeholder="Ваше имя">
                            </div>
                            <div class="contacts-form__row">
                                <input class="contacts-form__input uk-input" name="contacts_tel" type="tel" placeholder="Телефон">
                            </div>
                            <div class="contacts-form__row">
                                <input class="contacts-form__input uk-input" name="contacts_email" type="email" placeholder="Email*" required>
                            </div>
                            <div class="contacts-form__row">
                                <textarea class="contacts-form__textarea uk-textarea" name="contacts_message" placeholder="Сообщение*" required></textarea>
                            </div>
                            <div class="contacts-form__row">
                                <div class="contacts-form__tip">
                                    Поля с * обязательны для заполнения
                                </div>
                            </div>
                            <div class="contacts-form__row">
                                <button class="contacts-form__submit" type="submit" name="contacts_submit">Отправить</button>
                            </div>
                        </form>
                    </div>
        		</div>
            </div>
        </div>
    </main>
    <?php get_template_part('_footer'); ?>
</body>
</html>
