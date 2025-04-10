<div class="staff">
        <h2 class="heading"><span class="heading_span">Сотрудники</span> «Приоритет-Мониторинг»</h2>
        <div class="staff__workers">
            <div class="staff__cards">
                <x-staff.card src="{{ asset('img/staff/cards/1.png') }}" name="Евтушенко Владимир Александрович" post="Генеральный директор"/>
                <x-staff.card src="{{ asset('img/staff/cards/2.png') }}" name="Солдаткина Гузель Булатовна" post="Заместитель генерального директора по финансам"/>
                <x-staff.card src="{{ asset('img/staff/cards/3.png') }}" name="Лазарев Владимир Владимирович" post="Заместитель генерального директора по эксплуатации"/>
                <x-staff.card src="{{ asset('img/staff/cards/4.png') }}" name="Высоцкий Александр Сергеевич" post="Инженер-проектировщик"/>
            </div>
            <div class="paginator">
                <button class="paginator_left"><</button>
                <p class="paginator_number">1/3</p>
                <button class="paginator_right">></button>
            </div>   
        </div>
        <img src="{{ asset('img/staff/pattern.png') }}" alt="" class="staff__pattern">
    </div>