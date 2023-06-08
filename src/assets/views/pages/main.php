<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#242424" media="(prefers-color-scheme: dark)">
    <meta name="format-detection" content="telephone=no">
    <title>Recado</title>
    <link rel="shortcut icon" href="" type="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>

<body class="body footer-bottom" id="body">
    <?php require_once "assets/views/includes/header.php"; ?>
    <?php require_once "assets/views/includes/terms.php"; ?>
    <?php require_once "assets/views/includes/form.php"; ?>
    <div class="wrapper">
        <main class="main">
            <section class="main-banner">
                <div class="main-banner__info">
                    <h1>Помогаем ресторанам зарабатывать больше</h1>
                    <h4>Удобный сайт с системой управления заказами для доставки и самовывоза. Подключи и ощути рост выручки до 50%</h4>
                    <img class="main-banner__info__img" src="resourses/main.png" alt="main image">
                    <a class="main-banner__launch js-show-form">Запустить бесплатно</a>
                    <a class="main-banner__demo" href="#">Посмотреть демо</a>
                </div>
                <div class="main-banner__img"><img src="resourses/main.png" alt="main image"></div>
            </section>
            <section class="advantages" id="advantages">
                <h2>С rekado вы сможете</h2>
                <div class="advantages__container">
                    <div class="advantages-item">
                        <div class="advantages-item__text">
                            <p class="advantages-item__text__header">Быстро и гибко управлять рестораном</p>
                            <p class="advantages-item__text__info">Описание этой карточки, мало слов, много смысла. Нужно прочесть внимательно. Рим не один день строился.</p>
                        </div>
                        <img src="resourses/advantage_1.png" alt="advantage">
                    </div>
                    <div class="advantages-item">
                        <div class="advantages-item__text">
                            <p class="advantages-item__text__header">Интегрироваться с вашей учетной системой</p>
                            <p class="advantages-item__text__info">Описание этой карточки, мало слов, много смысла. Нужно прочесть внимательно. Рим не один день строился.</p>
                        </div>
                        <img src="resourses/advantage_2.png" alt="advantage">
                    </div>
                    <div class="advantages-item">
                        <div class="advantages-item__text">
                            <p class="advantages-item__text__header">Принимать онлайн оплату любым доступным методом</p>
                            <p class="advantages-item__text__info">Описание этой карточки, мало слов, много смысла. Нужно прочесть внимательно. Рим не один день строился.</p>
                        </div>
                        <img src="resourses/advantage_3.png" alt="advantage">
                    </div>
                    <div class="advantages-item">
                        <div class="advantages-item__text">
                            <p class="advantages-item__text__header">Увеличить<br>скорость<br>работы ресторана</p>
                            <p class="advantages-item__text__info">Описание этой карточки, мало слов, много смысла. Нужно прочесть внимательно. Рим не один день строился.</p>
                        </div>
                        <img src="resourses/advantage_4.png" alt="advantage">
                    </div>
                </div>
            </section>
            <section class="partners" id="partners">
                <div class="partners__first-row">
                    <div class="partner-item">
                        <img src="resourses/iiko.svg" alt="partner">
                    </div>
                    <div class="partner-item">
                        <img src="resourses/1c.png" alt="partner">
                    </div>
                    <div class="partner-item">
                        <img src="resourses/poster.png" alt="partner">
                    </div>
                    <div class="partner-item">
                        <img src="resourses/sbis.png" alt="partner">
                    </div>
                    <div class="partner-item">
                        <img src="resourses/r_keeper.png" alt="partner">
                    </div>
                    <div class="partner-item">
                        <img src="resourses/frontpad.svg" alt="partner">
                    </div>
                    <div class="partner-item">
                        <img src="resourses/sklad.svg" alt="partner">
                    </div>
                </div>
                <div class="partners__second-row">
                    <div class="partner-item">
                        <img src="resourses/r_keeper.png" alt="partner">
                    </div>
                    <div class="partner-item frontpad">
                        <img src="resourses/frontpad.svg" alt="partner">
                    </div>
                    <div class="partner-item">
                        <img src="resourses/sklad.svg" alt="partner">
                    </div>
                </div>
            </section>
            <section class="feedback-form">
                <form class="feedback-form__form validate-form">
                    <h2 class="feedback-form__header">Нет вашей учетной системы?</h2>
                    <p class="feedback-form__text">Отправьте заявку и мы поможем решить этот вопрос</p>
                    <div class="feedback-form__wrapper">
                        <div class="phone-select">
                            <div class="select-container">
                                <select class="select phone-code" id="phone_code" name="phone_code">
                                    <option disabled>+7</option>
                                    <option value="+4">+4</option>
                                    <option value="+5">+5</option>
                                    <option value="+6">+6</option>
                                    <option value="+7" selected>+7</option>
                                    <option value="+8">+8</option>
                                    <option value="+9">+9</option>
                                </select>
                            </div>
                            <div class="feedback-form__input input-container">
                                <input class="validate-input telephone-input" data-type="telephone" name="telephone" type="text" placeholder="+7">
                            </div>
                        </div>
                        <div class="feedback-form__input input-container">
                            <input class="validate-input name-input" data-type="text" type="text" name="name" placeholder="Введите имя">
                        </div>
                        <button type="button" class="feedback-form__btn validate-form-btn">Оставить заявку</button>
                        <p class="feedback-form__subtext">Нажимая на кнопку “Оставить заявку”, я даю согласие <a class="js-show-terms">на обработку персональных данных</a></p>
                    </div>
                </form>
                <img class="feedback-form__img" src="resourses/feedback.png" alt="feedback">
            </section>
            <section class="options" id="options">
                <h2>Кому подойдет rekado</h2>
                <div class="options__scroll-container">
                    <div class="options__container mobile-container">
                        <div class="option-item">
                            <h5 class="option-item__header">Доставкам еды</h5>
                            <p class="option-item__text">Принимать заказы с сайта напрямую во FrontPad, освободить оператора<br>от&nbsp;лишних звонков</p>
                            <img class="option-item__img" src="resourses/option1.svg" alt="option1">
                        </div>
                        <div class="option-item">
                            <h5 class="option-item__header">Доставкам еды</h5>
                            <p class="option-item__text">Принимать заказы с сайта напрямую во FrontPad, освободить оператора от лишних звонков</p>
                            <img class="option-item__img" src="resourses/option1.svg" alt="option1">
                        </div>
                        <div class="option-item">
                            <h5 class="option-item__header">Кафе и ресторанам</h5>
                            <p class="option-item__text">Организовать доставку еды и самовывоз, а также стимулировать бонусами постоянных клиентов</p>
                            <img class="option-item__img" src="resourses/option2.svg" alt="option1">
                        </div>
                        <div class="option-item">
                            <h5 class="option-item__header">Интернет-магазинам</h5>
                            <p class="option-item__text">Подключите наше приложение к сайту на 1С-Битриксе. Каталог, клиенты, заказы синхронизируются</p>
                            <img class="option-item__img" src="resourses/option3.svg" alt="option1">
                        </div>
                        <div class="option-item">
                            <h5 class="option-item__header">Продуктовому ритейлу</h5>
                            <p class="option-item__text">Заменить пластиковую карту на приложение и сайт, где клиенты видят свои бонусы и историю заказов</p>
                            <img class="option-item__img" src="resourses/option4.svg" alt="option1">
                        </div>
                    </div>
                    <div class="options__container desc-container">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="option-item">
                                        <h5 class="option-item__header">Доставкам еды</h5>
                                        <p class="option-item__text">Принимать заказы с сайта напрямую во FrontPad, освободить оператора от лишних звонков</p>
                                        <img class="option-item__img" src="resourses/option1.svg" alt="option1">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="option-item">
                                        <h5 class="option-item__header">Кафе и ресторанам</h5>
                                        <p class="option-item__text">Организовать доставку еды и самовывоз, а также стимулировать бонусами постоянных клиентов</p>
                                        <img class="option-item__img" src="resourses/option2.svg" alt="option1">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="option-item">
                                        <h5 class="option-item__header">Интернет-магазинам</h5>
                                        <p class="option-item__text">Подключите наше приложение к сайту на 1С-Битриксе. Каталог, клиенты, заказы синхронизируются</p>
                                        <img class="option-item__img" src="resourses/option3.svg" alt="option1">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="option-item">
                                        <h5 class="option-item__header">Продуктовому ритейлу</h5>
                                        <p class="option-item__text">Заменить пластиковую карту на приложение и сайт, где клиенты видят свои бонусы и историю заказов</p>
                                        <img class="option-item__img" src="resourses/option4.svg" alt="option1">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="option-item">
                                        <h5 class="option-item__header">Цветочным магазинам</h5>
                                        <p class="option-item__text">Создайте красочную онлайн-витрину с вашими цветами и отпраляйте заказы с доставкой</p>
                                        <img class="option-item__img" src="resourses/option5.svg" alt="option5">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="option-item">
                                        <h5 class="option-item__header">Аптекам</h5>
                                        <p class="option-item__text">Продавайте и доставляйте нерецептурные препараты, и отслеживайте продажи на сайте</p>
                                        <img class="option-item__img" src="resourses/option6.svg" alt="option6">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-scrollbar">
                            </div>
                        </div>
                    </div>
            </section>
            <section class="rates" id="rates">
                <h2 class="rates__header">Тарифы</h2>
                <div class="rates__container">
                    <div class="rate-item">
                        <div class="rate-item__header">
                            <h5 class="rate-item__name">Start</h5>
                            <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M27 6.2117C14 11.2117 22 2.21167 7 6.2117V18.2117C22 14.2117 14 23.2117 27 18.2117V6.2117Z" fill="#8397BF" />
                                <path d="M7 29.2117V18.2117M7 18.2117V6.2117C22 2.21167 14 11.2117 27 6.2117V18.2117C14 23.2117 22 14.2117 7 18.2117Z" stroke="#8397BF" stroke-width="2" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <p class="rate-item__subheader">Идеальный пакет для старта</p>
                        <p class="rate-item__price">3900 ₽</p>
                        <div class="rate-item__part-container">
                            <p class="rate-item__part">и 3,5% с заказа</p>
                            <div class="hint-block desc">
                                <svg class="js-hint-icon" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#8397BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.5 8.21167C13.5 9.0401 12.8284 9.71167 12 9.71167C11.1716 9.71167 10.5 9.0401 10.5 8.21167C10.5 7.38324 11.1716 6.71167 12 6.71167C12.8284 6.71167 13.5 7.38324 13.5 8.21167Z" fill="#8397BF" />
                                    <path d="M12 12.2117V16.2117" stroke="#8397BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="hint-block__content">
                                    <p>Не менее 1490 руб. / месяц, начиная со следующего месяца после подключения</p>
                                </div>
                            </div>
                        </div>
                        <a class="rate-item__btn js-show-form">Подключить <span>сейчас</span></a>
                        <p class="rate-item__advantages-header">
                            Стартовый пакет
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 10L12 16L6 10" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </p>
                        <div class="rate-item__advantages-container">
                            <div class="rate-item__advantage">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#14181F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15 10.2117L11 14.2117L9 12.2117" stroke="#14181F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p>Сайт на поддомене</p>
                            </div>
                            <div class="rate-item__advantage">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#14181F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15 10.2117L11 14.2117L9 12.2117" stroke="#14181F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p>CRM-система</p>
                            </div>
                            <div class="rate-item__advantage">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#14181F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15 10.2117L11 14.2117L9 12.2117" stroke="#14181F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p>Уведомления о новых заказах на e-mail</p>
                            </div>
                            <div class="rate-item__advantage">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#14181F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15 10.2117L11 14.2117L9 12.2117" stroke="#14181F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p>Техподдержка</p>
                            </div>
                        </div>
                    </div>
                    <div class="rate-item favorite">
                        <div class="rate-item__header">
                            <div>
                                <h5 class="rate-item__name">Optima</h5>
                                <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 12.9288V27.2143C4 28.2004 4.69952 28.9999 5.5625 28.9999H9.25C9.80229 28.9999 10.25 28.5522 10.25 27.9999V12.1431C10.25 11.5908 9.80229 11.1431 9.25 11.1431H5.5625C4.69952 11.1431 4 11.9425 4 12.9288Z" fill="#0658F6" />
                                    <path d="M26.1153 12.9283C26.1153 12.9283 23.2911 13.1275 21.4996 12.9283H20.2591C20.2591 12.9283 20.5513 6.49905 20.2591 5.72914C19.9669 4.95837 19.2508 4.28824 19.2508 4.28824C19.2508 4.28824 18.3271 3.73056 17.7508 3.78828C17.2253 3.84091 16.2508 3.28825 15.7508 6.28833C15.2508 9.28841 11.7483 13.6088 11.75 15.2883C11.7517 16.9679 11.8133 24.5353 11.8133 24.5353C11.8133 26.9967 13.5657 28.9995 15.7195 28.9995L24.4826 28.9987C26.2374 28.9987 27.7869 27.6481 28.25 25.715L28.9268 16.9679C28.9756 16.7246 29.0008 16.4753 29.0008 16.2259C29.0008 14.4079 27.7061 12.9283 26.1153 12.9283Z" fill="#0658F6" />
                                </svg>
                            </div>
                            <span>популярный</span>
                        </div>
                        <p class="rate-item__subheader">Комплексное решение</p>
                        <p class="rate-item__price">49 900 ₽</p>
                        <div class="rate-item__part-container">
                            <p class="rate-item__part">и 1,5% с заказа</p>
                            <div class="hint-block desc">
                                <svg class="js-hint-icon" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#8397BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.5 8.21167C13.5 9.0401 12.8284 9.71167 12 9.71167C11.1716 9.71167 10.5 9.0401 10.5 8.21167C10.5 7.38324 11.1716 6.71167 12 6.71167C12.8284 6.71167 13.5 7.38324 13.5 8.21167Z" fill="#8397BF" />
                                    <path d="M12 12.2117V16.2117" stroke="#8397BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="hint-block__content">
                                    <p>Не менее 2900 руб./мессяц, начиная следующего месяца после подключения</p>
                                </div>
                            </div>
                        </div>
                        <a class="rate-item__btn js-show-form">Подключить <span>сейчас</span></a>
                        <p class="rate-item__advantages-header">Больше возможностей
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 10L12 16L6 10" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </p>
                        <div class="rate-item__advantages-container">
                            <div class="rate-item__advantage">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#14181F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15 10.2117L11 14.2117L9 12.2117" stroke="#14181F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p>Собственный домен</p>
                            </div>
                            <div class="rate-item__advantage">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#14181F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15 10.2117L11 14.2117L9 12.2117" stroke="#14181F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p>Интеграция с POS-системой
                                <div class="hint-block desc">
                                    <svg class="js-hint-icon" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#8397BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.5 8.21167C13.5 9.0401 12.8284 9.71167 12 9.71167C11.1716 9.71167 10.5 9.0401 10.5 8.21167C10.5 7.38324 11.1716 6.71167 12 6.71167C12.8284 6.71167 13.5 7.38324 13.5 8.21167Z" fill="#8397BF" />
                                        <path d="M12 12.2117V16.2117" stroke="#8397BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="hint-block__content">
                                        <p>Мы работаем со всеми популярными POS, если для вашей системы нет решения, мы разработаем и интегрируем</p>
                                    </div>
                                </div>
                                </p>
                            </div>
                            <div class="rate-item__advantage">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#14181F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15 10.2117L11 14.2117L9 12.2117" stroke="#14181F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p>Интернет-эквайинг</p>
                            </div>
                            <div class="rate-item__advantage">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#14181F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15 10.2117L11 14.2117L9 12.2117" stroke="#14181F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p>Расширенная техподдержка</p>
                            </div>
                            <div class="rate-item__advantage">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#14181F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15 10.2117L11 14.2117L9 12.2117" stroke="#14181F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p>Персональный менеджер</p>
                            </div>
                        </div>
                    </div>
                    <div class="rate-item">
                        <div class="rate-item__header">
                            <h5 class="rate-item__name">Premium</h5>
                            <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_1173_2557" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="32" height="33">
                                    <g clip-path="url(#clip0_1173_2557)">
                                        <path d="M15.0489 1.92705C15.3483 1.00574 16.6517 1.00574 16.9511 1.92705L19.8167 10.7467C19.9506 11.1587 20.3346 11.4377 20.7678 11.4377H30.0413C31.0101 11.4377 31.4128 12.6773 30.6291 13.2467L23.1267 18.6976C22.7762 18.9522 22.6295 19.4036 22.7634 19.8156L25.6291 28.6353C25.9284 29.5566 24.874 30.3227 24.0902 29.7533L16.5878 24.3024C16.2373 24.0478 15.7627 24.0478 15.4122 24.3024L7.90976 29.7533C7.12605 30.3227 6.07157 29.5566 6.37092 28.6353L9.2366 19.8156C9.37048 19.4036 9.22382 18.9522 8.87333 18.6976L1.37088 13.2467C0.587169 12.6773 0.989944 11.4377 1.95867 11.4377H11.2322C11.6654 11.4377 12.0494 11.1587 12.1833 10.7467L15.0489 1.92705Z" fill="black" />
                                    </g>
                                </mask>
                                <g mask="url(#mask0_1173_2557)">
                                    <rect y="0.21167" width="32" height="32" fill="url(#paint0_linear_1173_2557)" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_1173_2557" x1="0" y1="16.2117" x2="32" y2="16.2117" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#9796F0" />
                                        <stop offset="1" stop-color="#FBC7D4" />
                                    </linearGradient>
                                    <clipPath id="clip0_1173_2557">
                                        <rect width="32" height="32" fill="white" transform="translate(0 0.21167)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <p class="rate-item__subheader">Для крупных проектов</p>
                        <p class="rate-item__price">Индивидуально</p>
                        <div class="rate-item__part-container">
                            <p class="rate-item__part">и от 0,5% с заказа</p>
                            <div class="hint-block desc">
                                <svg class="js-hint-icon" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#8397BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.5 8.21167C13.5 9.0401 12.8284 9.71167 12 9.71167C11.1716 9.71167 10.5 9.0401 10.5 8.21167C10.5 7.38324 11.1716 6.71167 12 6.71167C12.8284 6.71167 13.5 7.38324 13.5 8.21167Z" fill="#8397BF" />
                                    <path d="M12 12.2117V16.2117" stroke="#8397BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="hint-block__content">
                                    <p>Индивидуальные условия абонентской платы от 0,5%</p>
                                </div>
                            </div>
                        </div>
                        <a class="rate-item__btn js-show-form">Подключить <span>сейчас</span></a>
                        <p class="rate-item__advantages-header">Соберите свой уникальный проект
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 10L12 16L6 10" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </p>
                        <div class="rate-item__advantages-container">
                            <div class="rate-item__advantage">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#14181F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15 10.2117L11 14.2117L9 12.2117" stroke="#14181F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p>Кастомизация дизайна</p>
                            </div>
                            <div class="rate-item__advantage">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#14181F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15 10.2117L11 14.2117L9 12.2117" stroke="#14181F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p>Разработка и интеграция дополнительных модулей</p>
                            </div>
                            <div class="rate-item__advantage">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#14181F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15 10.2117L11 14.2117L9 12.2117" stroke="#14181F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p>Приоритетная поддержка</p>
                            </div>
                            <div class="rate-item__advantage">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#14181F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15 10.2117L11 14.2117L9 12.2117" stroke="#14181F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p>Персональный менеджер</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="work" id="work">
                <h2 class="work__header">Как это работает</h2>
                <div class="work__container">
                    <div class="work-item">
                        <img class="work-item__img" src="resourses/01.png" alt="01">
                        <p class="work-item__name">Оставьте заявку на&nbsp;подключение</p>
                        <p class="work-item__desc">С вами свяжется наш менджер, выяснит потребности вашего бизнеса, поможет выбрать тариф и расскажет об условиях </p>
                    </div>
                    <div class="work-item">
                        <img class="work-item__img" src="resourses/02.png" alt="02">
                        <p class="work-item__name">Выберите оптимальный тариф</p>
                        <p class="work-item__desc">Выберите тариф, который лучше всего подойдет под ваши задачи, заключите договор и согласуйте сроки запуска</p>
                    </div>
                    <div class="work-item">
                        <img class="work-item__img" src="resourses/03.png" alt="03">
                        <p class="work-item__name">Заполните и запустите сайт</p>
                        <p class="work-item__desc">Уствердите наполнние сайта, загрудите товары и начните принимайте заказы!</p>
                    </div>
                    <div class="work-item">
                        <img class="work-item__img" src="resourses/04.png" alt="04">
                        <p class="work-item__name">Управляете заказами и доставкой в реальном времени</p>
                        <p class="work-item__desc">Собирайте и упралвляйте заказами и доставкой через CRM и повышайте свою эффектиность</p>
                    </div>
                </div>
                <a class="work__btn js-show-form">Начать работу</a>
            </section>
            <section class="faq" id="faq">
                <div class="faq__header">
                    <h2>FAQ</h2>
                </div>
                <div class="faq__questions">
                    <div class="question-item">
                        <div class="question-item__question">
                            <p>Сколько по времени займет внедрение?</p>
                            <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 11L11 1L21 11" stroke="#8397BF" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <p class="question-item__answer">От 1 до 14 дней. В зависимости от того, какие материалы у вас уже собраны на данный момент и как вы работаете с учетной системой</p>
                    </div>
                    <div class="question-item">
                        <div class="question-item__question">
                            <p>Как посмотреть пример (демо) сайта и мобильного приложения?</p>
                            <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 11L11 1L21 11" stroke="#8397BF" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <p class="question-item__answer">От 1 до 14 дней. В зависимости от того, какие материалы у вас уже собраны на данный момент и как вы работаете с учетной системой</p>
                    </div>
                    <div class="question-item">
                        <div class="question-item__question">
                            <p>Заказать или купить готовый сайт и приложение доставки еды и продуктов?</p>
                            <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 11L11 1L21 11" stroke="#8397BF" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <p class="question-item__answer">От 1 до 14 дней. В зависимости от того, какие материалы у вас уже собраны на данный момент и как вы работаете с учетной системой</p>
                    </div>
                    <div class="question-item">
                        <div class="question-item__question">
                            <p>После внедрения, нужно ли мне оплачивать тариф?</p>
                            <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 11L11 1L21 11" stroke="#8397BF" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <p class="question-item__answer">От 1 до 14 дней. В зависимости от того, какие материалы у вас уже собраны на данный момент и как вы работаете с учетной системой</p>
                    </div>
                    <div class="question-item">
                        <div class="question-item__question">
                            <p>Как проходит заказное внедрение?</p>
                            <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 11L11 1L21 11" stroke="#8397BF" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <p class="question-item__answer">От 1 до 14 дней. В зависимости от того, какие материалы у вас уже собраны на данный момент и как вы работаете с учетной системой</p>
                    </div>
                    <div class="question-item">
                        <div class="question-item__question">
                            <p>Что входит в абонентскую плату?</p>
                            <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 11L11 1L21 11" stroke="#8397BF" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <p class="question-item__answer">От 1 до 14 дней. В зависимости от того, какие материалы у вас уже собраны на данный момент и как вы работаете с учетной системой</p>
                    </div>
                </div>
            </section>
            <section class="feedback-form feedback-form-second" id="feedback">
                <form class="feedback-form__form validate-form">
                    <h2 class="feedback-form__header">Нет вашей учетной системы?</h2>
                    <p class="feedback-form__text">Отправьте заявку и мы поможем решить этот вопрос</p>
                    <div class="feedback-form__wrapper">
                        <div class="phone-select">
                            <div class="select-container">
                                <select class="select phone-code" id="phone_code" name="phone_code">
                                    <option disabled>+7</option>
                                    <option value="+4">+4</option>
                                    <option value="+5">+5</option>
                                    <option value="+6">+6</option>
                                    <option value="+7" selected>+7</option>
                                    <option value="+8">+8</option>
                                    <option value="+9">+9</option>
                                </select>
                            </div>
                            <div class="feedback-form__input input-container">
                                <input class="validate-input telephone-input" data-type="telephone" name="telephone" type="text" placeholder="+7">
                            </div>
                        </div>
                        <div class="feedback-form__input input-container">
                            <input class="validate-input name-input" data-type="text" type="text" name="name" placeholder="Введите имя">
                        </div>
                        <button type="button" class="feedback-form__btn validate-form-btn">Оставить заявку</button>
                        <p class="feedback-form__subtext">Нажимая на кнопку “Оставить заявку”, я даю согласие <a class="js-show-terms">на обработку персональных данных</a></p>
                    </div>
                </form>
                <img class="feedback-form__img" src="resourses/feedback.png" alt="feedback">
            </section>
        </main>
    </div>
    <?php require_once "assets/views/includes/footer.php" ?>
    <script src="main.js"></script>
</body>


</html>