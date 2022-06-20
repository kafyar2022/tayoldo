<header class="header">
  <div class="container">
    <nav class="main-navigation">
      <a class="logo" @if ($route != 'home') href="{{ route('home') }}" @endif>
        <img class="logo__img" src="{{ asset('img/logo.svg') }}" alt="Логотип компании Tayoldo" width="173" height="43">
      </a>

      <ul class="site-navigation">
        <li class="site-navigation__item">
          <a class="site-navigation__link @if ($route == 'about') site-navigation__link--current @endif" @if ($route != 'about') href="{{ route('about') }}" @endif>О нас</a>
        </li>
        <li class="site-navigation__item">
          <a class="site-navigation__link @if ($route == 'products' || $route == 'products.show') site-navigation__link--current @endif" @if ($route != 'products' && $route != 'products.show') href="{{ route('products') }}" @endif>Продукты</a>
        </li>
      </ul>

      <a class="btn @if ($route != 'contacts') btn--outlined @endif" @if ($route != 'contacts') href="{{ route('contacts') }}" @endif>Контакты</a>
    </nav>
  </div>
</header>
