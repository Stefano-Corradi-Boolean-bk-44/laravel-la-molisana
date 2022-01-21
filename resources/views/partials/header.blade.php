

<header>
    <a href="#">
      <img src="{{ asset('img/la-molisana-logo.png') }}" alt="logo">
    </a>

    <nav>
        <ul>

            @foreach (config('menu') as $link)
                <li >
                    <a class="{{ (Route::currentRouteName() === $link['route']) ? 'active' : '' }}" href="{{ route($link['route']) }}">{{ $link['title'] }}</a>
                </li>
            @endforeach

        </ul>
      </nav>
  </header>
