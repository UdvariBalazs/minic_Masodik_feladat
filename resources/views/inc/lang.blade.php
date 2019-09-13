@foreach (config('app.available_locales') as $locale)
    <li class="nav-item">
        <a class="nav-link"
            @if (app()->getLocale() == $locale)
                style="display: none"
            @endif
        href="/{{ $locale }}/{{ substr(url()->current(), 25) }}">{{ strtoupper($locale) }}</a>
    </li>
@endforeach