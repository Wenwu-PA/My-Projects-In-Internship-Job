<div class="clients">
        <h1 class="clients__h">Наши <span>клиенты</span></h1>
        <div class="clients__cards">
            <div class="clients__1">
                <x-client_cards.element src="{{ asset('img/clients/cards/1_row/1.png') }}" text="Администрация «Выборгский район»"/>
                <x-client_cards.element src="{{ asset('img/clients/cards/1_row/2.png') }}" text="ООО «Выборгский водоканал»"/>
                <x-client_cards.element src="{{ asset('img/clients/cards/1_row/3.png') }}" text="ГБУК ЛО «ВЦ «Эрмитаж-Выборг» "/>
                <x-client_cards.element src="{{ asset('img/clients/cards/1_row/4.png') }}" text="ООО «Завод Технофлекс»"/>
                <x-client_cards.element src="{{ asset('img/clients/cards/1_row/5.png') }}" text="ЗАО «Балтинвестбанк»"/>
                <x-client_cards.element src="{{ asset('img/clients/cards/1_row/6.png') }}" text="ПАО «Абсолют Банк»"/>
            </div>
            <div class="clients__2">
                <x-client_cards.element src="{{ asset('img/clients/cards/2_row/1.png') }}" text="Администрация «Приморское городское поселение»"/>
                <x-client_cards.element src="{{ asset('img/clients/cards/2_row/2.png') }}" text="Администрация «Высоцкое городское поселение»"/>
                <x-client_cards.element src="{{ asset('img/clients/cards/2_row/3.png') }}" text="ОАО «ВЗСМ»"/>
                <x-client_cards.element src="{{ asset('img/clients/cards/2_row/4.png') }}" text="МБОУ «Гимназия»"/>
                <x-client_cards.element src="{{ asset('img/clients/cards/2_row/5.png') }}" text="АО «Выборгтеплоэнерго»"/>
                <x-client_cards.element src="{{ asset('img/clients/cards/2_row/6.png') }}" text="Выборгская Епархия русской православной церкви"/>
            </div>
        </div>
        <div class="clients__list">
            <x-clients_list.column 
            text1="МБУ «Центр правового обеспечения» "
            text2="Магазин «АвтоВосток»"
            text3="ООО «Инвестком» "
            text4="ООО «Амрест» "
            text5="Православная местная религиозная
            организация приход
            Спасо-преображенского собора
            г. Выборга"
            />
            <x-clients_list.column 
            text1="ООО «Цветочное» "
            text2="ООО «Пробелл» "
            text3="ООО «Алком Трейд» "
            text4="ООО «Норд-лайн» "
            text5="ООО «Торговый мир» "
            />
            <x-clients_list.column 
            text1="ЗАО «Раском» "
            text2="МБОУ «Рощинский ЦО» "
            text3="МБОУ «Гимназия №11» "
            text4="Салон красоты «Тутафе»"
            text5="ИП Шевцов Михаил Андреевич"
            />
            <x-clients_list.column 
            text1="ООО «Центр автоматизации» "
            text2="ООО «ДСК Выборг» "
            text3="ООО «ДСК Выборг» "
            text4="ООО «Веста» "
            text5="ЗАО «ВыборгСетеСнасть» "
            />
        </div>
        <div class="paginator">
            <button class="paginator_left"><</button>
            <p class="paginator_number">1/4</p>
            <button class="paginator_right">></button>
        </div>
        <img src="{{ asset('img/clients/pattern.png') }}" alt="" class="clients__pattern">
    </div>