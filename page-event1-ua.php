<?php
/*
*
Template Name: event1-ua
*/
get_header();
?>

<?php
while (have_posts()) {
    the_post(); ?>

    <section class="event_screen1 event1-screen1"
             style="background-image: url(https://school.inventorschool.org.ua/wp-content/uploads/2023/03/dvd-1.jpg);">
        <div class="inner">
            <h2>
                Inventor School запрошує познайомитися!
            </h2>

                        <p class="p-header">День відкритих дверей для батьків <br> дошкільнят та учнів 1-7 класів</p>

            <div class="desc">
                <p>
                    <strong>Дата: </strong> 11 серпня о 16:00
                    <br>
                    <br>
                    <strong>Де:</strong>
                    м. Київ, Дніпровська набережна, 18А
                </p>
            </div>

            <a href="#!" class="sign-up" data-bs-toggle="modal" data-bs-target="#contactEventPopup">Зареєструватися</a>
            <!--data-bs-toggle="modal" data-bs-target="#contactEventPopup"-->
        </div>
    </section>

        <section class="event-video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/2qEYnqgF8uw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </section>

    <div class="event_descreption">
        <h2>
            Уявіть школу, до якої ваша дитина з радістю мчить щоранку, її оточують найкращі вчителі, а навчання – найсучасніше!
            <br>
                        <span>
                            Уявили? А така школа існує!
                        </span>
        </h2>
        <div class="list">
            <p>
                Інноваційна школа Inventor School запрошує познайомитися👋
            </p>
            <p>
                На Дні відкритих дверей ви дізнаєтеся про:
                <br>
                ✅навчальні програми, STEM-підхід у навчанні,
                <br>
                ✅проєктний формат навчання,
                <br>
                ✅індивідуальний навчальний план для кожнї дитини,
                <br>
                ✅харчування школярів та багато іншого, що відрізняє Inventor school з-поміж більшості приватних закладів освіти.
            </p>
            <p>
                А також познайомитися з потужною командою школи: вчителями, засновницею школи <strong>Оксаною
                    Стоєцькою</strong> та директоркою школи.
            </p>
            <p>
                🧩Поки батьки спілкуватимуться з командою, у дітлахів буде чудова можливість долучитися до майстер-класу від Inventor School.
            </p>
            <p>Мерщій реєструйтеся на День відкритих дверей, кількість місць обмежена. </p>
            <!--<p class="event-highlighted">
                <strong>
                    Захід є благодійний. Участь у заході можлива за попередньою реєстрацією та обов’язковим донатом у розмірі від 50 грн (під час реєстрації).
                    <br>
                    🙌Важливо: всі зібрані кошти підуть на потреби 95 Окремої десантно-штурмової бригади.
                </strong>
            </p>-->
        </div>

        <!--<div class="container">
            <div class="item">
                <h3>
                    КіноТеатр: у складі три студії, де навчають основам риторики, акторській майстерності та відеомейкінгу.
                </h3>
            </div>
            <div class="item">
                <h3>
                    Спортивна майстерня : діти мають змогу спробувати себе у боротьбі та черлідингу.
                </h3>
            </div>
            <div class="item item-special">
                <h3>
                    Мистецька майстерня : найбільший напрям із 10 студій, де діти розвивають свої презентаційні та творчі навички.
                </h3>
            </div>
            <div class="item">
                <h3>
                    Майстерня медіа-комунікацій : новаторська студія Блогінгу чекає на дітей, які полюбляють створювати контент і мріють про особистий канал на платформах Тік-Ток, YouTube та Instagram.
                </h3>
            </div>
            <div class="item">
                <h3>
                    Speaking club з носієм мови : участь у дебатах, постановах та можливість мовного обміну з іншими країнами.
                </h3>
            </div>
        </div>
        <p class="pre-list">Інноваційний простір нової школи Inventor School на Осокорках створений таким чином
            <br>
            аби було комфортно як
            учням, так і батькам:</p>-->
        <!--<div class="list">
            <ul>
                <li>неповторний космічний дизайн;</li>
                <li>великі та яскраві приміщення для занять;</li>
                <li>зручні зони відпочинку в коридорах;</li>
                <li>насичена інфраструктура навколо школи.</li>
            </ul>
        </div> -->
    </div>


    <!--<section class="event_feature event1_feature">
        <div class="left">
            <h2>Переваги навчання в Inventor School: </h2>
            <ul class="coloredBullets">
                <li>
                    <strong>Складання індивідуального навчального плану.</strong>
                    <br>
                    Використовуємо систему професійних тестів і завдань, що допомагають зрозуміти, який шлях розвитку
                    буде ефективний для Вашої дитини.
                </li>

                <li>
                    <strong>Вивчення науки та світу через командні та персональні наукові проєкти.</strong>
                    <br>
                     Вчимо розв’язувати завдання в комплексі- в теорії та на практиці.
                </li>

                <li>
                    <strong>Портфоліо з детальним описом прогресу дитини.</strong>
                    <br>
                    Фіксуємо всі надбання і досягнення вашої дитини протягом навчання.
                </li>

                <li>
                    <strong>Унікальні програми STEM-навчання.</strong>
                    <br>
                    Ми робимо процес навчання захоплюючим і цікавим за допомогою STEM-підходу до
                    навчання: на уроках поєднуємо вивчення природничих наук, технологій, інженерії та
                    математики.
                </li>

                <li>
                    <strong>Креативний технологічний простір для активного навчання.</strong>
                    <br>
                    Простір школи розроблений таким чином, щоб дітям було комфортно вчитися, працювати і відпочивати
                    повний день: є зони для навчання, експериментів, власних проєктів, занять мистецтвом і спортом.
                </li>

                <li>
                    <strong>Співпраця з міжнародними та українськими консультантами, спікерами та командами.</strong>
                </li>
            </ul>
        </div>
        <div class="right">

        </div>
    </section>-->

    <section class="event_offer event1_offer">
        <div class="inner">
            <div class="left">
                <h2>Кількість учасників заходу обмежена!</h2>
                <h3>Заповніть форму та отримайте персональне запрошення</h3>
            </div>
            <div class="right">
                <form name="eventOffer" class="offer-form">
                    <input type="text" name="name" placeholder="Ваше ім'я" required="">
                    <input type="text" name="lastName" placeholder="Ваше прізвище" required="">
                    <input type="tel" name="phone" placeholder="Ваш номер телефону" required="">
                    <!--                    <input type="email" name="email" placeholder="Ваша електронна адреса"-->
                    <!--                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="">-->
                    <input type="text" name="contactType" placeholder="Вкажіть вік дитини" required>
                    <!--<select name="contactType">
                        <option value="" selected disabled>Який клас закінчила Ваша дитина?</option>
                        <option value="preschool">preschool</option>
                        <option value="1 - 4 клас">1 - 4 клас</option>
                        <option value="5 - 6 клас">5 - 6 клас</option>
                    </select>-->
                    <div class="submit-group">
                        <!--                         <input type="submit" name="submit" value="Реєстрація закрита" disabled> -->
                        <input type="submit" name="submit" value="Записатись">
                    </div>
                </form>
            </div>
        </div>
    </section>


    <!--Contact form modal EVENT (popup)-->
    <div class="modal fade modal-help modal-contact" id="contactEventPopup">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--            <h2>Заповніть форму</h2>-->
                    <form name="eventOffer-popup" class="offer-form">
                        <input type="text" name="name" placeholder="Ваше ім'я" required>
                        <input type="text" name="lastName" placeholder="Ваше прізвище" required="">
                        <input type="tel" name="phone" placeholder="Ваш номер телефону" required>
                        <!--                        <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"-->
                        <!--                               placeholder="Ваша електронна адреса" required>-->
                        <input type="text" name="contactType" placeholder="Вкажіть вік дитини" required>
                        <!--<select name="contactType" style="background-image: none;">
                            <option value="" selected disabled>Який клас закінчила Ваша дитина?</option>
                            <option value="preschool">preschool</option>
                            <option value="1 - 4 клас">1 - 4 клас</option>
                            <option value="5 - 6 клас">5 - 6 клас</option>
                        </select>-->
                        <div class="submit-group">
                            <input type="submit" name="submit" value="Надіслати">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
}
?>


<?php
get_footer();
?>

