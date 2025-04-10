<div class="thanks">
        <h1 class="thanks__h"><span>Благодарности<span> от наших клиентов</h1>
        <div class="thanks__certificates">
            <div class="thanks__content">
                <x-certificates.card src="{{ asset('img/thanks/certificates/1.png') }}" n="1"/>
                <x-certificates.card src="{{ asset('img/thanks/certificates/2.png') }}" n="2"/>
                <x-certificates.card src="{{ asset('img/thanks/certificates/3.png') }}" n="3"/>
                <x-certificates.card src="{{ asset('img/thanks/certificates/4.png') }}" n="4"/>
                <x-certificates.card src="{{ asset('img/thanks/certificates/5.png') }}" n="5"/>
                <x-certificates.card src="{{ asset('img/thanks/certificates/6.png') }}" n="6"/>
            </div>
            <div class="paginator">
                <button class="paginator_left"><</button>
                <p class="paginator_number">1/3</p>
                <button class="paginator_right">></button>
            </div>
            <img src="{{ asset('img/thanks/pattern.png') }}" alt="" class="thanks__pattern">
    </div>