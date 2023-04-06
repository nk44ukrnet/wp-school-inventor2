<?php
/*
*
Template Name: camp2-ua
*/
get_header();
?>

<?php
while (have_posts()) {
    the_post(); ?>

    <div class="outer-wrapper camp2-outer-wrapper" id="siteContent">

        <section class="camp2-hero camp2-template-size">
            <div class="camp2-hero__holder">
                <div class="camp2-hero__item">
                    <h1 class="camp2-hero__heading">
                        <span>
                            INVENTOR кличе у Карпати!
                        </span>
                    </h1>
                    <div class="camp2-hero__subheading">
                        <span>
                        Літній табір
                        для дітей
                        <strong>8-12 <b>років</b> </strong>
                        </span>
                    </div>
                </div>
                <div class="camp2-hero__item">
                    <a href="#!" class="camp2-hero__btn camp2-btn" data-bs-toggle="modal"
                       data-bs-target="#campModalBook">зареєструватися</a>
                </div>
            </div>
        </section>

        <section class="camp2-schedule">
            <div class="camp2-schedule__holder">
                <div class="camp2-schedule__item">
                    <div>
                        <h2>1 зміна</h2>
                        <p>16-25 червня</p>
                    </div>
                </div>
                <div class="camp2-schedule__item">
                    <div>
                        <h2>2 зміна</h2>
                        <p>25 червня-4 липня</p>
                    </div>
                </div>
                <div class="camp2-schedule__item">
                    <div>
                        <h2>3 зміна</h2>
                        <p>19-28 липня</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="camp2-features">
            <div class="camp2-features__holder">
                <div class="camp2-features__item">
                    <div class="camp2-features__content">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/camp2-icon1.svg" alt="icon"
                             loading="lazy">
                        <h2>Мандрівки <br>
                            та екскурсії</h2>
                    </div>
                </div>
                <div class="camp2-features__item">
                    <div class="camp2-features__content">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/camp2-icon2.svg" alt="icon"
                             loading="lazy">
                        <h2>Робототехніка <br> і LEGO</h2>
                    </div>
                </div>
                <div class="camp2-features__item">
                    <div class="camp2-features__content">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/camp2-icon3.svg" alt="icon"
                             loading="lazy">
                        <h2>Природа <br>
                            та гори</h2>
                    </div>
                </div>
                <div class="camp2-features__item">
                    <div class="camp2-features__content">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/camp2-icon4.svg" alt="icon"
                             loading="lazy">
                        <h2>Змагання <br>
                            та квести</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="camp2-cta">
            <div class="content-size padding-mobile">
                <div class="camp2-cta__holder">
                    <div class="camp2-cta__item">
                        <h2>Поспішайте забронювати місце!  Кількість обмежена! </h2>
                    </div>
                    <div class="camp2-cta__item">
                        <a href="#!" class="camp2-btn" data-bs-toggle="modal" data-bs-target="#campModalBook">Зареєструватися</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <section class="camp_sign_up">
        <a href="#!" data-bs-toggle="modal" data-bs-target="#campModalBook">Записатися</a>
    </section>

    <!--Camp form modal-->
    <div class="modal fade modal-help modal-contact" id="campModalBook">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--            <h2>Заповніть форму</h2>-->
                    <form name="camp-popup" class="offer-form">
                        <input type="text" name="name" placeholder="Як до вас звертатися?" required>
                        <input type="tel" name="phone" placeholder="Ваш номер телефону" required>
                        <input type="email" name="email" placeholder="Ваша електронна адреса" required>
                        <div class="submit-group">
                            <input type="submit" name="submit" value="Надіслати">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--End of Camp form modal-->
    <script>
        (function () {
            window.addEventListener('DOMContentLoaded', () => {
                //delete phone other than "Karina" from
                // let headerTelToRemove = document.querySelectorAll('.header .line .outer .inner a');
                let headerTelToRemove = document.querySelectorAll('a');
                headerTelToRemove.forEach(item => {
                    let attr = item.getAttribute('href');
                    if (attr.indexOf('tel:') != -1) {
                        if (attr !== 'tel:+380678285774') {
                            item.remove();
                        }
                    }
                })
            })
        })()
    </script>
    <?php
}
?>




<?php
get_footer();
?>

