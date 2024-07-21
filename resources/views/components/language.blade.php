<div>
    <div class="nav-wrapper">
        <div class="sl-nav">
            Region:
            <ul>
                <li><b>{{ LaravelLocalization::getCurrentLocaleName() }}</b> <i class="fa fa-angle-down"
                        aria-hidden="true"></i>
                    <div class="triangle"></div>
                    <ul>
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a rel="alternate" hreflang="{{ $localeCode }}"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
