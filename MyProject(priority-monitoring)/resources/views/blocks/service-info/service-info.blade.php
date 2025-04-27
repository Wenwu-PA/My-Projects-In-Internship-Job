<div class="service-info">
    <h2 class="service-info__heading">
        Проектирование,<br>
        монтаж и обслуживание
    </h2>
    @include("blocks.service-info.service-info_standart")
    @include("blocks.service-info.service-info_tablet")
    @include("blocks.service-info.service-info_phone")

    <div class="service-info__buttons">
        <x-button name="Получить консультацию" icon="fa-solid fa-mobile-screen-button" type="button" class="service-info__consultation"/>
        <x-button name="Предложить участие в тендере" class="service-info__tender" type="button-stroke"/>
    </div>
    <img class="service-info__pattern" src="{{ asset('img/service-info/pattern.svg') }}" alt="img_4">

</div>
