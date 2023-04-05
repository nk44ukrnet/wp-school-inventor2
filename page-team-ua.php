<?php
/*
*
Template Name: team-ua
*/
get_header();
?>

<?php
while (have_posts()) {
    the_post(); ?>

        <div class="team-ceo">
            <h1>Наші ідеологи</h1>
            <div class="team-ceo-box">
                <div class="team-ceo-box-item">
                    <img src="<?php echo get_theme_file_uri(); ?>/img/team-ceo-i3.png" alt="Our Team">
                    <p class="subtitle">
                        <strong>Лариса Скаба</strong> <br>
                        Директорка школи
                    </p>
                    <p class="desc">
                        Драйверка інноваційної освіти, авторка багатьох освітніх курсів і програм, педагог вищої кваліфікаційної категорії з 26-річним досвідом роботи; менеджерка освіти впродовж 21 року. Тьюторка і мама двох дітей.
                    </p>
                </div>
                <div class="team-ceo-box-item">
                    <img src="<?php echo get_theme_file_uri(); ?>/img/team-ceo-i2.png" alt="Our Team">
                    <p class="subtitle">
                        <strong>Оксана Стоєцька</strong> <br>
                        Засновниця школи
                    </p>
                    <p class="desc">
                        Економістка за освітою і креаторка освіти за покликанням. 13 років розбудовує STEM в Україні та організовує чемпіонати з робототехніки, засновниця STEM-шкіл INVENTOR. Мама двох дорослих синів, велика мрійниця та щаслива людина.
                    </p>
                </div>
                <div class="team-ceo-box-item">
                    <img src="<?php echo get_theme_file_uri(); ?>/img/team-ceo-i1.png" alt="Our Team">
                    <p class="subtitle">
                        <strong>Володимир Стоєцький</strong> <br>
                        Засновник школи
                    </p>
                    <p class="desc">
                        Інженер КПІ, підприємець МВА, інвестор і директор понад 20 років. Батько двох синів, тріатлоніст.
                    </p>
                </div>
            </div>
        </div>

    <div class="team-dev">
        <h2>Розробники</h2>
        <div class="team-dev-box">
            <div class="team-dev-box-column">
                <div class="team-dev-box-column-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/team-dev-col-i1.png" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Ірина Резніченко </strong> <br>
                        Керівниця дошкільного напряму мережі STEM-шкіл Inventor
                    </div>
                    <div class="desc">
                        Авторка освітніх курсів і програм для дітей дошкільного віку, педагог з 20-річним досвідом роботи, менторка й наставниця для колег. Оптимістка, що вірить в дива, і винахідниця, яка втілює в життя мрії своїх учнів-дошкільнят.
                    </div>
                </div>
                <div class="team-dev-box-column-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/team-dev-col-i2.png" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Марія Башлик </strong> <br>
                        Заступниця директорки з науково-методичної роботи
                    </div>
                    <div class="desc">
                        Психологиня, амбасадорка демократичної освіти, авторка тренінгів з розвитку новаторського мислення й інтегрованого навчання. Розробниця освітніх і дозвільних програм науково-розважального формату, впроваджує ТРВЗ та популяризує науку. Спікерка провідних конференцій і форумів (як-от TEDx, PechaKucha, Всеукраїнського форуму маркетинг-директорів тощо). Співачка хорової капели й кухонних романсів, мама трьох синів.
                    </div>
                </div>
                <div class="team-dev-box-column-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/team-dev-col-i3.png" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Віта Близнюк</strong> <br>
                        Методистка STEM-освіти
                    </div>
                    <div class="desc">
                        Методистка дошкільного напряму мережі STEM-шкіл Inventor, авторка освітніх програм і курсів з LEGO, учителька-дефектолог (тифлопедагог) з досвідом роботи.
                        Черпає натхнення у квітах і горах.
                    </div>
                </div>
                <div class="team-dev-box-column-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/team-dev-col-i4.png" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Анастасія Чадаєва </strong> <br>
                        Методистка STEM-освіти
                    </div>
                    <div class="desc">
                        Технічна й моральна підтримка викладачок, дизайнерка й співавторка навчальних посібників «Українська мова» (1—4 клас) видавництва Inventor School. Амбасадорка фемінітивів і гендерного балансу в освіті. Головна суддя Всеукраїнської олімпіади з робототехніки для початкових класів WeDo 2.0, тренерка WROWeDoFIT DENMARK — 2019. Розробниця освітніх курсів з робототехніки та онлайнового курсу «Програмування Scratch». Копірайтерка телеграм-каналу для викладачів і викладачок Inventor Middle. Мама майбутнього космонавта. Акторка аматорського театру Tilde Theatre та амбітна письменниця.
                    </div>
                </div>
                <div class="team-dev-box-column-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/team-dev-col-i5.png" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Любов Філатова </strong> <br>
                        Методистка STEM-освіти
                    </div>
                    <div class="desc">
                        Сертифікована тренерка Minecraft: EE, розробниця освітніх курсів у Minecraft: EE, організаторка Міжнародного чемпіонату з Minecraft: EE та Всеукраїнської олімпіади з робототехніки для початкових класів WeDo 2.0, міжнародна суддя WROWeDoFIT DENMARK — 2019, кураторка викладачів і викладачок STEM-школи Invetor. Сноубордистка. Феміністка. Акварельна майстриня.
                    </div>
                </div>
                <div class="team-dev-box-column-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/team-dev-col-i6.png" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Сергій Гаврилюк</strong> <br>
                        Методист STEM-освіти
                    </div>
                    <div class="desc">
                        Розробляє і викладає курси категорії Senior. Був суддею міжнародного рівня від України на China Adolescent Robotics Competition (м. Чунцін). Знає, як легко пояснити, що таке «диференціал» і «гусеничний механізм».
                        Має улюбленого робота на курсі «Робототехніка Mindstorms» — це R2-D2 із «Зоряних війн».
                    </div>
                </div>
            </div>
            <div class="team-dev-box-column">
                <div class="team-dev-box-column-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/team-dev-col2-i1.png" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Марина Соловйова </strong> <br>
                        Керівниця відділу розробок напряму Middle (початкова школа)
                    </div>
                    <div class="desc">
                        Перша в Україні LEGO Education Teacher Trainer, суддя WRO — допомагає визначати найліпших робототехніків світу з 2013 року. Навчає викладачів України, Молдови й США. Зі своїм відділом створює крутезні програми для початкової школи з LEGO Education і Minecraft: EE, організовує змагання та чемпіонати. Любить подорожувати, відвідала 38 країн й плавала в трьох океанах.
                    </div>
                </div>
                <div class="team-dev-box-column-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/team-dev-col2-i2.png" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Юлія Ходос </strong> <br>
                        Методистка з іноземних мов
                    </div>
                    <div class="desc">
                        Педагог вищої категорії з 21-річним стажем. Викладачка англійської та французької мов, тьюторка, вивчала Classical Literature в Гарвардському університеті (курс професора Стівена Ґрінблатта). Ініціаторка й учасниця міжнародних проєктів My Time Capsule, The Wonderful Taxi, учасниця проєктів International FolkArt (Spring Festivals) та International Penpals Project. Має власний телеграм-канал, де допомагає вивчати мову всім охочим. Професійний водій і шалена мандрівниця.
                    </div>
                </div>
                <div class="team-dev-box-column-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/team-dev-col2-i3.png" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Людмила Гуцало</strong> <br>
                        Методистка STEM-освіти
                    </div>
                    <div class="desc">
                        Методистка й розробниця курсів для дошкільнят, дипломована психологиня, практична психологиня.
                        <br>
                        Завзята лижниця й любителька автоекстриму.
                    </div>
                </div>
                <div class="team-dev-box-column-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/team-dev-col2-i4.png" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Ірина Зінюк </strong> <br>
                        Методистка STEM-освіти
                    </div>
                    <div class="desc">
                        Методистка офлайнових курсів «Початкова механіка», «Захоплива математика для 1—2-х класів», онлайнового курсу «Програмування WeDo 2.0». Розробниця навчально-методичних посібників і програм для вчителів «Робототехніка в початковій школі», «STEM-уроки в середній школі». Проводить навчання для вчителів загальноосвітніх шкіл за відповідними курсами. Мама допитливого хлопчика і та сама сусідка, що постійно робить ремонт.
                    </div>
                </div>
                <div class="team-dev-box-column-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/team-dev-col2-i6.png" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Кирило Кравченко </strong> <br>
                        Методист STEM-освіти
                    </div>
                    <div class="desc">
                        Робототехнік, гейм-дизайнер, unity-розробник, розробник онлайнового курсу GameDev: Adventure. Співавтор курсу «Developer. Розроблення ігор» і «Робототехніка Mindstorms». Викладач усіх курсів Senior, тренер WRO, модератор онлайнових уроків i головний критик відділу Senior. Уміє знаходити LEGO-деталі, які не бачать діти в наборах, читати коди С++, С#, HTML/CSS, JS, Python. Поговорюють, що ще й непогано танцює.
                    </div>
                </div>
            </div>
            <div class="team-dev-box-column">
                <div class="team-dev-box-column-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/team-dev-col3-i1.png" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Ігор Сидорченко </strong> <br>
                        Керівник відділу розробок напряму Senior (середня й старша школа)
                    </div>
                    <div class="desc">
                        Науковець, викладач, розробник курсів напряму STEM Senior для дітей середньої та старшої школи з 10-річним досвідом. Ментор, тренер команд переможців національних етапів міжнародних турнірів з робототехніки. Суддя WRO, сертифікований LEGO Education Teacher Trainer. Фізик за освітою, художник і природознавець у душі.
                    </div>
                </div>
                <div class="team-dev-box-column-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/team-dev-col3-i2.png" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Олександр Шувалов </strong> <br>
                        Нейропсихолог
                    </div>
                    <div class="desc">
                        Член Національної психологічної асоціації України. Аспірант напряму клінічна психологія Інституту психології Національної академії педагогічних наук України. Консультант для дітей і підлітків.
                        <br>
                        Пігулка від стресу й ментор психічного здоров’я. <br>
                        Власник мурашиних ферм і практик медитації.
                    </div>
                </div>
                <div class="team-dev-box-column-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/team-dev-col3-i3.png" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Тетяна Калниш </strong> <br>
                        Методистка STEM-освіти
                    </div>
                    <div class="desc">
                        Розробниця курсів Science, де фізика обертається на магію. Повелителька формул Excel, викладачка і кураторка викладачів STEM-шкіл Inventor, ідейна натхненниця Middle-відділу. Вміє пояснити найскладніше дуже простими словами. Викладала парні танці у власній школі. Може намалювати будь-що будь-чим.
                    </div>
                </div>
                <div class="team-dev-box-column-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/team-dev-col3-i4.png" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Катерина Черних </strong> <br>
                        Методистка STEM-освіти
                    </div>
                    <div class="desc">
                        Розробниця курсу «Програмування зі SPIKE Prime», співавтор онлайнового курсу «Програмування WeDo 2.0», викладачка STEM-школи Inventor майже всіх Middle-курсів, де на заняттях використовують LEGO, кураторка викладачів і викладачок STEM-школи Inventor. Професійно навчає вчителів загальноосвітніх шкіл основ програмування та конструювання роботів LEGO Education. За лічені хвилини знаходить помилку в конструкції робота. Творча особистість, любить читати й обожнює м’які іграшки.
                    </div>
                </div>
                <div class="team-dev-box-column-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/team-dev-col3-i5.png" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Андрій Барабаш </strong> <br>
                        Методист STEM-освіти
                    </div>
                    <div class="desc">
                        Викладач, досвідчений тренер команд з робототехніки молодшої й середньої ліги. Навчає педагогів STEM-школи Inventor опановувати всі можливості Minecraft: EE. Суддя Міжнародного чемпіонату з Minecraft: EE, повелитель і творець світів Minecraft: ЕЕ.
                        Здатний розповісти і пояснити цінність будь-якої історичної події. Програмує роботів із заплющеними очима.
                    </div>
                </div>
                <div class="team-dev-box-column-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/team-dev-col3-i6.png" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Владислав Гребельник </strong> <br>
                        Методист STEM-освіти
                    </div>
                    <div class="desc">
                        Навчає STEM-педагогів робити велику й маленьку магію за допомогою програмування в Minecraft: EE, суддя Міжнародного чемпіонату з Minecraft: EE. Перетворює павуків на марсоходи, курей — на місячні велосипеди, а дітей — на програмістів, не виходячи з Minecraft: ЕЕ. Може намалювати 65 536 відтінків неба. Кількість падінь на лижах наближається до віку Всесвіту в годинах.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team-admin">
        <h2>Адміністрація</h2>
        <div class="team-admin-box">
            <div class="team-admin-box-column">
                <div class="team-admin-box-column-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/team-admin-col-i1.png" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Лілія Марченко</strong> <br>
                        Заступниця директорки з навчально-виховної роботи
                    </div>
                    <div class="desc">
                        Невгамовна освітянка, методистка з математики й інформатики, член журі Всеукраїнських олімпіад з програмування, вебдизайну, комп’ютерної графіки. Учителька математики й інформатики, чиї учні — призери та переможці Всеукраїнських олімпіад з математики, педагог з 13-річним досвідом роботи. Невичерпна оптимістка й жартівниця, матуся двох побігайок.
                    </div>
                </div>
                <div class="team-admin-box-column-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/team-admin-col-i2.png" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Олена Можаровська  </strong> <br>
                        Радниця з HR-питань
                    </div>
                    <div class="desc">
                        Має 10-річний досвід роботи в HR-напрямі в різних сферах бізнесу. Знає, де знайти талановитих працівників, і як їх можна зацікавити й утримати. Належить до громадської організації HR-волонтерів, цікавиться коучингом. Виховує трирічного сина, пройшла понад 15 квестів, а ще 10 років займалася бальними танцями. Завжди відкрита до нових знайомств і знань.
                    </div>
                </div>
                <div class="team-admin-box-column-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/team-admin-col-i4.png" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Дмитро Крижановський</strong> <br>
                        Радник з IT-питань
                    </div>
                    <div class="desc">
                        За фахом інженер комп‘ютерних систем і мереж. Має великий досвід роботи CIO, керує IT-департаментом. Керує технікою силою думки! Забезпечує школу найновішими та найпотужнішими IT-ресурсами та створює якісний робочий процес школи.
                        Має багато відзнак за досягнення у професійній сфері та спорті. Колекціонує кросівки та незабутні емоції, захоплюється талановитими людьми та цікавими книгами. Веде виключно здоровий спосіб життя.
                    </div>
                </div>
            </div>
            <div class="team-admin-box-column">
                <div class="team-admin-box-column-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/team-admin-col2-i1.png" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Ірина Вишневська </strong> <br>
                        Радниця з фінансових питань
                    </div>
                    <div class="desc">
                        Понад 18 років стажу у сфері фінансів і бухгалтерського обліку. Має досвід запускання та реалізації великих проєктів, надійна учасниця стартап-команд. Власниця міжнародного сертифіката професійного бухгалтера CAP/CIPA, член міжнародної асоціації бухгалтерів. Колекціонерка монет України, сертифікована дайверка і дизайнерка дачних ділянок.
                    </div>
                </div>
                <div class="team-admin-box-column-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/team-admin-col2-i2.png" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Максим Зибар </strong> <br>
                        Заступник директора з адміністративно-господарських питань
                    </div>
                    <div class="desc">
                        За фахом психолог, за покликанням — майстер організації процесів. Має 7 років досвіду роботи з дітьми. Майстер розмов про риболовлю й туризм. Будь-які завдання сприймає як цікавий квест. Має маленьку доньку і каже, що тільки вчиться бути батьком.
                    </div>
                </div>
                <div class="team-admin-box-column-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/team-admin-col2-i3.png" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Таїсія Мукій </strong> <br>
                        Директорка ТОВ «Професійний розвиток педагога»
                    </div>
                    <div class="desc">
                        Дослідниця дитинства, фасилітаторка Міжнародної програми розвитку дитини (ICDP), кандидатка педагогічних наук (PhD), менторка й STEM-педагог, наукова керівниця учнів-переможців Міжнародних конкурсів, тренерка з софт-скілів. Спікерка Міжнародних конференцій, авторка багатьох наукових публікацій з педагогіки, психології та комп’ютерних наук. Мандрівниця, безкінечно закохана у красу людської душі і світу. Невтомна дослідниця дитинства і щастя, винахідниця гармонізуючої рефлексії для учнів, їх батьків і вчителів.
                    </div>
                </div>
            </div>
            <div class="team-admin-box-column">
                <div class="team-admin-box-column-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/team-admin-col3-i1.png" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Галина Янковська  </strong> <br>
                        Радниця з юридичних питань
                    </div>
                    <div class="desc">
                        Три вищі освіти з відзнакою, 15 років науково-педагогічної роботи, 12 років юридичного стажу і 7 років викладання. Авторка понад 60 наукових статей, навчальної та методичної літератури, кандидатка філологічних наук, доцентка. Перфекціоністка в документах, невтомна бджолярка, йогиня за духом і поетеса в душі.
                    </div>
                </div>
				
<!-- 				<div class="team-admin-box-column-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/team-admin-col2-i4.png" alt="Team">
                    </div>
					
                    <div class="subtitle">
                        <strong>Медвідь Катерина </strong> <br>
                        Маркетологиня
                    </div>
					
                    <div class="desc">
                        Працює в маркетингу 7 років, за цей час провела безліч івентів, фестивалів і корпоративних заходів. За освітою архітекторка-дизайнерка, закінчила художню школу і впевнена, що творчий підхід потрібен у всіх сферах діяльності. Постійно навчається не тільки маркетингу, але й суміжним сферам.
                        <br><br>
                        Професійно займається танцями, грає в театрі та обожнює проводити буковинські весілля.
                    </div>
					
                </div> -->
				
            </div>
        </div>
    </div>

    <div class="team-teacher">
        <h2>Персонал школи</h2>
        <div class="team-admin-box">
            <div class="team-admin-box-column">
                <div class="team-admin-box-column-item">
                    <div class="img-holder">
                        <img src="https://inventorschool.org.ua/img/IMG_5290.jpg" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Козачок Ілона</strong> <br>
                        Методистка з виховної роботи
                    </div>
                </div>
            </div>
            <div class="team-admin-box-column">
                <div class="team-admin-box-column-item">
                    <div class="img-holder">
                        <img src="https://inventorschool.org.ua/img/IMG_5182.jpg" alt="Team">
                    </div>
                    <div class="subtitle">
                        <strong>Балим Тетяна </strong> <br>
                        Вчителька біології та хімії
                    </div>
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

