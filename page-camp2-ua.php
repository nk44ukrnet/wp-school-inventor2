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
                        <h2>Поспішайте забронювати місце! Кількість обмежена! </h2>
                    </div>
                    <div class="camp2-cta__item">
                        <div class="camp2-cta__tel">
                        <a href="#!" class="camp2-btn" data-bs-toggle="modal" data-bs-target="#campModalBook">Зареєструватися</a>
                        <br>
                        або за номером <br> <a href="tel:+380955247537" >+38 095 524 75 37</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="camp2-info">
            <div class="content-size padding-mobile">
                <div class="camp2-info__holder">
                    <div class="camp2-info__item">
                        <p class="camp2-info__text">
                            Наш табір розташований у тихій місцевості поміж гір – селі Розслуч, що на Львівщині. Нас
                            гостинно зустріне затишний сімейний комплекс “Альтана”, який стоїть у самого підніжжя гори
                            застеленої густим хвойним лісом.
                        </p>
                    </div>
                    <div class="camp2-info__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/camp2-info.png" alt="Camp"
                             loading="lazy" class="camp2-info__img">
                    </div>
                </div>
            </div>
        </div>

        <div class="camp2-advantages">
            <div class="camp2-advantages__holder">
                <div class="camp2-advantages__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/camp2-advantages1.svg" alt="Icon"
                         loading="lazy" class="camp2-advantages__img">
                    <h2 class="camp2-advantages__heading">
                        Захоплюючі краєвиди
                    </h2>
                    <p class="camp2-advantages__text">
                        Є прямий вихід до заповідника
                        «Розлуч» та гірської річки
                    </p>
                </div>
                <div class="camp2-advantages__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/camp2-advantages2.svg" alt="Icon"
                         loading="lazy" class="camp2-advantages__img">
                    <h2 class="camp2-advantages__heading">
                        Природні джерела
                    </h2>
                    <p class="camp2-advantages__text">
                        В пішої доступності від Нафтусі,
                        Залізної води та Содової води
                    </p>
                </div>
                <div class="camp2-advantages__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/camp2-advantages3.svg" alt="Icon"
                         loading="lazy" class="camp2-advantages__img">
                    <h2 class="camp2-advantages__heading">
                        Зручна територія
                    </h2>
                    <p class="camp2-advantages__text">
                        Внутрішній двір з галявинами для відпочинку
                        та занять спортом
                    </p>
                </div>
                <div class="camp2-advantages__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/camp2-advantages4.svg" alt="Icon"
                         loading="lazy" class="camp2-advantages__img">
                    <h2 class="camp2-advantages__heading">
                        Комфортний відпочинок
                    </h2>
                    <p class="camp2-advantages__text">
                        В кожному номері є ліжко, шафа, тумбочка
                        та душова кімната, швидкісний Wi-Fi по всій території
                    </p>
                </div>
            </div>
        </div>

        <div class="camp2-hotel">
            <div class="camp2-hotel__container">
                <img src="<?php echo get_template_directory_uri(); ?>/img/camp2-hotel2.png" alt="Hotel" loading="lazy"
                     width="1023">
            </div>
        </div>

        <div class="camp2-texting texting-worm-bg">
            <div class="camp2-texting__holder">
                <div class="camp2-texting__left">
                    <h2>На території бази на дітей чекають</h2>
                </div>
                <div class="camp2-texting__right">
                    дитячий майданчик, волейбольне поле, настільний теніс і батут – для активного відпочинку
                    <br><br>
                    альтанки – аби майстер-класи були ще атмосфернішими на свіжомі повітрі
                    <br><br>
                    сцена – для проведення яскравих та цікавих заходів
                    <br><br>
                    басейн, шезлонги та гамаки – щоб освіжитись і перепочити у сонячну погоду
                    <br><br>
                    смачне і корисне 4-разове харчування
                    <br><br>
                    <strong>Все, що потрібно для якісного відпочинку!</strong>
                </div>
            </div>
        </div>

        <div class="camp2-gallery">
            <div class="padding-mobile">
                <div class="swiper camp2swiper">
                    <div class="swiper-wrapper" id="camp2gallery1">
                        <div class="swiper-slide" data-src="<?php echo get_template_directory_uri(); ?>/img/camp2-gal1-min.jpeg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/camp2-gal1-min.jpeg"
                                 alt="Gallery Photo" loading="lazy">
                        </div>
                        <div class="swiper-slide" data-src="<?php echo get_template_directory_uri(); ?>/img/camp2-gal2-min.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/camp2-gal2-min.jpg"
                                 alt="Gallery Photo" loading="lazy">
                        </div>
                        <div class="swiper-slide" data-src="<?php echo get_template_directory_uri(); ?>/img/camp2-gal3-min.png">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/camp2-gal3-min.png"
                                 alt="Gallery Photo" loading="lazy">
                        </div>
                        <div class="swiper-slide" data-src="<?php echo get_template_directory_uri(); ?>/img/camp2-gal4-min.jpeg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/camp2-gal4-min.jpeg"
                                 alt="Gallery Photo" loading="lazy">
                        </div>
                        <div class="swiper-slide" data-src="<?php echo get_template_directory_uri(); ?>/img/camp2-gal5-min.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/camp2-gal5-min.jpg"
                                 alt="Gallery Photo" loading="lazy">
                        </div>
                        <div class="swiper-slide" data-src="<?php echo get_template_directory_uri(); ?>/img/camp2-gal6-min.jpeg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/camp2-gal6-min.jpeg"
                                 alt="Gallery Photo" loading="lazy">
                        </div>
                        <div class="swiper-slide" data-src="<?php echo get_template_directory_uri(); ?>/img/camp2-gal7-min.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/camp2-gal7-min.jpg"
                                 alt="Gallery Photo" loading="lazy">
                        </div>
                        <div class="swiper-slide" data-src="<?php echo get_template_directory_uri(); ?>/img/camp2-gal8-min.jpeg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/camp2-gal8-min.jpeg"
                                 alt="Gallery Photo" loading="lazy">
                        </div>
                        <div class="swiper-slide" data-src="<?php echo get_template_directory_uri(); ?>/img/camp2-gal9-min.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/camp2-gal9-min.jpg"
                                 alt="Gallery Photo" loading="lazy">
                        </div>
                        <div class="swiper-slide" data-src="<?php echo get_template_directory_uri(); ?>/img/camp2-gal10-min.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/camp2-gal10-min.jpg"
                                 alt="Gallery Photo" loading="lazy">
                        </div>
                        <div class="swiper-slide" data-src="<?php echo get_template_directory_uri(); ?>/img/camp2-gal11-min.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/camp2-gal11-min.jpg"
                                 alt="Gallery Photo" loading="lazy">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

        <div class="camp2-texting">
            <div class="camp2-texting__holder">
                <div class="camp2-texting__left">
                    <h2>Чим здивує дітей програма табору</h2>
                </div>
                <div class="camp2-texting__right">
                    <strong>Справжні літні розваги:</strong><br>
                    ігри на свіжому повітрі, волейбол, теніс, спортивні змагання, наукові квести, танцювальні флешмоби.
                    <br>
                    <br>
                    <strong>Робототехніка та STEM-заняття:</strong><br>
                    конструюємо і програмуємо справжніх роботів на виконання місій, тренуємо творчість на майстер-класах
                    з LEGO-конструювання.
                    <br>
                    <br>
                    <strong>Вау-екскурсії:</strong><br>
                    на пасіку, де дізнаємося про лікувальні можливості бджілок та на локальну сироварню, де почастуємося
                    справжніми карпатськими сирами.
                    <br>
                    <br>
                    <strong>Походи на цікаві карпатські локації.</strong>
                    <br>
                </div>
            </div>
        </div>

        <div class="camp2-offer">
            <div class="padding-mobile content-size">
                <h2 class="camp2-offer__heading">Вартість табору</h2>
                <div class="camp2-offer__holder">
                    <div class="camp2-offer__item camp2-offer__item_green">
                        <div class="camp2-offer__content">
                            <p>Регулярна ціна: </p>
                            <h3>20 500</h3>
                            <p>за 1 зміну </p>
                        </div>
                    </div>
                    <div class="camp2-offer__item camp2-offer__item_red">
                        <div class="camp2-offer__content">
                            <p>Акція “Ранні пташки”</p>
                            <h3>18 500</h3>
                            <small>(за умови бронювання місця до 10 травня) </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="camp2-conclusion">
            <div class="camp2-conclusion__text1">
                <strong class="camp2-conclusion__cell">У вартість все включено, аби батьки були спокійні, а діти –
                    відпочивали з комфортом: </strong>
                <p class="camp2-conclusion__cell">трансфер з Києва, харчування, проживання, екскурсії, супровід
                    наставників, майстер-класи, івенти. </p>
            </div>
            <div class="content-size padding-mobile">
                <a href="#!" class="camp2-btn" data-bs-toggle="modal"
                   data-bs-target="#campModalBook">зареєструватися</a>

                <div class="camp2-conclusion__playground">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/camp2-kids-botx3.png" alt="kids"
                         loading="lazy" width="848">
                </div>
            </div>

        </div>

    </div>

    <!--Camp2 form modal-->
    <div class="modal fade modal-help modal-contact" id="campModalBook">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--            <h2>Заповніть форму</h2>-->
                    <form name="camp2-popup" class="offer-form">
                        <input type="text" name="name" placeholder="Прізвище та ім’я" required>
                        <input type="tel" name="phone" placeholder="Телефон" required>
                        <input type="email" name="email" placeholder="Email " required>
                        <select name="date" required>
                            <option value="" selected disabled>Номер зміни</option>
                            <option value="1 зміна">1 зміна 16-25 червня</option>
                            <option value="2 зміна">2 зміна 25 червня-4 липня</option>
                            <option value="3 зміна">3 зміна 19-28 липня</option>
                        </select>
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
                //delete phone at footer
                let headerTelToRemove = document.querySelectorAll('.footer a[href*="tel:"]');
                headerTelToRemove.forEach(item => {
                    item.remove();
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

