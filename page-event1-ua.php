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

    <section class="event_screen1 event1-screen1" style="background-image: url(https://school.inventorschool.org.ua/wp-content/uploads/2022/02/Untitled-3.jpg);">
        <div class="inner">
            <h2>День відкритих дверей в школі Inventor School</h2>

            <p class="p-header">Для батьків та дітей початкової та <br> середньої школи</p>

            <div class="desc">
                <p>
                    <strong>День відкритих дверей онлайн</strong>
                    <br>
                    <br>
                    01 липня о 19.00
                </p>
                <p>
                    Реєструйтеся за <a href="#!" data-bs-toggle="modal" data-bs-target="#contactEventPopup">посиланням</a>
                </p>
                <p>
                    <strong>Локація школи: </strong> м.Київ, вул. Дніпровська набережна, 18А
                </p>
            </div>

            <a href="#!" class="sign-up" data-bs-toggle="modal" data-bs-target="#contactEventPopup">Зареєструватися</a>
			<!--data-bs-toggle="modal" data-bs-target="#contactEventPopup"-->
        </div>
    </section>
    
    <section class="event-video">
        <iframe src="https://player.vimeo.com/video/719114215?h=0dbaeabba5&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" width="1920" height="1080" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen title="Космічна подорож.mp4"></iframe>
    </section>

    <div class="event_descreption">
        <h2>
            Уявіть школу, до якої ваша дитина з радістю мчить щоранку, її оточують найкращі вчителі, а навчання – найсучасніше💫 
            <br>
            <span>
                День відкритих дверей онлайн
            </span>
        </h2>
        <div class="list">
            <p>
                На Дні відкритих дверей ви дізнаєтесь:
            </p>
            <ul style="list-style-type:none;">
                <li>- про навчальні програми, STEM-підхід у навчанні</li>
                <li>- проєктний формат навчання</li>
                <li>- кваліфікації вчителів та методистів</li>
                <li>-  індивідуальне харчування школярів та багато іншого, що відрізняє Inventor school з-поміж більшості приватних закладів освіти</li>
                <!--<li>- майстер-класи з LEGO® <li>-->
                <!--<li>- досліди та квести</li>-->
                <!--<li>- прогулянка космічними коридорами та кабінетами школи</li>-->
                <li>- відбудеться знайомство з директоркою школи – <strong>Ларисою Скабою</strong> та засновницею – <strong>Оксаною Стоєцькою</strong>.</li>
            </ul>
			<p>
                Ви зможете дізнатись більше про школу: навчальні програми, STEM-підхід, проєктний формат навчання, побачити й почути наших найкращих вчителів та методистів,  зрозуміти внутрішню "кухню" школи та інше, переглядаючи наш Ютуб–канал
                <a href="https://www.youtube.com/channel/UCv6G8mehLjD0mhtAX4XdZjA" target="_blank" style="color: #ED1C24; font-size: 45px; display: inline-block; vertical-align: middle"><i class="fa-brands fa-youtube"></i></a>
			</p>
			<p>
				📲 Реєструйтесь на День відкритих дверей за посиланням. Кількість місць обмежена!
			</p>
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
                    <input type="email" name="email" placeholder="Ваша електронна адреса"
                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="">
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


    <!--Contact form modal EVENT-->
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
                        <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                               placeholder="Ваша електронна адреса" required>
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

