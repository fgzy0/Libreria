

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Либрерия</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/nav.css">
    <link rel="stylesheet" href="/css/logwindow.css">
    <link rel="stylesheet"href="/css/tailwind.css">
</head>
<body class="bg-white text-black font-Raleway pt-6 dark:text-white dark:bg-gradient-to-r from-[#000000] via-[#19006c] to-[#000000]">
    <header class="pt-2 w-whead mx-auto 2xl:w-[1520px] xl:w-[1264px]">
        <div class="flex pt-big items-center justify-between px-4 2xl:px-0 xl:px-0 lg:px-0 md:px-0">
            <span class="font-bold text-3xl">
                <a href="/"><img class="w-auto h-12" src="images/header/logotip.png"></a>
            </span>
            <div class="items-center">
              <form class="flex items-center 2xl:w-auto xl:w-auto lg:w-auto md:w-auto w-0 2xl:visible xl:visible lg:visible md:visible invisible">   
                <label for="simple-search" class="sr-only">Найти на сайте...</label>
                <div class="relative 2xl:w-[800px] xl:w-[600px] lg:w-[400px]">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input type="text" class="border w-full border-gray-300 text-gray-900 bg-[#f6f5f7] 2xl:text-lg xl:text-lg lg:text-base text-sm rounded-lg block pl-10 p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Поиск по названию, автору..." required>
                </div>
                <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-[#4d94a0] rounded-lg border border-[#4d94a0] hover:bg-[#4d94a0] hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <span class="sr-only">Search</span>
                </button>
              </form>
            </div>
            <div class="flex space-x-5">
                <div class="items-center flex space-x-5">
                    <a href="#"><ion-icon class="text-xs 2xl:text-2xl xl:text-2xl lg:text-2xl md:text-2xl 2xl:visible xl:visible lg:visible md:visible invisible" name="heart-outline"></ion-icon></a>
                    <a href="#"><ion-icon class="text-xs 2xl:text-2xl xl:text-2xl lg:text-2xl md:text-2xl 2xl:visible xl:visible lg:visible md:visible invisible" name="cart-outline"></ion-icon></a>
                        <?
                        if(isset($_SESSION["user"])){
                            ?>
                    <a class="" href="/profile">
                                <img class="w-[30px] h-[30px] rounded-md" src="/public/images/avatars/<?=$_SESSION["user"]["avatar"]?>">
                    </a>
                            <?
                        }else{
                            ?>
                    <a class="account" href="#">
                                <ion-icon class="pt-6 text-xs 2xl:text-2xl xl:text-2xl lg:text-2xl md:text-2xl 2xl:visible xl:visible lg:visible md:visible invisible" name="person-outline"></ion-icon>
                    </a>
                    <a>
                        <div class="burger-menu-2 2xl:hidden xl:hidden lg:hidden md:hidden grid place-items-center">          
                             <div class="menu-btn-2">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </a>
                            <?
                        }
                        ?>
                </div>
            </div>
        </div>
        <div class="flex justify-center content-center pt-8">
        <section class="wrapper border-2 border-black dark:border-white">
            <div class="form-box login">
                <h2 class="text-black dark:text-white">Войти</h2>
                <form action="/login" method="post">
                    <div class="input-box border-b-2 border-black dark:border-white">
                        <input class="text-black dark:text-white" type="email" name="email" required>
                        <label class="text-black dark:text-white" for="email">Email</label>
                    </div>
                    <div class="input-box border-b-2 border-black dark:border-white">
                        <input class="text-black dark:text-white" type="password" name="password" required>
                        <label class="text-black dark:text-white" for="password">Пароль</label>
                    </div>
                    <div class="remember-forgot text-black dark:text-white">
                        <label><input type="checkbox"> Запомнить данные?</label>
                        <a href="#"> Забыли пароль?</a>
                    </div>
                    <div>
                        <a href="/profile"><button type="submit" class="baton">Войти</button></a>
                    </div>
                </form>
                <div class="login-register text-black dark:text-white">
                    <p>Вы не создавали аккаунт?<a class="register-link" href="#"> Зарегистрируйтесь</a></p>
                </div>
            </div>
            <span class="bebra">
                <a href="#"><ion-icon name="close-outline"></ion-icon></a>
            </span>
            <div class="form-box register">
                <h2>Регистрация</h2>
                <?
                if(isset($_SESSION["registerError"])){
                    echo $_SESSION["registerError"];
                    unset($_SESSION["registerError"]);
                    }
                else{?>
                    <form action="/register" method="post">
                        <div class="input-box border-b-2 border-black dark:border-white">
                            <input class="text-black dark:text-white" type="text" name="username" required>
                            <label class="text-black dark:text-white" for="username">Имя пользователя</label>
                        </div>
                        <div class="input-box border-b-2 border-black dark:border-white">
                            <input class="text-black dark:text-white" type="text" name="email" required>
                            <label class="text-black dark:text-white" for="email">Email</label>
                        </div>
                        <div class="input-box border-b-2 border-black dark:border-white">
                            <input class="text-black dark:text-white" type="password" name="password" required>
                            <label class="text-black dark:text-white" for="password">Пароль</label>
                        </div>

                    <div class="remember-forgot text-black dark:text-white">
                        <label><input type="checkbox"> Я согласен с условиями регистрации</label>
                    </div>
                    <button type="submit" class="baton">Регистрация</button>
                    <div class="login-register text-black dark:text-white">
                        <p>Уже есть аккаунт?<a class="login-link" href="#"> Войти</a></p>
                    </div>
                    </form>
                    <?
                    }
                    ?>
            </div>
        </section>
        </div>
        </div>
        </header>
        <div class="border-2 2xl:h-auto xl:h-auto lg:h-auto md:h-auto h-0 2xl:w-auto xl:w-auto lg:w-auto md:w-auto w-0">
            <nav class="2xl:visible xl:visible lg:visible md:visible invisible">
                <div class="wrapper-nav">
                    <ul class="nav-links flex justify-center 2xl:gap-4 xl:gap-4 lg:gap-4 md:gap-2 sm:gap-2 gap-1">
                        <li><a class="2xl:text-xl xl:text-xl lg:text-xl md:text-base sm:text-base text-sm transition-all group duration-300" href="#">Главное 2024
                            <span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-[#4d94a0]"></span>
                        </a></li>
                        <li><a class="2xl:text-xl xl:text-xl lg:text-xl md:text-base sm:text-base text-sm transition-all group duration-300" href="#">Новинки
                            <span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-[#4d94a0]"></span>
                        </a></li>
                        <li><a class="2xl:text-xl xl:text-xl lg:text-xl md:text-base sm:text-base text-sm transition-all group duration-300" href="#">Вымысел
                            <span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-[#4d94a0]"></span>
                        </a>
                            <div class="mega-box">
                                <div class="content">
                                    <div class="row">
                                        <ul class="mega-links">
                                            <li><a class="hover:text-[#4d94a0]" href="#">Классика</a></li>
                                            <li><a class="hover:text-[#4d94a0]" href="#">Криминал</a></li>
                                            <li><a class="hover:text-[#4d94a0]" href="#">Фантастика</a></li>
                                            <li><a class="hover:text-[#4d94a0]" href="#">Ужасы</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <ul class="mega-links">
                                            <li><a class="hover:text-[#4d94a0]" href="#">Хужожественная литература</a></li>
                                            <li><a class="hover:text-[#4d94a0]" href="#">Поэзия</a></li>
                                            <li><a class="hover:text-[#4d94a0]" href="#">Научная фантастика</a></li>
                                            <li><a class="hover:text-[#4d94a0]" href="#">Короткие истории</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <ul class="mega-links">
                                            <li><a class="hover:text-[#4d94a0]" href="#">История</a></li>
                                            <li><a class="hover:text-[#4d94a0]" href="#">Манга</a></li>
                                            <li><a class="hover:text-[#4d94a0]" href="#">Новеллы</a></li>
                                            <li><a class="hover:text-[#4d94a0]" href="#">Романтика</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a class="2xl:text-xl xl:text-xl lg:text-xl md:text-base sm:text-base text-sm transition-all group duration-300" href="#">Научно-популярная литература
                            <span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-[#4d94a0]"></span>
                        </a>
                            <div class="mega-box shadow-lg">
                                    <div class="content">
                                        <div class="row">
                                            <ul class="mega-links">
                                                <li><a class="hover:text-[#4d94a0]" href="#">Деловые финансы</a></li>
                                                <li><a class="hover:text-[#4d94a0]" href="#">Образование</a></li>
                                                <li><a class="hover:text-[#4d94a0]" href="#">Еда и напитки</a></li>
                                                <li><a class="hover:text-[#4d94a0]" href="#">Здоровье и Семья</a></li>
                                            </ul>
                                        </div>
                                        <div class="row">
                                            <ul class="mega-links">
                                                <li><a class="hover:text-[#4d94a0]" href="#">Спорт и хобби</a></li>
                                                <li><a class="hover:text-[#4d94a0]" href="#">Путешествия</a></li>
                                                <li><a class="hover:text-[#4d94a0]" href="#">Искусство</a></li>
                                                <li><a class="hover:text-[#4d94a0]" href="#">Биография и мемуары</a></li>
                                            </ul>
                                        </div>
                                        <div class="row">
                                            <ul class="mega-links">
                                                <li><a class="hover:text-[#4d94a0]" href="#">Дом и Сад</a></li>
                                                <li><a class="hover:text-[#4d94a0]" href="#">Музыка</a></li>
                                                <li><a class="hover:text-[#4d94a0]" href="#">Разум и Тело</a></li>
                                                <li><a class="hover:text-[#4d94a0]" href="#">Гуманитарные науки</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <li><a class="2xl:text-xl xl:text-xl lg:text-xl md:text-base sm:text-base text-sm transition-all group duration-300" href="#">Книги сезонов
                            <span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-[#4d94a0]"></span>
                        </a>
                            <ul class="drop-menu shadow-lg">
                                <li><a class="hover:text-[#4d94a0]" href="#">Зима</a></li>
                                <li><a class="hover:text-[#4d94a0]" href="#">Весна</a></li>
                                <li><a class="hover:text-[#4d94a0]" href="#">Лето</a></li>
                                <li><a class="hover:text-[#4d94a0]" href="#">Осень</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <ul class="menu-2 absolute left-4 right-6 top-24 pt-0 bg-white text-black h-auto w-auto flex flex-col items-center rounded-md shadow-2xl 2xl:hidden xl:hidden lg:hidden md:hidden">
            <li class="flex space-x-5 items-center py-4 pb-2">
                <a href="#" class="block pt-4 text-2xl">
                <form class="flex items-center">   
                    <label for="simple-search" class="sr-only">Найти на сайте...</label>
                    <div class="relative 2xl:w-[800px] xl:w-[600px] lg:w-[400px]">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input type="text" class="border w-full border-gray-300 text-gray-900 bg-[#f6f5f7] 2xl:text-lg xl:text-lg lg:text-base text-sm rounded-lg block pl-10 p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Поиск по названию, автору..." required>
                    </div>
                    <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-[#4d94a0] rounded-lg border border-[#4d94a0] hover:bg-[#4d94a0] hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        <span class="sr-only">Search</span>
                    </button>
                </form>
                </a>
            </li>
              <li class="account-2 flex space-x-5 items-center"><a href="#" class="block py-4 text-2xl">Войти</a></li>
              <li class="flex space-x-5 items-center"><a href="#" class="block py-2 text-2xl">Главное 2024</a></li>
              <li class="flex space-x-5 items-center"><a href="#" class="block py-2 text-2xl">Новинки</a></li>
              <li class="flex space-x-5 items-center"><a href="#" class="block py-2 text-2xl">Вымысел</a></li>
              <li class="flex space-x-5 items-center"><a href="#" class="block pt-2 pb-6 text-2xl">Акции</a></li>
            </ul>
        </div>
        </div>
        
        
