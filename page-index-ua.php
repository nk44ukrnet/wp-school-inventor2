<?php
/*
*
Template Name: index-ua
*/
get_header();
?>

<?php
while ( have_posts() ) {
	the_post(); ?>


    <div class="index-screen1">
        <div class="content">
            <h1>Відкрито набір на новий навчальний рік 2022-2023</h1>
            <h2>Inventor School — школа повного дня на Осокорках</h2>
            <ul>
                <!--                <li>Видаємо атестати державного зразка</li>-->
                <!--                <li>Готуємо до вступу до міжнародних ВНЗ</li>-->
                <!--                <li>Надаємо можливість отримати американський атестат</li>-->
                <!--                <li>Працюємо над становленням особистості дитини</li>-->
                <li>Preschool 4-5 років <a href="https://school.inventorschool.org.ua/preschool/">дізнатися більше про
                        програму</a></li>
                <li>Початкова школа 1-4 класи <a href="https://school.inventorschool.org.ua/grades1-4/">дізнатися більше
                        про програму</a></li>
                <li>Preschool 5-6 років <a href="https://school.inventorschool.org.ua/preschool/">дізнатися більше про
                        програму</a></li>
                <li>Середня школа 5-9 класи <a href="https://school.inventorschool.org.ua/5-12-grades/">дізнатися більше
                        про програму</a></li>
            </ul>
            <!--            <p class="assign">-->
            <!--                Навчання проводиться в школі повного дня та школах неповного дня-->
            <!--            </p>-->
            <div class="reg">
                <!--<a href="/event/">Записатись на презентацію</a> -->
                <a href="#!" data-bs-toggle="modal" data-bs-target="#contactPopup"> Записатись на консультацію </a>
            </div>
        </div>
    </div>

    <div class="index-join-camp padding-mobile content-size">
        <h2 class="font-size-2 index-join-camp__heading">Табір і садочок <br> для дітей 4-12 р.</h2>
        <a href="/camp/" class="index-join-camp btn-cta">Детальніше</a>
    </div>

    <div class="index-help">
        <div class="help-content">
            <div class="help-pre-heading">
                <img src="<?php echo get_theme_file_uri(); ?>/img/index-help-pre-heading.svg" alt="elements">
                <h2>Як ми допомагаємо дітям стати <span>успішними</span></h2>
            </div>
            <div class="help-table">
                <div class="item item1">
                    <a href="#!" class="mob-trigger" onclick="bsIndexModalHelp1.show();">+</a>
                    <!--                    <img src="-->
					<?php //echo get_theme_file_uri(); ?><!--/img/index-help-table-i1.svg" alt="plan" class="i1">-->
                    <div class="inner_text">
                        <h2><span class="emoji-mob-only"> 📇🗂 <br> </span>
                            Складаємо індивідуальний навчальний план</h2>
                        <p>
                            Щоб розвивати сильні сторони конкретно вашої дитини й допомагати впоратися зі слабкими. Ми
                            трансформували навчальний процес так, щоб навчання стало персоналізованим
                        </p>
                        <a href="#!" class="details" onclick="bsIndexModalHelp1.show();">Докладніше →</a>
                        <div class="gradient"></div>
                    </div>
                </div>
                <div class="item item2">
                    <a href="#!" class="mob-trigger" onclick="bsIndexModalHelp2.show();">+</a>
                    <div class="inner_text">
                        <h2>🕹🔭<br>
                            Проєктний формат навчання
                        </h2>
                        <p>
                            Формат «учитель сказав — діти записали» вже давно віджив. Наші учні вивчають науки та світ
                            через
                            командні та персональні наукові проєкти, вчаться розв’язувати завдання в комплексі та на
                            практиці
                        </p>
                        <a href="#!" class="details" onclick="bsIndexModalHelp2.show();">Докладніше →</a>
                        <div class="gradient"></div>
                    </div>
                </div>
                <div class="item item3">
                    <a href="#!" class="mob-trigger" onclick="bsIndexModalHelp3.show();">+</a>
                    <div class="inner_text">
                        <h2>👀✋🎒<br>
                            Заохочуємо самостійність
                        </h2>
                        <p>
                            Тут дитина вчиться обирати власну мету навчання та шляхи її досягнення. Пробує сама
                            визначати, у
                            який спосіб надолужувати прогалини, вчиться ухвалювати рішення, аргументувати їх і розуміти
                            свою
                            відповідальність
                        </p>
                        <a href="#!" class="details" onclick="bsIndexModalHelp3.show();">Докладніше →</a>
                        <div class="gradient"></div>
                    </div>
                </div>
                <div class="item item4">
                    <a href="#!" class="mob-trigger" onclick="bsIndexModalHelp4.show();">+</a>
                    <div class="inner_text">
                        <h2>🌄🗒<br>
                            Формуємо портфоліо
                        </h2>
                        <p>
                            Протягом усіх років навчання ми фіксуємо та зберігаємо всі надбання і досягнення дитини. У
                            результаті маємо свого роду детальну хронологічну базу даних про дитину, що допомагає
                            відстежувати її прогрес
                        </p>
                        <a href="#!" class="details" onclick="bsIndexModalHelp4.show();">Докладніше →</a>
                        <div class="gradient"></div>
                    </div>
                </div>
                <div class="item item5">
                    <a href="#!" class="mob-trigger" onclick="bsIndexModalHelp5.show();">+</a>
                    <div class="inner_text">
                        <h2>🔬🛠&🤝🗣<br>
                            Розвиваємо гард- і софт-скіли
                        </h2>
                        <p>
                            Ми розвиваємо в дитині емоційний інтелект і емпатію. Вчимо знаходити спільну мову з різними
                            людьми й адаптуватися до обставин. Це допоможе дитині почуватися впевнено і розвиватися в
                            будь-якій сфері, яку вона обере
                        </p>
                        <a href="#!" class="details" onclick="bsIndexModalHelp5.show();">Докладніше →</a>
                        <div class="gradient"></div>
                    </div>
                </div>
                <div class="item item6">
                    <a href="#!" class="mob-trigger" onclick="bsIndexModalHelp6.show();">+</a>
                    <div class="inner_text">
                        <h2>🎓🌍<br>
                            Готуємо до світових ВНЗ
                        </h2>
                        <p>
                            Наше завдання — допомогти дитині зрозуміти свої бажання, цілі та сильні сторони, щоб вона
                            могла
                            аргументовано обрати свій подальший шлях у житті. Тож ми проводимо профорієнтацію і
                            відкриваємо
                            можливості навчання в найкращих українських і світових ВНЗ
                        </p>
                        <a href="#!" class="details" onclick="bsIndexModalHelp6.show();">Детальніше →</a>
                        <div class="gradient"></div>
                    </div>
                </div>
                <div class="item item7">
                    <a href="#!" class="mob-trigger" onclick="bsIndexModalHelp7.show();">+</a>
                    <div class="inner_text">
                        <h2><span class="emoji-mob-only"> 🚀💼 <br> </span>
                            Завершуємо першим дорослим резюме
                        </h2>
                        <p>
                            По закінченню школи у дитини буде власний випускний проєкт — резюме свого навчання та
                            презентація себе як особистості та молодого спеціаліста. Цей проєкт можна використовувати
                            при
                            вступі до ВНЗ або як додаткову перевагу для стажування
                        </p>
                        <a href="#!" class="details" onclick="bsIndexModalHelp7.show();">Детальніше →</a>
                        <div class="gradient"></div>
                    </div>
                    <!--<img src="<?php /*echo get_theme_file_uri(); */ ?>/img/index-help-table-i2.svg" alt="plan" class="i2">-->
                </div>
            </div>
        </div>
    </div>

    <div class="index-year">
        <div class="index-year__container padding-mobile content-size">
            <div class="index-year__video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/FsRQcPMHZjg"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
            <div class="index-year__text font-size-2">
                Яким буде новий навчальний рік 2022-2023 у Inventor School
            </div>
        </div>
    </div>

    <div class="index-advantages">
        <div class="advantages-inner">
            <h2>Наші переваги</h2>
            <div class="advantages-content">
                <div class="advantages-item">
                    <div class="inner">
                        <div class="symbol">
                            <img src="<?php echo get_theme_file_uri(); ?>/img/index-screen1-bullet4.svg" alt="element"
                                 width="26" height="13">
                        </div>
                        <p>
                            Креативний технологічний простір для активного навчання
                        </p>
                    </div>
                    <div class="inner">
                        <div class="symbol">
                            <img src="<?php echo get_theme_file_uri(); ?>/img/index-screen1-bullet3.svg" alt="element"
                                 width="22" height="21">
                        </div>
                        <p>
                            Режим дня, який забезпечує всі потреби дитини в розвитку і відпочинку
                        </p>
                    </div>
                    <div class="inner">
                        <div class="symbol">
                            <img src="<?php echo get_theme_file_uri(); ?>/img/index-screen1-bullet1.svg" alt="element"
                                 width="30" height="21">
                        </div>
                        <p>
                            Співпрацюємо з міжнародними та українськими консультантами, спікерами та командами
                        </p>
                    </div>
                    <div class="inner">
                        <div class="symbol">
                            <img src="<?php echo get_theme_file_uri(); ?>/img/index-screen1-bullet2.svg" alt="element"
                                 width="21" height="21">
                        </div>
                        <p>
                            Під час навчання діти розв’язують актуальні світові проблеми
                        </p>
                    </div>
                    <div class="inner">
                        <div class="symbol">
                            <img src="<?php echo get_theme_file_uri(); ?>/img/index-advantages-list-item.svg"
                                 alt="elemet" width="37" height="19">
                        </div>
                        <p>
                            Ефективні формати: симуляційні ігри, проєктна робота, різновікові групи, «перевернуті»
                            класи,
                            змішана онлайнова й офлайнова взаємодія
                        </p>
                    </div>
                </div>
                <div class="advantages-item"></div>
            </div>
        </div>
    </div>

    <div class="index-synergy">
        <div class="synergy-content">
            <div class="item">
                <img src="<?php echo get_theme_file_uri(); ?>/img/index-synergy-img.gif" alt="Synergy">
            </div>
            <div class="item">
                <h2><span>Синергія:</span> <br> дитина + батьки + школа</h2>
                <p>
                    Щоб дитина виросла і стала успішною, самої лише школи замало. Тут потрібні зусилля трьох сторін:
                    школи,
                    батьків і самої дитини.
                </p>
                <ul class="coloredBullets">
                    <li>Ставимося до дитини як до рівної особистості, яку треба не «виправляти», а
                        спрямовувати
                    </li>
                    <li>Залучаємо батьківу процес навчання, до спеціалізованих тренінгів і гакатонів</li>
                    <li>Надаємо постійний фідбек з боку школи, а також розробили систему гейміфікації, яка
                        допомагає батькам і дітям разом досягати ліпших результатів
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="index-testimonials">
        <div class="index-testimonials__heading padding-mobile content-size">
            <h2 class="font-size-2">Відгуки</h2>
        </div>
        <div class="index-testimonials__swiper">
            <div class="swiper mySwiper-index">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <h2 class="index-testimonials__title">
                            Батьки Всеволода Кокшарова
                        </h2>
                        <p class="index-testimonials__text">
                            Пролетіли 4 роки, як один день.
                            Тільки стояло питання в яку школу піде син — і ось вже останній тиждень навчання! Сумний
                            момент. Але лише цей момент. Бо жодного дня не пошкодували про вибір цієї школи. Чому? Бо
                            жодного дня дитина не сказала, що не хоче в школу!
                            Поглибленні знання, цікаві проєкти, різнобічний розвиток, як на мене, відмінні риси Інвентор
                            від інших шкіл.
                            <br><br>
                            Багато традицій було започатковано, які, думаю, будуть передані й наступним учням: день
                            навпаки, кольоровий день, зустріч й підтримка нових учнів, святкування державних свят не
                            тому, що треба, а тому, що хочеться, спілкування з носіями мови й листування з дітьми з
                            Америки, а ще захист проєктів — це не якісь там контрольні точки, це — справжнє свято для
                            дитини.
                            <br><br>
                            Хочу відмітити й вдалий розклад, який дозволяв опанувати себе зранку, попрацювати вдень над
                            головними уроками та покреативити на STEM предметах ближче до кінця дня. Найулюбленішими
                            уроками Всеволода в Інвентор стали англійська й математика, ну і, звісно, STEM.
                            <br><br>
                            Для нашої родини було важливим відчувати підтримку нашого сина в школі. Він активний,
                            готовий у всьому брати участь, щось придумувати, і нам було важливо бачити, що його
                            активність не вгамовується вчителями, а підтримується.
                            Дуже вдало підібрана соціальна основа — за книгою Кові «7 правил високоефективних людей».
                            Деякі правила з цієї книги стали фразами в нашій родині.
                            <br><br>
                            Щиро вдячні й адміністрації школи за підтримку, за розуміння й за те, що завжди йшли на
                            компроміс й швидко вирішували питання, які виникали.
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <h2 class="index-testimonials__title">
                            Тетяна Леонтович
                        </h2>
                        <p class="index-testimonials__text">
                            Я досі пам‘ятаю нашу першу зустріч з Inventor School, коли ми обирали школу для сина. Я була
                            в такому захопленні, що всім повторювала - «Я б хотіла кинути роботу і сама піти вчитися
                            туди!». Моє захоплення протягом усіх 4 років навчання поділяв і син. Пам’ятаю його радісні
                            очі кожного ранку у передчутті нового дня, сльози - коли занедужував і доводилося залишатися
                            вдома, сум - коли починалися канікули і треба було тиждень чи два чекати повернення до
                            навчання…
                            <br><br>
                            Зараз ми не можемо будувати чітких планів, не знаємо що принесе нам майбутнє, але чую від
                            сина - «Я хочу вчитися лише в Інвентор!». Тому моя величезна подяка усьому колективу школи
                            за те, що показали яким цікавим може бути навчання, дали надзвичайно сильну підготовку не
                            лише з традиційних шкільних дисциплін, а й з сучасних СТЕМ-предметів, а також заклали основи
                            різноманітних умінь і навичок необхідних для майбутнього!
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <h2 class="index-testimonials__title">
                            Батьки Аліси і Філіпа Смірнових
                        </h2>
                        <p class="index-testimonials__text">
                            Ми були і залишаємось фанатами вашої справи! Безмежно раді, що одного дня дізнались про
                            Інвентор Скул та вдячні за шанс долучитись. Ці два роки були для нас справжнім задоволенням,
                            тому що до цього в нас був, на жаль, інший досвід. Наші діти навіть на канікулах, хотіли до
                            школи!) Дякуємо за любов та турботу!) Бажаємо, щоб і далі Інвентор Скул був таким надихаючим
                            прикладом💙💛
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <h2 class="index-testimonials__title">
                            Батьки Даніїла-Юксела Ямана
                        </h2>
                        <p class="index-testimonials__text">
                            З Inventor School нас пов’язує 4 роки початкової освіти сина, а до того ще пару років
                            технічних гуртків, що саме і надихнули нас обрати саме цю школу для сина, що захоплюється
                            Лего, технікою та конструюванням. STEM-підхід школи відповідає нашим уявленням про сучасні
                            методики у навчанні покоління альфа, навчанні інноваторів, людей, що не будуть боятися
                            еспериментувати, шукати свій шлях, генерувати нестандартні підходи та ідеї.
                            <br><br>
                            Дуже імпонує виховання цифрової грамотності, задіяння в навчальний процес різноманітних
                            сучасних платформ, що використовуються для захисту проектів та в навчанні. Google Earth,
                            MakeCode Arcade, Padlet, Prezi, StoryJumper, Wix – маленька лише частка з того, що
                            пригадала, не говорячи вже про MS Office та Teams, що стали звичними інструментами для
                            дитини.
                            <br><br>
                            Діти отримують багато додаткового контенту, відчуваємо, що вчителі та методисти знаходяться
                            в постійному пошуку ресурсів і методик, для цікавого та ефективного навчання. Окрім
                            стандартної програми в початковій школі діти проходять курси Science, Architecture, Scratch,
                            Minecraft Education, фінансової грамотності, вчаться ефективно комунікувати і взаємодіяти в
                            групах, в парах, і самостійно, оформляти і презентувати проекти, а на заняттях психології
                            вирішувати різноманітні міжособистісні проблеми. Звичними є обговорення різних наукових
                            винаходів, а також глобальних викликів, з якими стикається людство.
                            <br><br>
                            Школа гарно організовує дистанційне навчання, з розкладом, збалансованим чергуванням онлайн
                            уроків і самостійної роботи, та контролем за опрацюванням матеріалу дитиною.
                            <br><br>
                            Дуже імпонує зворотній зв’язок і можливість комунікації на всіх рівнях, з вихователями,
                            вчителями, методистами та директором. Ця комунікація дає можливість впливати на процеси,
                            коли батьки відчувають необхідність, надає відчуття залучення і цінності взаємодії
                            «школа-сім’я», вчасно реагувати на проблеми. Ми відчуваємо як школа росте і розвивається
                            разом з нашою дитиною ці 4 роки і, звісно, надіємося на її успіх у майбутньому.
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <h2 class="index-testimonials__title">
                            Батьки Артура Дзиговського
                        </h2>
                        <div class="index-testimonials__text">
                            Мій син провчився 4 роки в Інвентор скул (молодша школа) на локації Позняки (вул.Гмирі, 6).
                            Щоб зрозуміти загальне наше враження від школи – ми вирішили продовжувати з Інвентор до 12
                            класу включно. <br>
                            Плюси школи: <br>
                            <ol>
                                <li>На кожен предмет - окремий викладач (а не 1 "і жнець, і жрець", як в звичних нам
                                    державних школах).
                                </li>
                                <li>Програма розроблена методистами по напрямах, тобто не важливо, яку локацію ви обрали
                                    - результат буде однаково високим.
                                </li>
                                <li>Програма = НУШ+STEM предмети+математика англ. мовою за передовою у світі
                                    Сінгапурською методикою та підручниками.
                                </li>
                                <li>Робота по софт-скілам за підтримки психолога.</li>
                                <li>Класи до 10 дітей.</li>
                            </ol>
                            Підсумувавши сказане вище, можу написати лише одне - ДЯКУЮ ЗА ВАШУ РОБОТУ! Це моя одна з
                            найкращих інвестицій)
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <h2 class="index-testimonials__title">
                            Батьки Досій Станіслави
                        </h2>
                        <p class="index-testimonials__text">
                            Мене приємно здивувала на 100% продумана та працююча (!) організація процесу, від вступу -
                            коли представник школи телефонує рівно о тій годині про яку домовлялись, до online навчання.
                            Інтерактивні дошки, планшети - це вже не ексклюзив та коли всі гаджети інтегровані до
                            шкільного життя і діти завдяки ним ефективно навчаються - це супер.
                            <br><br>
                            Мені на 100% імпонує методика освітнього процесу - підручники, цікаві предмети,
                            "lego-інтеграція". Баланс точних наук і тих предметів, що розвивають творчі здібності. Моя
                            донька не дуже любила саме малювати, але про уроки живопису в Inventor завжди розповідала з
                            захопленням.
                            <br><br>
                            Speaking Club з носієм, як урок за розкладом - це дуже круто.
                            <br><br>
                            Комунікація з вчителями та адміністрацією. Завжди оперативно можна отримати фідбек на
                            будь-яке запитання. Відсутніть флуду і взаємоповага в батьківських чатах - 👍
                            <br><br>
                            Дитячий колектив. Оскільки Станіслава була єдиною дівчинкою серед двох класів, я трохи
                            хвилювалася чи не буде "гендерних непорозумінь") але це виявилося лише хвилюванням. Тому що
                            коли діти разом чимось справді захоплені, поважають кордони свої та інших, вирішують
                            проблеми з шкільним психологом - непорозуміння між ними зводяться до нуля.
                            <br><br>
                            Я бачу бажання вчитися. Зараз для мене - це найважливіше. Дитина усвідомлює свої успіхи і це
                            надає їй впевненності та бажання йти далі. Зараз вона себе бачить тільки у вашій школі.
                            Дякую!
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <h2 class="index-testimonials__title">
                            Батьки Даніеля та Акіма Гаджимурадових
                        </h2>
                        <p class="index-testimonials__text">
                            Дякую за ці роки і за все позитивне і важливе, що зробили для нашого сина і для нашої
                            родини.
                            Нам сподобалося все: починаючи від співвідносин між вчителями і учнями, відкритості і
                            уважності колективу, готовності керівництва йти на зустріч батьківським запитам, закінчуючи
                            всіма цікавими, прогресивними і новітніми напрямками у освітньому процесі, що ваш колектив
                            втілював і застосовув протягом всіх цих років. На наш погляд, Інвентор Скул гарний приклад
                            сучасного закладу освіти, який прекрасно крокує в ногу з часом, де діти щасливі і
                            досвідчені, куди хочеться бігти щодня з радістю.
                            <br><br>
                            Дуже раділи можливості мати математику за Сінгапурською програмою, також Даніелю подобалися
                            всі уроки з програмування, Робототехніки, Архітектури. Ми, навіть, заздрили, що зараз діти
                            можуть так цікаво і прогресивно навчатися.
                            <br><br>
                            Важливим і дорогоцінним стало знайомство і оволодіння гарною кількістю сучасних програмам,
                            які діти так жваво використовують щоденно. Особливо відмічаємо проектну роботу - це щось
                            неймовірне - як самі теми, підготовка, так і емоції під час захисту, костюми і пам’ять про
                            всі ці заходи на все життя!!!
                            <br><br>
                            Дякуємо від усієї душі за вашу неоціненну працю, за турботу і розуміння, за підтримку і за
                            ваші відкриті серця!
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <h2 class="index-testimonials__title">
                            Батьки Вероніки Ніколаєвої
                        </h2>
                        <p class="index-testimonials__text">
                            Можу з впевненістю сказати, що вибір школи для моєї доньки не був випадковим. Я переглядала
                            безліч варіантів та ґрунтовно підходила до питання. І я з впевненістю можу сказати, що
                            жодного разу за 4 роки не пошкодувала про це рішення. Інвентор скул залишиться в серці
                            назавжди.
                            <br><br>
                            Школа дійсно спрямована на всебічний розвиток дитини, до кожного знаходять індивідуальний
                            підхід, працюють не лише над здатністю та бажанням дитини вчитись, а й розвивають так звані
                            “soft skills”, які надзвичайно важливі в сучасному житті. Після завершення початкової школи
                            моя малеча вміє працювати в команді, ставити цілі та досягати їх, розробляє плани досягнення
                            поставлених цілей, може спілкуватись з іноземцями англійською. Математика - то взагалі
                            космос, рівень оволодіння вражає.
                            <br><br>
                            На нашу долю випали складні задачі з навчанням у карантин та під час війни, але школа доволі
                            швидко впоралась з труднощами та зуміла налагодити процес навчання. За це велика дяка та
                            пошана. А ще дуже імпонує дійсно щира зацікавленість вчителів та директора у розвитку дітей
                            та школи. Ми щасливі, що були разом ці 4 роки. Дякую!
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <h2 class="index-testimonials__title">
                            Батьки Богдана Могили
                        </h2>
                        <p class="index-testimonials__text">
                            В цілому я дуже рада, що ми обрали саме Inventor. Школа дуже швидко зуміла адаптуватись до
                            нової дійсності та організувати достойний освітній процес. <br>
                            Я бачу значні зміни на краще у ставленні до навчання сина. Він став дуже старатися, у нього
                            з‘явилась відповідальність та здорова цікавість.
                        </p>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <div class="index-team">
        <h2>Наші ідеологи</h2>
        <div class="index-team-inner">
            <div class="index-team-inner-item">
                <img src="<?php echo get_theme_file_uri(); ?>/img/index-team-member3.png" alt="Team">
                <h3>
                    <strong>Лариса Скаба</strong>
                    <br>
                    Директорка школи
                </h3>
                <p>
                    Драйверка інноваційної освіти, авторка багатьох освітніх курсів і програм, педагог вищої
                    кваліфікаційної
                    категорії з 26-річним досвідом роботи; менеджерка освіти впродовж 21 року. Тьюторка і мама двох
                    дітей.
                </p>
            </div>
            <div class="index-team-inner-item">
                <img src="<?php echo get_theme_file_uri(); ?>/img/index-team-member2.png" alt="Team">
                <h3>
                    <strong>Оксана Стоєцька</strong>
                    <br>
                    Засновниця школи
                </h3>
                <p>
                    Економістка за освітою і креаторка освіти за покликанням. 13 років розбудовує STEM в Україні та
                    організовує
                    чемпіонати з робототехніки, засновниця STEM-шкіл INVENTOR. Мама двох дорослих синів, велика мрійниця
                    та
                    щаслива людина.
                </p>
            </div>
            <div class="index-team-inner-item">
                <img src="<?php echo get_theme_file_uri(); ?>/img/index-team-member1.png" alt="Team">
                <h3>
                    <strong>Володимир Стоєцький</strong>
                    <br>
                    Засновник школи
                </h3>
                <p>
                    Інженер КПІ, підприємець МВА, інвестор і директор понад 20 років.
                    Батько двох синів, тріатлоніст.
                </p>
            </div>
        </div>
        <!--        <div class="index-team-video-container">-->
        <!--            <p><span>Подивіться відеозвернення</span> <img-->
        <!--                        src="-->
		<?php //echo get_theme_file_uri(); ?><!--/img/index-team-arrow-down.svg" alt="check the video">-->
        <!--            </p>-->
        <!--            <iframe src="https://player.vimeo.com/video/531261608" width="640" height="360" frameborder="0"-->
        <!--                    allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>-->
        <!--        </div>-->
    </div>

    <div class="index-offer1">
        <div class="offer1-item">
            <h2>Майбутнє дитини <br> — у ваших руках!</h2>
            <h3>Записуйтеся на індивідуальну консультацію</h3>
        </div>
        <div class="offer1-item">
            <form class="offer-form" name="offer-form1">
                <input type="text" name="name" placeholder="Як до вас звертатися?" required>
                <input type="tel" name="phone" placeholder="Ваш номер телефону" required>
                <input type="email" name="email" placeholder="Ваша електронна адреса" required>
                <select name="contactType" style="display:none;">
                    <!--<option value="" disabled>Зручний канал зв’язку</option>-->
                    <option value="Телефон" selected>Телефон</option>
                    <option value="Email">Email</option>
                </select>
                <div class="submit-group">
                    <input type="submit" name="submit" value="Записатись">
                </div>
            </form>
            <a href="#!" class="mobile-offer-popup-trigger" data-bs-toggle="modal" data-bs-target="#contactPopup">Записатись</a>
        </div>
    </div>

    <div class="index-space">
        <div class="space-inner">
            <h2>Наш простір </h2>
            <div class="i1">
                <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/05/index-gal-photo1.png"
                     alt="Our space">
            </div>
            <div class="i2">
                <div class="i2-text i-text">
                    <h3>Місце, в якому хочеться бути</h3>
                    <p>
                        Ми зонували простір так, щоб дітям було комфортно вчитися, працювати і відпочивати на території
                        школи
                        повний день: є зони для навчання, експериментів, власних проєктів, занять мистецтвом і спортом,
                        є де
                        обговорити останні новини з друзями та поїсти.
                    </p>
                    <ul class="coloredBullets">
                        <li>Сучасні аудиторії з ергономічними меблями та якісним освітленням</li>
                        <li>Все зроблено так, щоб зламати чи розбити щось було надзвичайно важко</li>
                        <li>Тут чисто і безпечно: досить простору, хороша вентиляція та регулярне гігієнічне
                            прибирання
                        </li>
                        <li>Пришкільна територія — це STEM-зона на свіжому повітрі, де можна грати, займатися спортом,
                            вчитися і відпочивати
                        </li>
                        <li>Шкільна телерадіосистема транслює виступи цікавих українських і міжнародних спікерів у всі
                            аудиторії одночасно. А може й виходити у світовий радіоефір!
                        </li>
                    </ul>
                </div>
                <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/01/2_photo_08.jpg"
                     alt="Our space" class="i2-img">
            </div>
            <div class="i-bunch">
                <div class="i-bunch-left">
                    <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/01/4_photo_03.jpg"
                         alt="Our space">
                    <!--                    <img src="-->
					<?php //echo get_theme_file_uri(); ?><!--/img/index-space-bunch-left2.png" alt="Our space">-->
                    <!--                    <img src="-->
					<?php //echo get_theme_file_uri(); ?><!--/img/index-space-bunch-left3.png" alt="Our space">-->
                    <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/01/6_photo_07.jpg"
                         alt="Our space">
                </div>
                <div class="i-bunch-right">
                    <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/01/3_photo_09.jpg"
                         alt="Our space">
                    <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/01/5_photo_24.jpg"
                         alt="Our space">
                    <!--                    <img src="-->
					<?php //echo get_theme_file_uri(); ?><!--/img/index-space-bunch-right3.png" alt="Our space">-->
                    <div class="i-bunch-right-combined">
                        <!--                        <img src="-->
						<?php //echo get_theme_file_uri(); ?><!--/img/index-space-bunch-right4-1.png"-->
                        <!--                             alt="Our space">-->
                        <!--                        <img src="-->
						<?php //echo get_theme_file_uri(); ?><!--/img/index-space-bunch-right4-2.png"-->
                        <!--                             alt="Our space">-->
                    </div>
                    <iframe src="https://player.vimeo.com/video/530753757" width="640" height="319" frameborder="0"
                            allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                    <!--                <img src="<?php echo get_theme_file_uri(); ?>/img/index-space-bunch-right5.png" alt="Our space">-->
                </div>
                <!--  BS MOBILE CAROUSEL-->
                <div id="carouselExampleControls" class="carousel slide i-bunch-mobile-carousel"
                     data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/05/index-gal-photo2.png"
                                 class="" alt="Slide">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo get_theme_file_uri(); ?>/img/index-grid-gallery/026.jpg" class=""
                                 alt="Slide">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo get_theme_file_uri(); ?>/img/index-grid-gallery/195.jpg" class=""
                                 alt="Slide">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo get_theme_file_uri(); ?>/img/index-grid-gallery/242.jpg" class=""
                                 alt="Slide">
                        </div>
                        <div class="carousel-item">
                            <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/01/DSC_7473.jpg"
                                 class="" alt="Slide">
                        </div>
                        <div class="carousel-item">
                            <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/01/DSC_7493_.jpg"
                                 class="" alt="Slide">
                        </div>
                        <div class="carousel-item">
                            <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/01/DSC_7607.jpg"
                                 class="" alt="Slide">
                        </div>
                        <div class="carousel-item">
                            <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/01/photo_10.jpg"
                                 class="" alt="Slide">
                        </div>
                        <div class="carousel-item">
                            <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/01/photo_13.jpg"
                                 class="" alt="Slide">
                        </div>
                        <div class="carousel-item">
                            <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/01/photo_17.jpg"
                                 class="" alt="Slide">
                        </div>
                        <div class="carousel-item">
                            <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/05/index-gal-photo3.png"
                                 class="" alt="Slide">
                        </div>
                        <div class="carousel-item">
                            <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/05/index-gal-photo4.png"
                                 class="" alt="Slide">
                        </div>
                        <div class="carousel-item">
                            <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/05/index-gal-photo5a.png"
                                 class="" alt="Slide">
                        </div>
                        <div class="carousel-item">
                            <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/05/index-gal-photo6.png"
                                 class="" alt="Slide">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo get_template_directory_uri() ?>/img/index-gal-photo7.png"
                                 class="" alt="Slide">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo get_template_directory_uri() ?>/img/index-gal-photo8.png"
                                 class="" alt="Slide">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo get_template_directory_uri() ?>/img/index-gal-photo9.png"
                                 class="" alt="Slide">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- end BS MOBILE CAROUSEL-->
            </div>
            <div class="i-videos">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/I6To26p6Bh0" title="YouTube video player" loading="lazy" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/C4KIKIY_Ksw" title="YouTube video player" loading="lazy" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe src="https://player.vimeo.com/video/675848978?h=df31b1db74" width="640" height="360"
                        frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen loading="lazy"></iframe>
                <iframe src="https://player.vimeo.com/video/675852855?h=51572c8e6f" width="640" height="360"
                        frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen loading="lazy"></iframe>
            </div>
            <div class="i-grid-update" id="i-grid-update">
                <img src="<?php echo get_theme_file_uri(); ?>/img/index-grid-gallery/026.jpg"
                     data-src="<?php echo get_theme_file_uri(); ?>/img/index-grid-gallery/026.jpg" alt="School photo"
                     class="img-item">
                <img src="<?php echo get_theme_file_uri(); ?>/img/index-grid-gallery/195.jpg"
                     data-src="<?php echo get_theme_file_uri(); ?>/img/index-grid-gallery/195.jpg" alt="School photo"
                     class="img-item">
                <img src="<?php echo get_theme_file_uri(); ?>/img/index-grid-gallery/242.jpg"
                     data-src="<?php echo get_theme_file_uri(); ?>/img/index-grid-gallery/242.jpg" alt="School photo"
                     class="img-item">
                <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/01/DSC_7473.jpg"
                     data-src="https://school.inventorschool.org.ua/wp-content/uploads/2022/01/DSC_7473.jpg"
                     alt="School photo" class="img-item">
                <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/01/DSC_7493_.jpg"
                     data-src="https://school.inventorschool.org.ua/wp-content/uploads/2022/01/DSC_7493_.jpg"
                     alt="School photo" class="img-item">
                <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/01/DSC_7607.jpg"
                     data-src="https://school.inventorschool.org.ua/wp-content/uploads/2022/01/DSC_7607.jpg"
                     alt="School photo" class="img-item">
                <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/01/photo_10.jpg"
                     data-src="https://school.inventorschool.org.ua/wp-content/uploads/2022/01/photo_10.jpg"
                     alt="School photo" class="img-item">
                <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/01/photo_13.jpg"
                     data-src="https://school.inventorschool.org.ua/wp-content/uploads/2022/01/photo_13.jpg"
                     alt="School photo" class="img-item">
                <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/01/photo_17.jpg"
                     data-src="https://school.inventorschool.org.ua/wp-content/uploads/2022/01/photo_17.jpg"
                     alt="School photo" class="img-item">
                <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/05/index-gal-photo2.png"
                     data-src="https://school.inventorschool.org.ua/wp-content/uploads/2022/05/index-gal-photo2.png"
                     alt="School photo" class="img-item">
                <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/05/index-gal-photo3.png"
                     data-src="https://school.inventorschool.org.ua/wp-content/uploads/2022/05/index-gal-photo3.png"
                     alt="School photo" class="img-item">
                <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/05/index-gal-photo4.png"
                     data-src="https://school.inventorschool.org.ua/wp-content/uploads/2022/05/index-gal-photo4.png"
                     alt="School photo" class="img-item">
                <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/05/index-gal-photo5a.png"
                     data-src="https://school.inventorschool.org.ua/wp-content/uploads/2022/05/index-gal-photo5a.png"
                     alt="School photo" class="img-item">
                <img src="https://school.inventorschool.org.ua/wp-content/uploads/2022/05/index-gal-photo6.png"
                     data-src="https://school.inventorschool.org.ua/wp-content/uploads/2022/05/index-gal-photo6.png"
                     alt="School photo" class="img-item">
                <img src="<?php echo get_template_directory_uri() ?>/img/index-gal-photo7.png"
                     data-src="<?php echo get_template_directory_uri() ?>/img/index-gal-photo7.png"
                     alt="School photo" class="img-item">
                <img src="<?php echo get_template_directory_uri() ?>/img/index-gal-photo8.png"
                     data-src="<?php echo get_template_directory_uri() ?>/img/index-gal-photo8.png"
                     alt="School photo" class="img-item">
                <img src="<?php echo get_template_directory_uri() ?>/img/index-gal-photo9.png"
                     data-src="<?php echo get_template_directory_uri() ?>/img/index-gal-photo9.png"
                     alt="School photo" class="img-item">
            </div>
            <div class="i5">
                <div class="i5-text i-text">
                    <h3>Цифрові технології навчання</h3>
                    <p>Вже очевидно, що дітям доведеться жити у світі цифрових технологій. Тому звикати до них варто
                        одразу.</p>
                    <ul class="coloredBullets">
                        <li>Цифрові навчальні матеріали та стримінг уроків: щоб ніхто не залежав від
                            загубленого підручника чи пропущеного уроку
                        </li>
                        <li>Дистанційне навчання один день на три тижні: щоб привчати дитину до роботи в
                            онлайні
                        </li>
                        <li>Регулярні заняття в американській школі: онлайн у супроводі вчителів школи</li>
                        <li>Особистий кабінет для батьків та електронний щоденник: щоб було зручно
                            відстежувати прогрес дитини
                        </li>
                        <li>Максимальна безпека:у школі маємо пропускну систему за єдиною електронною
                            карткою учня
                        </li>
                        <li>Міжнародні учнівські конференції та майстер-класи: беремо участь командами в
                            проєктній роботі разом із закордонними школами-партнерами
                        </li>
                        <li>Онлайнові курси: супроводжуємо дитину в навчанні на найкращих онлайнових курсах
                            України та світу
                        </li>
                    </ul>
                </div>
                <div class="i5-img">
                    <img src="<?php echo get_theme_file_uri(); ?>/img/index-space-i5.png" alt="Our space">
                </div>
            </div>
            <div class="i6">
                <div class="i6-img">
                    <img src="<?php echo get_theme_file_uri(); ?>/img/index-space-i6.png" alt="Our space">
                </div>
                <div class="i6-text i-text">
                    <h3>Повноцінне та різноманітне харчування </h3>
                    <p>
                        Харчуванням дітей у школі опікується компанія HCFood. Це професіонали, що давно спеціалізуються
                        саме
                        на дитячому харчуванні.
                    </p>
                    <ul class="coloredBullets">
                        <li>Чотириразове харчування: сніданок, обід, підвечірок і вечеря (за бажанням)</li>
                        <li>Батьки можуть самі обрати різновид меню для дитини</li>
                        <li>Є меню на різні випадки: звичайне, вегетаріанське, безлактозне або безглютенове</li>
                        <li>Ніяких напівфабрикатів і перемороженого м’яса</li>
                        <li>Обідній салатний бар для здорового та різноманітного харчування</li>
                        <li>Своя бездріжджова кондитерська</li>
                        <li>Регулярні оновлення меню, щоб не набридало</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="index-questions" id="index-questions">
        <div class="questions-inner-wrapper">
            <h2>Часті питання </h2>
            <div class="question-group">
                <div class="question">
                    <h4 class="question-title" data-sing="+">
                        Чим відрізняється школа повного дня від школи неповного дня?
                    </h4>
                    <div class="question-answer">
                        <p>
                            У школі повного дня дитина проводить весь день: з 8:00 до 19:00. Звісно, весь цей час — це
                            не
                            тільки уроки. Спочатку — сніданок і зустріч, щоб налаштуватися на день; далі — загальні
                            уроки,
                            перерва на руханку і бранч, знову уроки, обід і відпочинок, робота над проєктами,
                            консультації
                            зі спеціалістами, самопідготовка; потім заняття на факультативах і в гуртках, підвечірок і
                            рефлексія дня. Розклад спеціально розроблено так, щоб врахувати біоритми дитячого організму,
                            а
                            також збалансувати інтелектуальну та фізичну активність, релакс і заняття мистецтвом,
                            навчання
                            та гру. Ви знаходитеся на сайті цієї школи. <br>
                            У школі неповного дня дитина перебуває з 8:00 до 16:00. Це більш сконцентрований час для
                            проведення навчальних занять, згідно освітнього плану школи. Упродовж дня також передбачено
                            сніданок, обід та прогулянку і додаткові заняття, які є авторськими розробками нашого
                            педагогічного колективу. Діти не мають покрокової тьюторської підтримки, але знаходяться під
                            постійним супроводом класовода і вихователя. <a href="//inventorschool.org.ua/"
                                                                            target="_blank">Детальніше про школу
                                неповного дня
                                тут</a>
                        </p>
                    </div>
                </div>
                <div class="question">
                    <h4 class="question-title" data-sing="+">
                        А що з домашніми завданнями?
                    </h4>
                    <div class="question-answer">
                        <p>
                            Усі завдання діти виконують у школі, а додому приходять відпочивати і проводити час із
                            батьками
                            ☺️
                        </p>
                    </div>
                </div>
                <div class="question">
                    <h4 class="question-title" data-sing="+">
                        Чи зможе дитина навчатися дистанційно?
                    </h4>
                    <div class="question-answer">
                        <p>
                            Звісно! Якщо дитина захворіла, поїхала з батьками за кордон або стався якийсь форс-мажор,
                            вона
                            зможе
                            долучитися до всіх навчальних процесів у класі дистанційно. Вартість навчального місяця при
                            цьому не
                            змінюється.
                        </p>
                    </div>
                </div>
                <div class="question">
                    <h4 class="question-title" data-sing="+">
                        Що входить у вартість навчання?
                    </h4>
                    <div class="question-answer">
                        <ul>
                            <li>Повний супровід дитини у школі з 8:00 до 19:00</li>
                            <li>Двічі на тиждень — участь у двох гуртках, клубах або студіях на ваш вибір</li>
                            <li>Екскурсійні поїздки та майстер-класи</li>
                        </ul>
                        <p>
                            А от харчування доведеться оплачувати окремо, оскільки вартість залежатиме від вибраного
                            меню.
                        </p>
                    </div>
                </div>
                <div class="question">
                    <h4 class="question-title" data-sing="+">
                        Чи обов’язково сплачувати всю суму одразу?
                    </h4>
                    <div class="question-answer">
                        <p>
                            Ні, ви можете оплачувати навчання раз на місяць, раз на семестр або відразу за весь
                            навчальний
                            рік
                            (тоді ми зробимо вам знижку 5%). У нашому навчальному році завжди 9 календарних місяців (з
                            вересня
                            по травень) — незалежно від карантину, вихідних, святкових днів і канікул. Ми також не
                            можемо
                            відняти дні, які дитина пропустила через хворобу, тому надаємо онлайновий доступ до занять і
                            завжди
                            допомагаємо надолужити пропущене.
                        </p>
                    </div>
                </div>
                <div class="question">
                    <h4 class="question-title" data-sing="+">
                        Чому перший навчальний місяць дорожчий за інші?
                    </h4>
                    <div class="question-answer">
                        <p>
                            Тому що в нього закладено закупку всіх потрібних матеріалів і навчальних засобів для дитини
                            на
                            весь
                            рік: книжок, зошитів, канцелярії, матеріалів для творчості та проєктної роботи.
                        </p>
                    </div>
                </div>
                <div class="question">
                    <h4 class="question-title" data-sing="+">
                        Чи є можливість якось зменшити суму оплати?
                    </h4>
                    <div class="question-answer">
                        <p>
                            Так. У Податковому кодексі України є поняття податкової знижки. Завдяки їй ви зможете
                            компенсувати
                            до 18% вартості навчання. Щоб отримати податкову знижку, вам треба подати декларацію та
                            пакет
                            документів до податкової служби за місцем реєстрації. Це необхідно зробити до кінця
                            календарного
                            року, наступного за звітним. Компенсація від держави має надійти впродовж 60 днів.
                        </p>
                    </div>
                </div>
                <div class="question">
                    <h4 class="question-title" data-sing="+">
                        Чи є якісь гранти на навчання?
                    </h4>
                    <div class="question-answer">
                        <p>
                            Так! Дитина може отримати грант на навчання за надзвичайні успіхи у вивченні різних
                            дисциплін та
                            за інноваційне мислення, втілене у стартапах, проєктній чи будь-якій іншій роботі, що має
                            позитивний соціальний вплив або сприяє розв’язанню проблем і формуванню ідей стратегічного
                            характеру. Щоб отримати грант, дитина має подати до адміністрації школи заяву та
                            мотиваційний
                            есей, а також підтвердити свої результати відповідними матеріалами.
                        </p>
                    </div>
                </div>
                <div class="question">
                    <h4 class="question-title" data-sing="+">
                        Чи є якісь програми для гоумскулерів чи учнів інших шкіл?
                    </h4>
                    <div class="question-answer">
                        <p>
                            Так. Inventor — це ціла система навчальних закладів, тож ми можемо допомагати дітям та їхнім
                            батькам у різних форматах. От які є варіанти:
                        </p>
                        <ul>
                            <li>Визначаємо навчальну траєкторію гоумскулерів на рік: проводимо тестування знань, умінь і
                                навичок з різних освітніх напрямів та окремих предметів. Пропонуємо додаткові навчальні
                                курси, що допоможуть розвинути бажані скіли
                            </li>
                            <li>У нас є заочна програма, що дає змогу окремо навчатися у класах з математики, фізики,
                                хімії,
                                біології, географії, підприємництва, літератури, української, англійської чи німецької
                                мови,
                                зарубіжної літератури. До шкільного класу також можна під’єднатися онлайн
                            </li>
                            <li>Можна стати учнем школи, щоб здобути американську освіту й отримати диплом державного
                                зразка
                                США
                            </li>
                            <li>Можна вивчати STEM-предмети та ходити на майстер-класи до студій після звичайного
                                шкільного
                                дня та на вихідних
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="index-offer2">
        <div class="offer2-inner">
            <img src="<?php echo get_theme_file_uri(); ?>/img/index-offer2-pre.svg" alt="offer" class="pre-offer2-img">
            <div class="offer2-content">
                <div class="offer2-item">
                    <h2>
                        Відповімо на всі ваші запитання
                    </h2>
                    <p>
                        Залиште ім’я та номер телефону і вкажіть бажаний спосіб зв’язку.
                        <br><br>
                        Наші методисти зв’яжуться з вами найближчим часом.
                    </p>
                </div>
                <div class="offer2-item">
                    <form class="offer-form" name="offer-form2">
                        <input type="text" name="name" placeholder="Як до вас звертатися?" required>
                        <input type="tel" name="phone" placeholder="Ваш номер телефону" required>
                        <input type="email" name="email" placeholder="Ваша електронна адреса" required>
                        <select name="contactType" style="display:none;">
                            <!--<option value="" selected disabled>Зручний канал зв’язку</option>-->
                            <option value="Телефон" selected>Телефон</option>
                            <option value="Email">Email</option>
                        </select>
                        <div class="submit-group">
                            <input type="submit" name="submit" value="Зв’яжіться зі мною">
                        </div>
                    </form>
                </div>
            </div>
            <img src="<?php echo get_theme_file_uri(); ?>/img/index-offer2-after.svg" alt="offer"
                 class="after-offer2-img">
        </div>
    </div>

    <!-- Modal -->
    <!--help1-->
    <div class="modal fade modal-help" id="help1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2>
                        <span class="modal-emoji-mobile">
                        📇🗂
                        <br>
                        </span>
                        Індивідуальний <br> навчальний план</h2>
                    <p>
                        Більше ніяких «шкільних програм для всіх». Ми розробляємо індивідуальний навчальний план для
                        кожної
                        дитини, щоб ніхто просто так не «відсиджував навчальні години» і щоб загальне шкільне навчання
                        стало
                        персоналізованим.
                        <br><br>
                        <strong>Як ми це робимо:</strong>використовуємо систему професійних тестів і завдань, що
                        допомагають
                        зрозуміти, як натепер функціонує організм дитини. Це показники концентрації уваги, сприйняття
                        інформації, пам’яті, мислення та координації. Далі ми визначаємо зони уваги, щоб сфокусуватися
                        на
                        тому, що поки що слабше, і підтримати те, що вже добре розвинено. Так ми розробляємо
                        персоналізовану
                        стратегію навчання дитини — індивідуальний план навчання. Він охоплює класичні предмети та
                        індивідуальні заняття, де дитина працює з комп’ютером, тьютором або психологом.
                        <br><br>
                        <strong>Що в результаті:</strong> коли за допомогою тестів визначили сильні та поки що слабкі
                        сторони особистості дитини, ми вже знаємо, на що треба звернути посилену увагу. Тепер ми можемо
                        скласти її освітню програму так, щоб попрацювати з нею над поки що слабкими моментами й утримати
                        сильні. Так ми фактично знаходимо спосіб передавати дитині потрібні знання і навички так, щоб
                        вона
                        максимально їх засвоювала.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--End of help #-->
    <!--help2-->
    <div class="modal fade modal-help" id="help2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2>
                        <span class="modal-emoji-mobile">
                        🕹🔭
                        <br>
                        </span>
                        Проєктний <br> формат навчання</h2>
                    <p>
                        Стара шкільна система поділяла знання на дисципліни й розглядала все окремо від життєвого
                        контексту
                        — як абстрактні науки. Ми ж вважаємо, що, вивчаючи ці науки, дуже важливо співвідносити їх із
                        життям, з практикою. Щоб дитина не зубрила теоретичну інформацію, а могла її зрозуміти і
                        використати
                        потім у житті, ми працюємо з проєктним форматом навчання. Діти вивчають теми через командні та
                        персональні наукові проєкти, де вчаться розв’язувати проблеми в комплексі та на практиці.
                        <br><br>
                        <strong>Як ми це робимо:</strong> діти досліджують теми й пізнають нове через участь у проєктах.
                        Кожен проєкт — це інтегроване прикладне завдання. Щоб розв’язати його, дітям доведеться
                        поєднувати
                        знання з різних наук, працювати в команді, експериментувати та здобувати нову інформацію. Вони
                        проводять соціальні опитування, виконують STEM-проєкти, творчі та практичні завдання,
                        розробляють
                        симуляції, освітні ігри та інтерактивні карти, створюють презентації, відео та сайти. Усе
                        максимально наближено до життя: де це буде корисно, що робити, якщо ось так чи так, які професії
                        із
                        цим пов’язані, як отримати інший результат.
                        <br><br>
                        <strong>Що в результаті:</strong> усе вивчене в школі стає інструкцією для життя, а не
                        забувається
                        як те, що не мало прикладної цінності. Діти вчаться розуміти причини та наслідки, бачити
                        зв’язки,
                        планувати роботу, аналізувати різні думки, прогнозувати результати та презентувати висновки. До
                        того
                        ж кожен формує своє власне ставлення до теми, що вивчають, і може його аргументувати. Стає
                        зрозуміло, які проблеми потребують наукових проривів, як поліпшувати наявні системи, як
                        використовувати креативне мислення для вирішення нагальних і практичних завдань у житті.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--End of help #-->
    <!--help3-->
    <div class="modal fade modal-help" id="help3">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2>
                        <span class="modal-emoji-mobile">
                        👀✋🎒
                        <br>
                        </span>
                        Розвиток <br> cамостійності</h2>
                    <p>
                        Дитині цікавіше вчитися, коли вона сама визначає свою мету, а не просто робить те, що їй сказали
                        батьки або вчителі. Тому ми заохочуємо у дітей самостійність і самодостатність.
                        <br><br>
                        <strong>Як ми це робимо:</strong> індивідуальний навчальний план складено так, щоб дати змогу
                        дитині
                        бути в міру самостійною. У ньому є робочі тижневі плани, модулі, робота за проєктами та
                        визначені
                        консультаційні дні. За допомогою всього цього дитина зможе сама розподіляти свій час і ресурс, а
                        також вибрати спосіб надолужити щось пропущене. Так діти вчаться відповідальності, усвідомленого
                        керування собою та адаптації. Усі ці навички знадобляться в дорослому житті.
                        <br><br>
                        <strong>Що в результаті:</strong>
                        <br><br>
                    </p>
                    <ul>
                        <li>Дитина вміє самостійно облаштовувати своє життя</li>
                        <li>Розуміє свої потреби і можливості</li>
                        <li>Має мету і розуміє, що потрібно для її досягнення</li>
                        <li>Самостійно робить вибір і ухвалює незалежні рішення</li>
                        <li>Не потребує постійного схвалення та підтвердження</li>
                        <li>Здатна відстоювати свої інтереси з повагою до інших</li>
                        <li>У разі потреби може звернутися по допомогу</li>
                        <li>Дитину не лякають експерименти, вона відкрита до світу</li>
                        <li>Ухвалює незалежні рішення і може дозволити собі не брати участь у чомусь колективному</li>
                    </ul>
                    <p>
                        <br>
                        Так дитина стає особистістю, до якої тягнуться інші.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--End of help #-->
    <!--help4-->
    <div class="modal fade modal-help" id="help4">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2>
                        <span class="modal-emoji-mobile">
                        🌄🗒
                        <br>
                        </span>
                        Портфоліо</h2>
                    <p>
                        <strong>Ми фіксуємо всі надбання і досягнення дитини протягом навчання та складаємо з них
                            персональну базу даних по роках. Виходить повний і детальний опис прогресу дитини.
                            <br><br>
                            Що входить до портфоліо:</strong>
                        <br><br>
                    </p>
                    <ul>
                        <li>Власні проєкти, стартапи</li>
                        <li>Участь дитини в командних проєктах: суть проєкту, результат роботи і роль дитини</li>
                        <li>Досягнення з різних предметів: участь у конкурсах, олімпіадах, спортивні досягнення</li>
                        <li>Вміння, які дитина здобула під час навчання: ораторське мистецтво, теорія розв’язання
                            винахідницьких завдань, нові програми тощо
                        </li>
                        <li>Результати роботи з різних предметів: найкращі есеї, винаходи, додатково пройдені курси тощо
                        </li>
                        <li>Результати тестувань різних видів інтелекту, що добре характеризують дитину</li>
                    </ul>
                    <p>
                        <br>
                        <strong>Що в результаті:</strong> школа і батьки бачать усе, що опанувала дитина та що є для неї
                        цінністю. Ми фіксуємо навіть те, що може не мати прямого чи вагомого впливу на навчання, проте є
                        важливим для самої дитини: переглянуті фільми, прочитані книжки і враження від них, участь у
                        виставах і благодійних акціях, громадська активність, розважальні та пізнавальні події у фото і
                        відео.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--End of help #-->
    <!--help5-->
    <div class="modal fade modal-help" id="help5">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2>
                        <span class="modal-emoji-mobile">
                        🔬🛠&🤝🗣
                        <br>
                        </span>
                        Гард- і софт-скіли</h2>
                    <p>
                        Ми готуємо дитину до завтрашнього світу. Тому нарівні з класичними предметами ми тренуємо
                        навички та
                        якості, що допоможуть дитині ліпше соціалізуватися, будувати стосунки, мислити критично та
                        самостійно справлятися зі стресами. Ми балансуємо гард- і софт-скіли.
                        <br><br>
                        <strong>Як ми це робимо:</strong> до гард-скілів належать навички, які можна виміряти знаннями в
                        певній сфері: математиці, фізиці, хімії, історії тощо. Це класичні предмети, про які варто мати
                        уявлення кожній людині. Натомість софт-скіли — це універсальні вміння, які ще називають
                        людськими
                        якостями: комунікабельність, креативність, критичне мислення, емоційний інтелект і емпатія,
                        адаптація до різних обставин, побудова стосунків, ораторське мистецтво і здатність презентувати
                        себе
                        та свої проєкти, навички сторітелінгу та ділового листування, здатність запобігати вигоранню та
                        самостійно боротися зі стресами, методики ухвалення рішень і самомотивації.
                        <br><br>
                        <strong>Що в результаті:</strong> на відміну від звичайної школи, ми не вважаємо, що класичні
                        предмети — це все, що знадобиться дитині в житті. Ба більше, ми впевнені, що успішність людини
                        напряму залежить від того, наскільки вона здатна опановувати себе і якісно комунікувати з
                        іншими. Це
                        точно не менш, а може, й більш важливі речі для розвитку і комфорту в житті.
                    </p>

                </div>
            </div>
        </div>
    </div>
    <!--End of help #-->
    <!--help6-->
    <div class="modal fade modal-help" id="help6">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2>
                        <span class="modal-emoji-mobile">
                        🎓🌍
                        <br>
                        </span>
                        Профорієнтація та підготовка до вступу у ВНЗ</h2>
                    <p>
                        Ми допомагаємо дитині виявити свої здібності вже з першого класу. Щоб коли в старших класах
                        постане
                        питання, чим займатися в житті далі, дитина не розгубилася, а батькам не довелося гарячково щось
                        вигадувати.
                        <br><br>
                        <strong>Крок 1. Відстежуємо світовий ринок праці та співпрацюємо з міжнародними
                            школами</strong><br>
                        Щоб бачити тенденції, сфери і спеціальності, що матимуть найбільший попит, ми уважно стежимо за
                        ринком праці у світі. Ми також взаємодіємо з міжнародними партнерськими школами з усіх країн
                        світу
                        задля спільної роботи над проєктами, вивчення мови і культурного обміну.
                        <br><br>
                        <strong>Крок 2. Даємо дітям навички в галузі науки і технологій</strong> <br>
                        Власне, це саме ті навички, що допоможуть їм реалізувати свої мрії та стати успішними у світі. У
                        молодшій школі наше завдання — показати розмаїття світу і занять у ньому, спонукати дитину
                        проявити
                        свої прагнення і таланти. Далі ми проводимо спеціальні тести, що визначають інтереси, здібності
                        та
                        цінності дитини. Потім за допомогою професійного менторства, програм-симуляцій, корпоративних
                        ігор і
                        вебмоделювання ми обережно і поступово готуємо дитину до дорослого світу.
                        <br><br>
                        <strong>Що в результаті:</strong> учні добре розуміють свої цілі і шляхи їх досягнення, вміють
                        презентувати себе та вбудовуватися в реальний світ. До закінчення школи вони вміють складати
                        резюме
                        і мотиваційні листи, розуміють, як проходити співбесіди, тестування, як сприймати зворотний
                        зв’язок,
                        аналізувати власні бюджети, економити та розумно інвестувати у своє навчання. Учні старших
                        класів
                        спокійно орієнтуються у виборі ВНЗ: розуміють особливості ВНЗ в Україні та світі, можливості
                        побудови особистого шляху в кар’єрі та житті, культурні, фінансові, логістичні умови навчання за
                        кордоном. Кожен учень матиме персональну підтримку в підготовці плану до вступу в обрані ВНЗ.
                    </p>

                </div>
            </div>
        </div>
    </div>
    <!--End of help #-->
    <!--help7-->
    <div class="modal fade modal-help" id="help7">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2>
                        <span class="modal-emoji-mobile">
                        🚀💼
                        <br>
                        </span>
                        Випускний проєкт = <br> перше доросле резюме</h2>
                    <p>
                        Ближче до закінчення навчання тьютори допомагають дітям проаналізувати свої результати за весь
                        період перебування в школі.
                        <br><br>
                        <strong>Як ми це робимо:</strong> вся інформація та матеріали зберігаються в портфоліо учня.
                        Тьютор
                        разом з учнем вибирають те, що найкраще характеризує дитину як особистість і молодого фахівця у
                        сферах, що їй найцікавіші. Далі за допомогою інтерактивних програм випускник готує своє перше
                        доросле резюме та презентацію про себе: знання, уміння, навички, сфери інтересів, досягнення,
                        стартапи тощо. Цю презентацію він чи вона представить у травні на відкритому випускному заході,
                        перед тим розмістивши її в шкільній хмарі, щоб показати всій школі.
                        <br><br>
                        <strong>Що в результаті:</strong> у дитини є чітке розуміння своїх досягнень і здібностей, сфери
                        інтересів та подальших кроків у житті. Вона вміє презентувати себе іншим людям, відкрито та з
                        гідністю говорить про свої успіхи. Випускний проєкт також можна подавати разом з документами до
                        українських чи світових ВНЗ або як додаткову перевагу для стажування в компаніях-партнерах.
                    </p>

                </div>
            </div>
        </div>
    </div>
    <!--End of help #-->

    <script>
        //manual trigger bootstrap modals
        let bsIndexModalHelp1 = new bootstrap.Modal(document.getElementById('help1'));
        let bsIndexModalHelp2 = new bootstrap.Modal(document.getElementById('help2'));
        let bsIndexModalHelp3 = new bootstrap.Modal(document.getElementById('help3'));
        let bsIndexModalHelp4 = new bootstrap.Modal(document.getElementById('help4'));
        let bsIndexModalHelp5 = new bootstrap.Modal(document.getElementById('help5'));
        let bsIndexModalHelp6 = new bootstrap.Modal(document.getElementById('help6'));
        let bsIndexModalHelp7 = new bootstrap.Modal(document.getElementById('help7'));

        try {
            //on mobile screen check if offer2 input is in on focus/blur -> hide index_screen1 reg btn
            if (window.innerWidth <= 768) {
                let screen1RegBtn = document.querySelector('.reg a'),
                    inputOffer2 = document.querySelectorAll('form[name="offer-form2"] input');

                inputOffer2.forEach(item => {
                    item.onfocus = function () {
                        screen1RegBtn.style.display = 'none';
                    };
                    item.onblur = function () {
                        screen1RegBtn.style.display = 'block';
                    };
                })
            }
        } catch (e) {
            console.log(e);
        }
    </script>

	<?php
}
?>


<?php
get_footer();
?>
