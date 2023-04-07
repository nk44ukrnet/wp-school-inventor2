let siteLang = window.location.href,
    thxUrl = '',
    siteLangEnBool = false;
if (siteLang.indexOf('/en/') == -1) {
    thxUrl = 'https://school.inventorschool.org.ua/thanks/';
    siteLangEnBool = false;
} else {
    thxUrl = 'https://school.inventorschool.org.ua/en/thanks-2/';
    siteLangEnBool = true;
}

let mobileWidth = 768;

//change menu "Івенти" name on screen size < 768;
try {
    if (window.innerWidth < mobileWidth) {
        document.querySelector('.page-item-474 a').innerHTML = `День відкритих дверей`;
    }
} catch (e) {
    console.log(e);
}

try {
    //navigation additional li items
    let detectNavUl = document.querySelector('.logo_nav nav ul');
    if (window.innerWidth < 768) {
        if (!siteLangEnBool) {
            detectNavUl.insertAdjacentHTML('beforeend', `
        <li class="mob_only"><a href="#!">Увійти в особистий кабінет</a></li>
        <li class="mob_only"><a href="tel:+380678285774">+38 (067) 828-57-74</a></li>
        <li class="mob_only"><a href="tel:+380503805503">+38 (050) 380-55-03</a></li>
        `);
        } else {
            detectNavUl.insertAdjacentHTML('beforeend', `
        <li class="mob_only"><a href="#!">Log in</a></li>
        <li class="mob_only"><a href="tel:+380444904060">+38 (044) 490-40-60</a></li>
        <li class="mob_only"><a href="tel:+380503805503">+38 (050) 380-55-03</a></li>
        `);
        }
    }
} catch (e) {
    console.log(e);
}

try {
//navigation trigger
    let myNav = document.querySelector('.mynav'),
        navTrigger = document.getElementById('mobMenuTrigger');
    window.addEventListener('click', function (e) {
        myNav.classList.remove('active');
    });
    navTrigger.addEventListener('click', function (e) {
        e.stopPropagation();
        myNav.classList.toggle('active');
    });
    myNav.addEventListener('click', function (e) {
        e.stopPropagation();
    })

} catch (e) {
    console.log(e);
}


try {
    //index FAQ
    let questionTitle = document.querySelectorAll('.question-title'),
        questionAnswer = document.querySelectorAll('.question-answer');

    for (let i = 0; i < questionTitle.length; i++) {
        questionTitle[i].addEventListener('click', function () {
            if (questionTitle[i].classList.contains('question-answer-active')) {
                questionTitle[i].classList.remove('question-answer-active');
                questionTitle[i].setAttribute('data-sing', '+');
                questionAnswer[i].classList.remove('question-answer-active');
            } else {
                questionTitle[i].classList.add('question-answer-active');
                questionTitle[i].setAttribute('data-sing', '-');
                questionAnswer[i].classList.add('question-answer-active');
            }
        });
    }

} catch (e) {
    console.log(e);
}


try {
    //current year for footer
    let currentYear = document.getElementById('currentYear');
    currentYear.innerHTML = `${new Date().getFullYear()}`;
} catch (e) {
    console.log(e);
}

//grade + - in mobile version
function gradeExpandCollapse(itemContainerClass, btnTriggerClass, activeClass) {
    let itemContainer = document.querySelectorAll(`.${itemContainerClass}`),
        itemTrigger = document.querySelectorAll(`.${btnTriggerClass}`);
    itemTrigger.forEach((item, idx) => {
        item.addEventListener('click', function () {
            let currentSign = item.getAttribute('data-sign');
            if (currentSign == '-') {
                itemContainer[idx].classList.remove(activeClass);
                item.setAttribute('data-sign', '+');
            } else {
                itemContainer[idx].classList.add(activeClass);
                item.setAttribute('data-sign', '-');
            }
        });
    })
}

try {
    //grade 1-4 mobile + - function for grade1-4-process-container-item. active class "grade-active"
    gradeExpandCollapse('grade1-4-process-container-item', 'grade1-4-process-container-item-trigger', 'grade-active');
} catch (e) {
    console.log(e);
}
try {
    //grade 5-12 project expand + -
    gradeExpandCollapse('grade1-5-project-item-extra', 'grade1-5-project-item-trigger', 'grade1-5-project-item-extra-active');
} catch (e) {
    console.log(e);
}
try {
    //preschool expand + -
    if (window.innerWidth <= 1075) { //look at _preschool.less .mobile-sized(1075px, { for .preschool_principles
        gradeExpandCollapse('preschool_principles-item', 'preschool_principles-item', 'preschool_principles-item-active');
    }
} catch (e) {
    console.log(e);
}
try {
    //studios1 +- on mobile studios1_list_cont
    gradeExpandCollapse('list_item', 'list_item', 'list_item_active');
} catch (e) {
    console.log(e);
}
try {
    //studios3 +- on mobile studios3-list-item-active
    gradeExpandCollapse('studios3-list-item', 'studios3-list-item', 'studios3-list-item-active');
} catch (e) {
    console.log(e);
}


//job page {vacancy}
//Expand/collapse vacancy
try {
    let vacContainer = document.getElementById('vacHolder'),
        detailsVac = vacContainer.querySelectorAll('.details-vac'),
        vacAbsPos = vacContainer.querySelectorAll('.item-abs'),
        vacClose = vacContainer.querySelectorAll('.details-vac-close'),
        joinVac = vacContainer.querySelectorAll('.join-vac');

    //set input popupvalue ~ data-attr form joinVac
    joinVac.forEach((item, idx) => {
        item.addEventListener('click', function () {
            let dataVacancyName = item.getAttribute('data-vac-name'),
                vacNameInpId = document.getElementById('vacIdinp');
            vacNameInpId.value = dataVacancyName;
        });

    });

    detailsVac.forEach((item, idx) => {
        item.addEventListener('click', function () {
            closeVacDetails();
            vacAbsPos[idx].classList.toggle('item-abs-active');
            if (item.getAttribute('data-sign') == '+') {
                item.dataset.sign = '-';
                vacAbsPos[idx].classList.add('item-abs-active');
            } else {
                item.dataset.sign = '+';
            }
        });
    });

    function closeVacDetails() {
        for (let posAbs of vacAbsPos) {
            posAbs.classList.remove('item-abs-active');
        }
        for (let detVac of detailsVac) {
            detVac.dataset.sign = '+';
        }
    }

    vacClose.forEach(item => {
        item.addEventListener('click', closeVacDetails);
    });

    if (window.innerWidth < 1168) {
        detailsVac[detailsVac.length - 1].click();
    }

} catch (e) {
    console.log(e);
}

//LightGallery
try {
    //index-ua bunch of photos
    lightGallery(document.getElementById('i-grid-update'));
    console.log('light gallery active')
} catch (e) {
    console.log('lightgallery catch error')
    console.log(e);
}
//preschool gallery1
try {
    lightGallery(document.getElementById('preschoolGallery1'));
} catch (e) {
    console.log(e);
}

//swiper index page
try {
    let swiper = new Swiper(".mySwiper-index", {
        slidesPerView: 2.5,
        spaceBetween: 40,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1.2,
                spaceBetween: 20
            },
            // when window width is >= 640px
            1024: {
                slidesPerView: 2.5,
                spaceBetween: 40
            }
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: true,
        },
    });

    let currentSwiper = document.querySelector('.mySwiper-index');
    currentSwiper.addEventListener('mouseenter', () => {
        swiper.autoplay.stop();

    })
    currentSwiper.addEventListener('mouseleave', () => {
        swiper.autoplay.start();
    })
} catch (e) {
    console.log(e);
}

//swiper camp2 page
try {
    let swiper = new Swiper(".camp2swiper", {
        slidesPerView: 5,
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1.2,
                spaceBetween: 20
            },
            // when window width is >= 640px
            920: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            1500: {
                slidesPerView: 5,
                spaceBetween: 20
            }
        },
    });

    let currentSwiper = document.querySelector('.mySwiper-index');
    currentSwiper.addEventListener('mouseenter', () => {
        swiper.autoplay.stop();

    })
    currentSwiper.addEventListener('mouseleave', () => {
        swiper.autoplay.start();
    })
} catch (e) {
    console.log(e);
}

//camp2 gallery
try {
    if (document.getElementById('camp2gallery1')) {
        lightGallery(document.getElementById('camp2gallery1'));
    }
} catch (e) {
    console.log('camp2gallery ', e);
}

//post via fetch
//function post via fetch
async function postViaFetch(url, formName, redirectURL = false) {
    const formData = document.forms[formName],
        inputSubmit = formData.querySelector('input[type="submit"]');
    if (inputSubmit.disabled === false) {
        const inputSubmitVal = inputSubmit.value;
        inputSubmit.disabled = true;
        inputSubmit.value = 'Loading ...';
        setTimeout(() => {
            inputSubmit.value = inputSubmitVal;
            inputSubmit.disabled = false
        }, 10000)
    }
    await fetch(url, {method: 'POST', body: new FormData(formData)})
        .then(res => {
            if (res.ok && (res.status >= 200 && res.status < 300)) {
                return res;
            } else {
                throw new Error();
            }
        })
        .then(res => {
            if (redirectURL) {
                window.location.href = redirectURL;
            }
        })
        .catch(err => alert('SERVER ERROR!'));
}

//listeners for forms
try {
    //offer form1
    document.forms['offer-form1'].addEventListener('submit', function (e) {
        e.preventDefault();
        //postViaFetch('/php/offer.php', 'offer-form1');
        postViaFetch('https://script.google.com/macros/s/AKfycbyEBiStv-_AaZx6pIW4UFsXosyHmqo6jwPn1bB1N6lHaVGxt3wr/exec', 'offer-form1', thxUrl);
    });
} catch (e) {
    console.log(e);
}
//
try {
    //offerform2
    document.forms['offer-form2'].addEventListener('submit', function (e) {
        e.preventDefault();
        //postViaFetch('/php/offer.php', 'offer-form2');
        postViaFetch('https://script.google.com/macros/s/AKfycbyEBiStv-_AaZx6pIW4UFsXosyHmqo6jwPn1bB1N6lHaVGxt3wr/exec', 'offer-form2', thxUrl);
    });
} catch (e) {
    console.log(e);
}
//
try {
    //offerformpopup
    document.forms['offer-popup'].addEventListener('submit', function (e) {
        e.preventDefault();
        //postViaFetch('/php/offer.php', 'offer-popup');
        postViaFetch('https://script.google.com/macros/s/AKfycbyEBiStv-_AaZx6pIW4UFsXosyHmqo6jwPn1bB1N6lHaVGxt3wr/exec', 'offer-popup', thxUrl);
    });
} catch (e) {
    console.log(e);
}
//
try {
//offer form [entry]
    document.forms['offer-form-entry'].addEventListener('submit', function (e) {
        e.preventDefault();
        //postViaFetch('/php/offer.php', 'offer-form-entry');
        postViaFetch('https://script.google.com/macros/s/AKfycbyEBiStv-_AaZx6pIW4UFsXosyHmqo6jwPn1bB1N6lHaVGxt3wr/exec', 'offer-form-entry', thxUrl);
    });
} catch (e) {
    console.log(e);
}

try {
    //preschool offer1
    document.forms['preschoolOffer1'].addEventListener('submit', function (e) {
        e.preventDefault();
        postViaFetch('https://script.google.com/macros/s/AKfycbyEBiStv-_AaZx6pIW4UFsXosyHmqo6jwPn1bB1N6lHaVGxt3wr/exec', 'preschoolOffer1', thxUrl);
    });
    //preschool offer2
    document.forms['preschoolOffer2'].addEventListener('submit', function (e) {
        e.preventDefault();
        postViaFetch('https://script.google.com/macros/s/AKfycbyEBiStv-_AaZx6pIW4UFsXosyHmqo6jwPn1bB1N6lHaVGxt3wr/exec', 'preschoolOffer2', thxUrl);
    });
} catch (e) {
    console.log(e);
}

try {
    //event offer {eventOffer}
    document.forms['eventOffer'].addEventListener('submit', function (e) {
        e.preventDefault();
        // postViaFetch('/php/event.php', 'eventOffer');
        postViaFetch(
            'https://script.google.com/macros/s/AKfycbyYntl4Zsijw8wfhbNVLkKRIajVJLxvD80IeA8gMe6R0AM_UeJJ4fjDm7u8R9x20AvY/exec',
            'eventOffer',
            '/thanks-event'
        );
    });
    //eventOffer-popup
    document.forms['eventOffer-popup'].addEventListener('submit', function (e) {
        e.preventDefault();
        // postViaFetch('/php/event.php', 'eventOffer-popup');
        postViaFetch(
            'https://script.google.com/macros/s/AKfycbyYntl4Zsijw8wfhbNVLkKRIajVJLxvD80IeA8gMe6R0AM_UeJJ4fjDm7u8R9x20AvY/exec',
            'eventOffer-popup',
            '/thanks-event'
        );
    });
} catch (e) {
    console.log(e);
}

try {
    //event2 offer {eventOffer}
    document.forms['event2Offer'].addEventListener('submit', function (e) {
        e.preventDefault();
        // postViaFetch('/php/event.php', 'eventOffer');
        postViaFetch(
            'https://script.google.com/macros/s/AKfycbyYntl4Zsijw8wfhbNVLkKRIajVJLxvD80IeA8gMe6R0AM_UeJJ4fjDm7u8R9x20AvY/exec',
            'event2Offer',
            'https://secure.wayforpay.com/donate/inventorevent'
        );
    });
    //event2Offer-popup
    document.forms['event2Offer-popup'].addEventListener('submit', function (e) {
        e.preventDefault();
        // postViaFetch('/php/event.php', 'eventOffer-popup');
        postViaFetch(
            'https://script.google.com/macros/s/AKfycbyYntl4Zsijw8wfhbNVLkKRIajVJLxvD80IeA8gMe6R0AM_UeJJ4fjDm7u8R9x20AvY/exec',
            'event2Offer-popup',
            'https://secure.wayforpay.com/donate/inventorevent'
        );
    });
} catch (e) {
    console.log(e);
}

try {
    //CAMP offer POP-up {camp-popup}
    document.forms['camp-popup'].addEventListener('submit', function (e) {
        e.preventDefault();
        postViaFetch('https://script.google.com/macros/s/AKfycbxOC78bphCZbIdFh4HUfZZ_qA2K1CFr88sEmoyaJ5SNUuWzxegNlEv-aRer29jo9o72/exec', 'camp-popup', '/thanks');
    });
} catch (e) {
    console.log(e);
}

try {
    //CAMP2 offer POP-up {camp2-popup}
    document.forms['camp2-popup'].addEventListener('submit', function (e) {
        e.preventDefault();
        postViaFetch('https://script.google.com/macros/s/AKfycbxUCiOMAPJVkcIfGHLfNHHAWowzJxaZSSEGMYQQYjA-PL2wcm18lM3QZY7o8NzbUOc/exec', 'camp2-popup', '/thanks-camp2');
    });
} catch (e) {
    console.log(e);
}

try {
    //vacancy page {job}
    //popup
    document.forms['vacancyOfferPopUp'].addEventListener('submit', function (e) {
        e.preventDefault();
        postViaFetch('/php/vacancies.php', 'vacancyOfferPopUp', '/thanks-vac');
    });
    //form on page casual/visible
    document.forms['jobOfferFormAsk'].addEventListener('submit', function (e) {
        e.preventDefault();
        postViaFetch('/php/vacancies.php', 'jobOfferFormAsk', '/thanks-vac');
    });
} catch (e) {
    console.log(e);
}

try {
    //studios1 offer form
    document.forms['studios1-form'].addEventListener('submit', function (e) {
        e.preventDefault();
        //postViaFetch('https://script.google.com/macros/s/AKfycbyEBiStv-_AaZx6pIW4UFsXosyHmqo6jwPn1bB1N6lHaVGxt3wr/exec', 'studios1-form', thxUrl); //previous
        postViaFetch('https://script.google.com/macros/s/AKfycbyzr0P5KpZ75CeVH9DHcg4f_DI8ml4ozfmlkbq3ItTdadnCIReKBA30fURPInW5P2Ch0g/exec', 'studios1-form', thxUrl);
    });
} catch (e) {
    console.log(e);
}
try {
    //studios1reg [separate page]
    document.forms['studios1reg'].addEventListener('submit', function (e) {
        e.preventDefault();
        postViaFetch('https://script.google.com/macros/s/AKfycbyzr0P5KpZ75CeVH9DHcg4f_DI8ml4ozfmlkbq3ItTdadnCIReKBA30fURPInW5P2Ch0g/exec', 'studios1reg', '/thanks-strudios1/');
    });
} catch (e) {
    console.log(e);
}
