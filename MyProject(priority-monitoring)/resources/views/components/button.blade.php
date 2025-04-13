@isset($class)
    @isset($type)
            <button class="{{ $type }} {{ $class }}">
        @else
            <button class="{{ $class }}">
    @endisset
@else
<button class="button">
@endisset
    @isset($icon)
        <div class="button__icon">
            <i class="button__icon_i {{$icon}}"></i>
        </div>
    @endisset
    @isset($type)
        <span class="{{ $type }}_span">{{$name}}</span>
    @else
        <span class="button_span">{{$name}}</span>
    @endisset
</button>
<!-- разобраться с блочными и строчными, блочно-строчными элементами везде(html,css) -->
