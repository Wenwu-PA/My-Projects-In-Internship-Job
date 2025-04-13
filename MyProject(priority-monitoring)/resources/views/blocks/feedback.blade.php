<div class="feedback">
    <div class="feedback__ilustration">
        <img src="{{ asset('img/feedback/1.svg') }}" alt="img_hex-1" class="feedback__hex-1">
        <img src="{{ asset('img/feedback/2.png') }}" alt="img_hex-2" class="feedback__hex-2">
        <img src="{{ asset('img/feedback/3.png') }}" alt="img_hex-3" class="feedback__hex-3">
        <img src="{{ asset('img/feedback/4.png') }}" alt="img_hex-4" class="feedback__hex-4">
    </div>
    <form action="" class="feedback__form">
        <h1 class="feedback__form__heading">Есть вопросы?</h1>
        <p class="feedback__form__text">Оставьте свой номер телефона или электронный адрес. Мы с вами свяжемся в ближайшее рабочее время.</p>
        <div class="feedback__form__fieldgroup">
            <span class="feedback__form__span">Номер телефона или электронный адрес</span>
            <input type="tel" name="phone" class="feedback__form__input">
        </div>
        <x-button name="Отправить данные" icon="fa-solid fa-check button_icon" class="feedback__form__button"/>
    </form>
    <img src="{{ asset('img/cover/shadow-of-the-castle.svg') }}" alt="замок" class="feedback__shadow-of-the-castle">
</div>
