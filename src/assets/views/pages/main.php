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
    <div class="wrapper">
        <main class="main">
            <section class="main-banner">
                <div class="main-banner__info">
                    <h1>Помогаем ресторанам зарабатывать больше</h1>
                    <h4>Быстрый и удобный сайт для доставки и самовывоза, который увеличивает выручку до 50%</h4>
                    <a class="main-banner__launch" href="#">Запустить бесплатно</a>
                    <a class="main-banner__demo" href="#">Посмотреть демо</a>
                </div>
            </section>
            <section class="advantages">
                <h2>С rekado вы сможете</h2>
                <div class="advantages__container">
                    <div class="advantages-item">
                        <p>Быстро и гибко управлять рестораном</p>
                        <img src="resourses/advantage_1.png" alt="advantage">
                    </div>
                    <div class="advantages-item">
                        <p>Интегрироваться с вашей учетной системой</p>
                        <img src="resourses/advantage_2.png" alt="advantage">
                    </div>
                    <div class="advantages-item">
                        <p>Принимать онлайн оплату любым доступным методом</p>
                        <img src="resourses/advantage_3.png" alt="advantage">
                    </div>
                    <div class="advantages-item">
                        <p>Увеличить скорость работы ресторана</p>
                        <img src="resourses/advantage_4.png" alt="advantage">
                    </div>
                </div>
            </section>
            <section class="partners">
                <div class="partner-item">
                    <img src="resourses/iiko.png" alt="partner">
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
                    <img src="resourses/frontpad.png" alt="partner">
                </div>
                <div class="partner-item">
                    <img src="resourses/sclad.png" alt="partner">
                </div>
            </section>
            <section class="feedback-form">
                <form class="feedback-form__form">
                    <h2 class="feedback-form__header">Нет вашей учетной системы?</h2>
                    <p class="feedback-form__text">Отправьте заявку и мы поможем решить этот вопрос</p>
                    <div class="feedback-form__wrapper">
                        <div class="feedback-form__input input-container">
                            <input class="validate-input telephone-input" data-type="telephone" type="text" placeholder="+7">
                        </div>
                        <div class="feedback-form__input input-container">
                            <input class="validate-input" data-type="text" type="text" placeholder="Введите имя">
                        </div>
                        <button type="button" class="feedback-form__btn validate-form-btn">Оставить заявку</button>
                        <p class="feedback-form__subtext">Нажимая на кнопку “Оставить заявку”, я даю согласие <a href="#">на обработку персональных данных</a></p>
                    </div>
                </form>
                <img class="feedback-form__img" src="resourses/feedback.png" alt="feedback">
            </section>
            <section class="options">
                <h2>Кому подойдет rekado</h2>
                <div class="options__scroll-container">
                    <div class="options__container">
                        <div class="option-item">
                            <h5 class="option-item__header">Доставкам еды</h5>
                            <p class="option-item__text">Принимать заказы с сайта напрямую во FrontPad, освободить оператора от лишних звонков</p>
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
                    <!-- <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    </div> -->
            </section>
            <section class="rates">
                <h2 class="rates__header">Тарифы</h2>
                <div class="rates__container">
                    <div class="rate-item">
                        <h5 class="rate-item__name">Start</h5>
                        <p class="rate-item__price">3900 ₽</p>
                        <p class="rate-item__part">и 3,5% с заказа</p>
                        <a class="rate-item__btn" href="#">Подключить <span>сейчас</span></a>
                        <div class="rate-item__advantage">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#14181F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15 10.2117L11 14.2117L9 12.2117" stroke="#14181F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p>Средний ответ поддержки до 4 часов</p>
                        </div>
                        <div class="rate-item__advantage">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#14181F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15 10.2117L11 14.2117L9 12.2117" stroke="#14181F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p>Поддержка безприоритетных ответов</p>
                        </div>
                        <div class="rate-item__advantage">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#14181F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15 10.2117L11 14.2117L9 12.2117" stroke="#14181F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p>Личный менеджер</p>
                        </div>
                        <div class="rate-item__advantage">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#14181F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15 10.2117L11 14.2117L9 12.2117" stroke="#14181F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p>Приорететная поддержка</p>
                        </div>
                    </div>
                    <div class="rate-item favorite">
                        <h5 class="rate-item__name">Optimum <span>популярный</span></h5>
                        <p class="rate-item__price">49 900 ₽</p>
                        <p class="rate-item__part">и 1,5% с заказа</p>
                        <a class="rate-item__btn" href="#">Подключить <span>сейчас</span></a>
                        <div class="rate-item__advantage">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#14181F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15 10.2117L11 14.2117L9 12.2117" stroke="#14181F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p>Средний ответ поддержки до 4 часов</p>
                        </div>
                        <div class="rate-item__advantage">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#14181F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15 10.2117L11 14.2117L9 12.2117" stroke="#14181F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p>Поддержка безприоритетных ответов</p>
                        </div>
                        <div class="rate-item__advantage">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#14181F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15 10.2117L11 14.2117L9 12.2117" stroke="#14181F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p>Личный менеджер</p>
                        </div>
                        <div class="rate-item__advantage">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#14181F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15 10.2117L11 14.2117L9 12.2117" stroke="#14181F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p>Приорететная поддержка</p>
                        </div>
                    </div>
                    <div class="rate-item">
                        <h5 class="rate-item__name">Premium</h5>
                        <p class="rate-item__price">Индивидуально</p>
                        <p class="rate-item__part">и от 0,7% с заказа</p>
                        <a class="rate-item__btn" href="#">Подключить <span>сейчас</span></a>
                        <div class="rate-item__advantage">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#14181F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15 10.2117L11 14.2117L9 12.2117" stroke="#14181F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p>Средний ответ поддержки до 4 часов</p>
                        </div>
                        <div class="rate-item__advantage">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#14181F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15 10.2117L11 14.2117L9 12.2117" stroke="#14181F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p>Поддержка безприоритетных ответов</p>
                        </div>
                        <div class="rate-item__advantage">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#14181F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15 10.2117L11 14.2117L9 12.2117" stroke="#14181F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p>Личный менеджер</p>
                        </div>
                        <div class="rate-item__advantage">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 21.2117C16.9706 21.2117 21 17.1822 21 12.2117C21 7.24111 16.9706 3.21167 12 3.21167C7.02944 3.21167 3 7.24111 3 12.2117C3 17.1822 7.02944 21.2117 12 21.2117Z" stroke="#14181F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15 10.2117L11 14.2117L9 12.2117" stroke="#14181F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p>Приорететная поддержка</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="work">
                <h2 class="work__header">Как это работает</h2>
                <div class="work__container">
                    <div class="work-item">
                        <p class="work-item__number">01</p>
                        <p class="work-item__name">Заполните анкету</p>
                        <p class="work-item__desc">Мы помогаем всё подготовить: интегрировать POS-систему, подключить платежи и курьерскую службу, настроить условия доставки и дизайн. Публикуем приложение и сайт.</p>
                    </div>
                    <div class="work-item">
                        <p class="work-item__number">02</p>
                        <p class="work-item__name">Ознакомиться с условиями сотрудничества</p>
                        <p class="work-item__desc">Мы помогаем всё подготовить: интегрировать POS-систему, подключить платежи и курьерскую службу, настроить условия доставки и дизайн. Публикуем приложение и сайт.</p>
                    </div>
                    <div class="work-item">
                        <p class="work-item__number">03</p>
                        <p class="work-item__name">Подключить тариф</p>
                        <p class="work-item__desc">Мы помогаем всё подготовить: интегрировать POS-систему, подключить платежи и курьерскую службу, настроить условия доставки и дизайн. Публикуем приложение и сайт.</p>
                    </div>
                    <div class="work-item">
                        <p class="work-item__number">04</p>
                        <p class="work-item__name">Начать работу в нашей системе</p>
                        <p class="work-item__desc">Мы помогаем всё подготовить: интегрировать POS-систему, подключить платежи и курьерскую службу, настроить условия доставки и дизайн. Публикуем приложение и сайт.</p>
                    </div>
                </div>
                <a class="work__btn" href="#">Начать работу</a>
            </section>
            <section class="faq">
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
                            <p>Сколько по времени займет внедрение?</p>
                            <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 11L11 1L21 11" stroke="#8397BF" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <p class="question-item__answer">От 1 до 14 дней. В зависимости от того, какие материалы у вас уже собраны на данный момент и как вы работаете с учетной системой</p>
                    </div>
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
                            <p>Сколько по времени займет внедрение?</p>
                            <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 11L11 1L21 11" stroke="#8397BF" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <p class="question-item__answer">От 1 до 14 дней. В зависимости от того, какие материалы у вас уже собраны на данный момент и как вы работаете с учетной системой</p>
                    </div>
                    <div class="question-item">
                        <div class="question-item__question">
                            <p>Сколько по времени займет внедрение?</p>
                            <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 11L11 1L21 11" stroke="#8397BF" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <p class="question-item__answer">От 1 до 14 дней. В зависимости от того, какие материалы у вас уже собраны на данный момент и как вы работаете с учетной системой</p>
                    </div>
                </div>
            </section>
            <section class="feedback-form feedback-form-second">
                <form class="feedback-form__form validate-form">
                    <h2 class="feedback-form__header">Нет вашей учетной системы?</h2>
                    <p class="feedback-form__text">Отправьте заявку и мы поможем решить этот вопрос</p>
                    <div class="feedback-form__wrapper">
                        <div class="feedback-form__input input-container">
                            <input class="validate-input telephone-input" data-type="telephone" type="text" placeholder="+7">
                        </div>
                        <div class="feedback-form__input input-container">
                            <input class="validate-input" data-type="text" type="text" placeholder="Введите имя">
                        </div>
                        <button type="button" class="feedback-form__btn validate-form-btn">Оставить заявку</button>
                        <p class="feedback-form__subtext">Нажимая на кнопку “Оставить заявку”, я даю согласие <a href="#">на обработку персональных данных</a></p>
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