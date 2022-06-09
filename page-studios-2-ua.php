<?php
/*
*
Template Name: studios-2-ua */
get_header();
?>

<?php
while (have_posts()) {
    the_post(); ?>

    <section class="studios2_screen1">
        <div class="inner">
            <h1>Inventor Camp</h1>
            <h2>Літній табір <br> під Києвом / в Карпатах</h2>
            <ul>
                <li>з 6 до 16 років</li>
                <li>20 годин проєктів</li>
                <li>12 днів </li>
                <li>15 видів спорту</li>
                <li>30 занять англійської</li>
            </ul>
            <div class="cta">
                <a href="#!" data-bs-toggle="modal" data-bs-target="#contactPopup">Отримати консультацію</a>
            </div>
        </div>
    </section>

    <section class="studios2_camp">
        <h2><span>Inventor Camp.</span> Науковий <br> табір</h2>
        <div class="studios2_camp-inner">
            <div class="studios2_camp-inner-item">
                <div class="studios2_camp-inner-item-content">
                    <h3>🤔 🗣</h3>
                    <p>Speaking club. У майстерні комунікацій влаштовуємо справжні дебати та тренуємо логіку.</p>
                </div>
            </div>
            <div class="studios2_camp-inner-item">
                <div class="studios2_camp-inner-item-content">
                    <h3>🤖🔬</h3>
                    <p>STEM лабораторія – безліч захопливих досліджень у сферах енергетики, космосу, кіберспорту
                        та віртуальної реальності.</p>
                </div>
            </div>
            <div class="studios2_camp-inner-item">
                <div class="studios2_camp-inner-item-content">
                    <h3>🚎 🎉</h3>
                    <p>Розважаємось і навчаємось: тематичні квести, майстер- класи, фестивалі, шоу програми,
                        екскурсії.</p>
                </div>
            </div>
            <div class="studios2_camp-inner-item">
                <div class="studios2_camp-inner-item-content">
                    <h3>🦄 🤓</h3>
                    <p>Практичні тренінги: розвиваємо креативність та комунікабельність.</p>
                </div>
            </div>
            <div class="studios2_camp-inner-item">
                <div class="studios2_camp-inner-item-content">
                    <h3>🥑🍝 🥗</h3>
                    <p>Смачна їжа 5 разів на добу: джерело енергії та гарного настрою.</p>
                </div>
            </div>
            <div class="studios2_camp-inner-item">
                <div class="studios2_camp-inner-item-content">
                    <h3>📑🏅</h3>
                    <p>Звіт викладача та психолога: докладний опис індивідуальних досягнень.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="studios2_offer">
        <div class="inner">
            <div class="left">
                <h2>Відповімо на всі ваші питання</h2>
                <h3>
                    Залиште ім'я та номер телефона й вкажіть бажаний спосіб зв'язку.
                    <br><br>
                    Наші методисти зв'яжуться з вами найближчим часом.
                </h3>
            </div>
            <div class="right">
                <form class="offer-form" name="studios1-form">
                    <input type="text" name="name" placeholder="Як до вас звертатися?" required="">
                    <input type="tel" name="phone" placeholder="Ваш номер телефону" required="">
                    <input type="email" name="email" placeholder="Ваша електронна адреса" required="">
                    <select name="contactType" style="display:none;">
                        <!--<option value="" selected disabled>Зручний канал зв’язку</option>-->
                        <option value="Телефон" selected="">Телефон</option>
                        <option value="Email">Email</option>
                    </select>
                    <div class="submit-group">
                        <input type="submit" name="submit" value="Зв’яжіться зі мною">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php
}
?>



<?php
get_footer();
?>
