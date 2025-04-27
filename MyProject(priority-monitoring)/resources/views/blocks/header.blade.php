<header class="header">
    <div class="header__logo">
        <img src="{{ asset('img/header/logo.svg') }}" alt="Логотип Приоритет мониторинг" class="header__icon">
    </div>
    <div class="header__menu">
        <a href="" class="header__link">услуги</a>
        <a href="" class="header__link">преимущества</a>
        <a href="" class="header__link">клиенты</a>
        <a href="" class="header__link">проекты</a>
        <a href="" class="header__link">сотрудники</a>
        <a href="" class="header__link">вакансии</a>
    </div>
    <div class="header__buttons">
        <x-button name="Общие условия" class="header__contact" type="button-stroke"/>
        <x-button  icon="fa-solid fa-location-dot" name="Контакты" class="header__contacts" type="button"/>
    </div>
    <x-button  icon="fa-solid fa-bars" name="меню" class="header__menu_btn" type="button-stroke"/>
</header>
