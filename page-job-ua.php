<?php
/*
*
Template Name: job-ua */
get_header();
?>

<?php
while (have_posts()) {
    the_post(); ?>

<?php
}
?>

<section class="job_index1">
    <div class="inner">
        <h1>
            Ваша робота мрії: піклуватись про <span>розумне майбутнє</span>
        </h1>
        <ul>
            <li>Офіційно та з соціальними гарантіями</li>
            <li>Атестація за державним зразком</li>
            <li>Ліцензована школа</li>
        </ul>
        <div class="btn-group">
            <a href="/hr-form" class="join">Хочу приєднатися до команди</a> <!-- data-bs-toggle="modal" data-bs-target="#vacancyPopup" -->
            <a href="#jobOffer" class="ask">Маю питання</a>
        </div>
    </div>
</section>

<section class="job_advantages">
    <h2><span>Переваги</span> роботи в Inventor School</h2>
    <div class="advantages-list">
        <div class="advantages-item">
            <h3>
                <img src="<?php echo get_theme_file_uri(); ?>/img/job-advantages-list-1a.png" alt="job inventor">
                <img src="<?php echo get_theme_file_uri(); ?>/img/job-advantages-list-1b.png" alt="job inventor">
            </h3>
            <p>
                Міжнародна підтримка від STEM coach, експертів та науковців
            </p>
        </div>
        <div class="advantages-item">
            <h3>📈</h3>
            <p>Кар’єрний ріст: від педагога-початківця до STEM coach міжнародного рівня</p>
        </div>
        <div class="advantages-item">
            <h3>🎓</h3>
            <p>Підвищення кваліфікації: тренінги з українськими та міжнародними спікерами </p>
        </div>
        <div class="advantages-item">
            <h3>🌎</h3>
            <p>Тренерство: участь в міжнародних проєктах в якості тренера або спікера</p>
        </div>
        <div class="advantages-item">
            <h3>💻 🛋</h3>
            <p>Технічний і затишний простір: сучасне обладнання й приємні умови роботи</p>
        </div>
        <div class="advantages-item">
            <h3>🤜 🤛</h3>
            <p>Команда, що підтримує і надихає</p>
        </div>
    </div>
</section>

<section class="job_facts">
    <div class="inner">
        <h2>Факти про нашого кандидата</h2>
        <div class="facts">
            <div class="left">
                <h4 class="item">Має покликання Вчителя та педагогічну освіту </h4>
                <h4 class="item">Проповідує принцип life-long learning</h4>
                <h4 class="item">Готує учнів до перемог в олімпіадах, конкурсах та у житті</h4>
                <h4 class="item">Знає англійську на рівні не нижче Intermediate</h4>
            </div>
            <div class="right">
                <h4 class="item">Використовує новітні методи навчання</h4>
                <h4 class="item">З любов’ю та знанням психології спілкується з дітьми</h4>
                <h4 class="item">З радістю спілкується з батьками </h4>
                <h4 class="item">Вміє працювати з документацією</h4>
                <h4 class="item">Знає, що навчання – це задоволення та радість</h4>
            </div>
        </div>
    </div>
</section>

<section class="job_vacancies">
    <h2>
        Відкриті вакансії
    </h2>
    <h3>
        Обирайте спеціальність, читайте умови та приєднуйтесь до нас!
    </h3>
    <div class="vac-holder" id="vacHolder">

        <div class="row"><!--row1-->

             <?php
                if (have_rows('group')) {

                    // Loop through rows.
                    while (have_rows('group')) : the_row();

                        if (get_sub_field('col') === 'col1') :
                            ?>
                            <div class="item-rel">
                                <h4><?php echo get_sub_field('title_h4'); ?></h4>
                                    <h5><?php echo get_sub_field('desc_short'); ?></h5>
                                    <div class="expand">
                                        <div class="details-vac" data-sign="+">Докладніше</div>
                                    </div>
                                    <a href="/hr-form/#<?php echo get_sub_field('title_h4'); ?>" class="join-vac" data-vac-name="<?php echo get_sub_field('title_h4'); ?>">Приєднатися до команди →</a>
                                    <div class="item-abs"> <!-- item-abs-active -->
                                        <h4><?php echo get_sub_field('title_h4'); ?></h4>
                                        <h5><?php echo get_sub_field('desc_short'); ?></h5>
                                        <div class="expand">
                                            <div class="details-content">
                                                <strong>Чекаємо на вас, якщо ви:</strong>
                                                <ul>
                                                    <?php echo get_sub_field('li'); ?>
                                                </ul>
                                            </div>
                                            <div class="details-vac-close">↑</div>
                                        </div>
                                        <a href="/hr-form/#<?php echo get_sub_field('title_h4'); ?>" class="join-vac" data-vac-name="<?php echo get_sub_field('title_h4'); ?>">Приєднатися до команди →</a>
                                    </div>
                            </div>
                        <?php
                        endif;
                        // End loop.
                    endwhile;
                }
                // No value.
                ?>

        </div><!--row1 end-->

        <div class="row"><!--row2-->

             <?php
                if (have_rows('group')) {

                    // Loop through rows.
                    while (have_rows('group')) : the_row();

                        if (get_sub_field('col') === 'col2') :
                            ?>
                            <div class="item-rel">
                                <h4><?php echo get_sub_field('title_h4'); ?></h4>
                                    <h5><?php echo get_sub_field('desc_short'); ?></h5>
                                    <div class="expand">
                                        <div class="details-vac" data-sign="+">Докладніше</div>
                                    </div>
                                    <a href="/hr-form/#<?php echo get_sub_field('title_h4'); ?>" class="join-vac" data-vac-name="<?php echo get_sub_field('title_h4'); ?>">Приєднатися до команди →</a>
                                    <div class="item-abs"> <!-- item-abs-active -->
                                        <h4><?php echo get_sub_field('title_h4'); ?></h4>
                                        <h5><?php echo get_sub_field('desc_short'); ?></h5>
                                        <div class="expand">
                                            <div class="details-content">
                                                <strong>Чекаємо на вас, якщо ви:</strong>
                                                <ul>
                                                    <?php echo get_sub_field('li'); ?>
                                                </ul>
                                            </div>
                                            <div class="details-vac-close">↑</div>
                                        </div>
                                        <a href="/hr-form/#<?php echo get_sub_field('title_h4'); ?>" class="join-vac" data-vac-name="<?php echo get_sub_field('title_h4'); ?>">Приєднатися до команди →</a>
                                    </div>
                            </div>
                        <?php
                        endif;
                        // End loop.
                    endwhile;
                }
                // No value.
                ?>

        </div><!--row2 end-->

        <div class="row"> <!--row3-->

             <?php
                if (have_rows('group')) {

                    // Loop through rows.
                    while (have_rows('group')) : the_row();

                        if (get_sub_field('col') === 'col3') :
                            ?>
                            <div class="item-rel">
                                <h4><?php echo get_sub_field('title_h4'); ?></h4>
                                    <h5><?php echo get_sub_field('desc_short'); ?></h5>
                                    <div class="expand">
                                        <div class="details-vac" data-sign="+">Докладніше</div>
                                    </div>
                                    <a href="/hr-form/#<?php echo get_sub_field('title_h4'); ?>" class="join-vac" data-vac-name="<?php echo get_sub_field('title_h4'); ?>">Приєднатися до команди →</a>
                                    <div class="item-abs"> <!-- item-abs-active -->
                                        <h4><?php echo get_sub_field('title_h4'); ?></h4>
                                        <h5><?php echo get_sub_field('desc_short'); ?></h5>
                                        <div class="expand">
                                            <div class="details-content">
                                                <strong>Чекаємо на вас, якщо ви:</strong>
                                                <ul>
                                                    <?php echo get_sub_field('li'); ?>
                                                </ul>
                                            </div>
                                            <div class="details-vac-close">↑</div>
                                        </div>
                                        <a href="/hr-form/#<?php echo get_sub_field('title_h4'); ?>" class="join-vac" data-vac-name="<?php echo get_sub_field('title_h4'); ?>">Приєднатися до команди →</a>
                                    </div>
                            </div>
                        <?php
                        endif;
                        // End loop.
                    endwhile;
                }
                // No value.
                ?>

        </div><!--row3 end-->
    </div>
</section>

<section class="job_offer" id="jobOffer">
    <div class="text">
        <h2 data-text="Відповімо на всі ваші питання">Хочете <br> приєднатися, але маєте запитання? </h2>
        <h3 data-text="Залиште ім'я та номер телефона й вкажіть бажаний спосіб зв'язку." data-text2="Наші методисти зв'яжуться з вами найближчим часом.">Заповніть форму – ми зв'яжемося з вами</h3>
    </div>
    <form name="jobOfferFormAsk" class="offer-form">
        <input type="text" name="jobName" placeholder="Як до вас звертатися?" required>
        <input type="tel" name="jobPhone" placeholder="Ваш номер телефону" required>
        <textarea name="jobQuestion" placeholder="Ваше питання чи пропозиція" required></textarea>
        <div class="submit-group">
            <input type="submit" name="submit" value="Надіслати">
        </div>
    </form>
</section>


<!--Contact form modal-->
<div class="modal fade modal-help modal-contact" id="vacancyPopup">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!--            <h2>Заповніть форму</h2>-->
                <form name="vacancyOfferPopUp" class="offer-form">
                    <input type="text" name="jobName" placeholder="Як до вас звертатися?" required>
                    <input type="tel" name="jobPhone" placeholder="Ваш номер телефону" required>
                    <input type="email" name="jobEmail" placeholder="Ваша електронна адреса" required>
                    <input type="text" name="jobVacancy" id="vacIdinp" placeholder="Назва вакансії, яка зацікавила" required>
                    <small>Натискаючи «Надіслати», Ви погоджуєтеся на обробку, накопичення, зберігання і використання наданої персональної інформації, відповідно до Закону України «Про захист персональних даних»</small>
                    <div class="submit-group">
                        <input type="submit" name="submit" value="Надіслати">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
