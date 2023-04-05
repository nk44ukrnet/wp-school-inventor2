<?php
/*
*
Template Name: Pidgotovka-do-shkoly-ua
*/
get_header();
?>

<?php
while (have_posts()) {
    the_post(); ?>

    <div class="custom-wrapper">
        <div class="custom-screen1">
            <div class="content-size padding-mobile"
                 style="background-image: url(https://school.inventorschool.org.ua/wp-content/uploads/2023/01/image_2023-01-17_01-07-24.png)">
                <div class="custom-screen1__content">
                    <h1 class="custom-screen1__heading font-size-2">Курс “Підготовка до школи” (5-7 років)</h1>
                    <p class="custom-screen1__subheading font-size-4"><strong>Вік дітей:</strong> 5-7 років </p>
                    <p class="custom-screen1__subheading font-size-4"><strong>Тривалість заняття:</strong> 1 год 30 хв
                        (з урахуванням перерви 5-10 хвилин)</p>
                    <p class="custom-screen1__subheading font-size-4"><strong>Періодичність:</strong> 2 рази на тиждень
                    </p>
                    <div class="text-center">
                        <a href="#!" class="btn-cta btn-cta_big" data-bs-toggle="modal"
                           data-bs-target="#contactPopup">Записатися</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="custom-section custom-section_bg">
            <div class="content-size padding-mobile">
                <h2 class="font-size-3">Опис: </h2>
                <p>
                    <br>
                    Матусі і татусі майбутніх першокласників, аби не хвилюватися, чи готова ваша дитина до школи –
                    розпочніть підготовку вже зараз!
                    <br><br>
                    Школа Inventor School запрошуємо дітей віком 5-7 років на курс «Підготовка до школи»!
                    <br><br>
                    Це пізнавальні заняття для майбутніх школярів та школярок, що включають:<br>
                    - захопливі заняття з комунікації, <br>
                    - навчання читанню, <br>
                    - підготовку руки до письма, <br>
                    - поглиблене вивчення математики за сінгапурською програмою та з білінгвальним навчанням. <br>
                    <br>
                    І все це з допомогою улюблених і яскравих цеглинок LEGO!
                    <br><br>
                    Усі серйозні поняття про числа, букви, геометричні фігури, величини викладаються у легкій та
                    доступній для розуміння ігровій формі та закріплюються на основі маніпуляцій зі створеними
                    LEGO-моделями.

                </p>
            </div>
        </div>

        <div class="custom-section">
            <div class="content-size padding-mobile">
                <h2 class="font-size-3">Яких рузультатів досягаємо: </h2>
                <p>
                    <br>
                    - на заняттях курсу дошкільнята через гру з детелями LEGO навчаться рахувати, додавати та віднімати, читати по складах, оволодіють уявленнями про час, простір і геометричні фігури.
                    <br>
                    - діти зрозуміють закони облаштування всесвіту, відкриють таємниці шкільного приладдя,  потраплять у різні історичні епохи, спробують себе у ролі фахівців різних професій.
                    <br>
                    - діти розвинуть кмітливість і мовлення, навчаться висловлювати власні думки та аргументувати їх.
                    <br>
                    - Підготуються до початку навчального процесу у школі. <br>
                    <br>
                </p>

                <div class="text-center">
                    <a href="#!" data-bs-toggle="modal"
                       data-bs-target="#contactPopup" class="btn-cta btn-cta_big">Записатися</a>
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
