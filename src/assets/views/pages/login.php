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
    <link rel="stylesheet" href="main.css">
</head>

<body class="body footer-bottom" id="body">
    <main class="login">
        <div class="login__info">
            <a class="login__logo" href="#">
                <img src="resourses/logo.svg" alt="logo">
            </a>
            <form class="login__form validate-form" action="">
                <h2 class="login__header">Администраторская панель</h2>
                <div class="login__form__content">
                    <div class="login__input input-container">
                        <input class="validate-input name-input" data-type="text" type="text" name="name" placeholder="Имя пользователя">
                    </div>
                    <div class="login__input input-container">
                        <input class="validate-input password-input" data-type="text" type="password" name="password" placeholder="Пароль">
                        <svg class="show-password" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.66162 5.95452L5.70711 4L4.29289 5.41421L5.98702 7.10834C4.7207 8.12318 3.4607 9.45609 2.20523 11.1002C1.93159 11.4585 1.93159 11.9557 2.20523 12.314C5.43017 16.5372 8.68497 18.7071 12 18.7071C13.4569 18.7071 14.9022 18.288 16.3384 17.4597L18.2929 19.4142L19.7071 18L18.013 16.3059C19.2793 15.291 20.5393 13.9581 21.7948 12.314C22.0684 11.9557 22.0684 11.4585 21.7948 11.1002C18.5698 6.87697 15.315 4.70711 12 4.70711C10.5431 4.70711 9.09783 5.12621 7.66162 5.95452ZM7.4106 8.53192C6.38436 9.32605 5.33714 10.3825 4.27049 11.7071C6.98096 15.0732 9.56601 16.7071 12 16.7071C12.9321 16.7071 13.8864 16.4675 14.8614 15.9827L7.4106 8.53192ZM16.5894 14.8823L9.13861 7.43151C10.1136 6.94673 11.0679 6.70711 12 6.70711C14.434 6.70711 17.019 8.34101 19.7295 11.7071C18.6629 13.0318 17.6156 14.0882 16.5894 14.8823Z" />
                        </svg>
                    </div>
                    <div class="errors-container">
                        <p class="error-text">Неверный логин и/или пароль.</p>
                    </div>
                    <button class="login__btn validate-form-btn" type="submit">Войти</button>
                    <p class="login__subtext">Если у вас возникли вопросы, обращайтесь<br>по номеру <a href="tel:+79999999999">+7 (999) 999-99-99</a>
                    </p>
                </div>
            </form>
        </div>
        <div class="login__img-container">
            <img class="login__img" src="resourses/login.webp" alt="login image">
        </div>

    </main>
    <script src="main.js"></script>
</body>


</html>