<?php
/*
*
Template Name: camp-ua
*/
get_header();
?>

<?php
while (have_posts()) {
    the_post(); ?>

    <div class="outer-wrapper" id="siteContent">
        <section class="camp_sign_up">
            <a href="#!" data-bs-toggle="modal" data-bs-target="#campModalBook">Записатися</a>
        </section>

        <section class="camp-front">
            <div class="inner_wrapper">
                <div class="camp-front__headings">
                    <h1>Табір та садочок для дітей 4-12 років</h1>
                    <h2>STEM-мандри з INVENTOR!</h2>
                </div>
                <div class="camp-front__bubbles">
                    <div class="camp-front__bubbles-item">
                        <p>Старт – <br>
                            6 червня</p>
                    </div>
                    <div class="camp-front__bubbles-item">
                        <p>Пн-пт <br>
                            8:30 – 18:30</p>
                    </div>
                    <div class="camp-front__bubbles-item">
                        <p>Безпечне <br>
                            перебування</p>
                    </div>
                    <div class="camp-front__bubbles-item">
                        <p>
                            Смачне <br> харчування
                        </p>
                    </div>
                    <div class="camp-front__bubbles-item">
                        <p>
                            Вдосталь <br> спорту
                        </p>
                    </div>
                    <div class="camp-front__bubbles-item">
                        <p> Гнучкі формати <br> відвідування </p>
                    </div>
                </div>
                <!--<p>*програма табору у школі на Лівобережній може відрізнятися від заявленої на сайті, але не менш цікавою та захопливою.</p>-->
            </div>
        </section>

        <section class="section-half">
            <div class="section-half__content section-half__content-kid inner_wrapper padding-mobile">
                <h2 class="section-half__heading">Програма STEM-садочка для дітей 4-6 р. </h2>
                <!--<h3 class="section-half__heading-sub">з 8:30 до 14:30</h3>-->
                <!--                <div class="camp__flex-image">-->
                <ul class="section-half__list">
                    <li>- Весело навчаємося у грі</li>
                    <li>- Вивчаємо програмування</li>
                    <li>- Готуємося до школи</li>
                    <li>- Конструюємо з улюбленим LEGO</li>
                    <li>- Граємо у рухливі ігри та відпочиваємо на свіжому повітрі</li>
                    <li>- Різноманітні спортивні ігри на сучасному спортивному майданчику</li>
                    <li>- Смачно та здорово харчуємося</li>
                </ul>
                <!--                    <img src="-->
                <?php //echo get_template_directory_uri(); ?><!--/img/camp_kid.jpg" alt="camp">-->
                <!--                </div>-->
            </div>
        </section>

        <section class="section-half">
            <div class="section-half__content inner_wrapper padding-mobile">
                <h2 class="section-half__heading">Програма STEM-табору для дітей 6-12 р. </h2>
                <!--<h3 class="section-half__heading-sub">з 14:30 до 18:30</h3>-->
                <ul class="section-half__list">
                    <li>- Конструюємо та програмуємо крутезних роботів</li>
                    <li>- Освоюємо сучасні дизайн-інструменти та створюємо власні проєкти</li>
                    <li>- Граємо в настільні ігри та шахи</li>
                    <li>- Веселі наукові квести</li>
                    <li>- Прокачуємо творчість та навички конструювання з LEGO</li>
                    <li>- Різноманітні спортивні ігри на сучасному спортивному майданчику школи</li>
                    <li>- Смачно та здорово харчуємося</li>
                </ul>
                <p>
                    <strong style="font-size:22px;">❗️&nbsp;&nbsp; Безпека дітей у пріоритеті! Ми попіклувалися і
                        підготували для дітей безпечне місце на випадок
                        тривоги.</strong>
                </p>
            </div>
        </section>

        <section class="section-half">
            <div class="section-half__content inner_wrapper padding-mobile">
                <h2 class="section-half__heading">Гнучкі формати відвідування </h2>
                <p>Ми підібрали такі формати відвідування садочка і табору, аби вони співпадали із вашим графіком та
                    справами. Обирайте найзручніший формат!</p>
                <ul class="section-half__list">
                    <li>- день</li>
                    <li>- тиждень</li>
                    <li>- місяць</li>
                </ul>
                <p>
                    <strong>Дізнавайтесь про знижки у своїй школі. </strong>   
                </p>
            </div>
        </section>

        <section class="section-half">
            <div class="section-half__content inner_wrapper padding-mobile">
                <h2 class="section-half__heading">Розпорядок дня</h2>
                <ul class="section-half__list">
                    <li>1. Зустрічаємо дітей та заряджаємося на день під час енергійної зарядки.</li>
                    <li>2. Отримуємо нові навички на STEM-занятті за розкладом з перервами на ігри та корисні
                        смаколики.
                    </li>
                    <li>3. Гуляємо на свіжому повітрі або переглядаємо пізнавальні мультфільми (в залежності чи сонечко
                        чи дощ).
                    </li>
                    <li>4. Смачно і корисно обідаємо.</li>
                    <li>5. Після смачного обіду – відпочиваємо.</li>
                    <li>6. Набралися сил? Тоді ґоу на STEM-заняття за розкладом!</li>
                    <li>7. Після заняття – особистий час, розваги, театралізація або прогулянка.</li>
                    <li>8. Зустрічаємо батьків, розповідаємо про день, повертаємося додому і чекаємо нового дня у
                        INVENTOR!
                    </li>
                </ul>
            </div>
        </section>

        <section class="section-half camp__sport">
            <div class="section-half__content inner_wrapper padding-mobile">
                <h2 class="section-half__heading">Спортивна програма на власному шкільному майданчику </h2>
                <div class="camp__sport-flex">
                    <p>
                        Ми розуміємо, наскільки важливими є рухливі і спортивні ігри під час літніх канікул.
                        <br>
                        Теніс, бадмінтон, волейбол, футбол, веселі старти і перегони.
                        <br>
                        І просто побігати і повеселитися з друзями на закритій і безпечній спортивній площадці.
                    </p>
                    <iframe src="https://player.vimeo.com/video/713595008?h=03b8a92fc2" width="640" height="360"
                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </section>

        <section class="camp_conclusion">
            <div class="inner_wrapper">
                <h2>STEM-мандри з INVENTOR!</h2>
                <p class="subheading">
                    Табір та садочок для для дітей 4-12 років
                </p>
                <div class="notification">
                    <div class="notification-item">
                        <a href="#!" class="btn-notify" id="campBtnNotify" data-bs-toggle="modal"
                           data-bs-target="#campModalBook">Записатися</a>
                    </div>
                </div>
            </div>
        </section>
    </div>


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

