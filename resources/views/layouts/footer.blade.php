<footer class="footer">
  <div class="container footer__container">
    <a class="logo footer__logo" @if ($route != 'home') href="{{ route('home') }}" @endif>
      <img class="logo__img" src="{{ asset('img/logo.svg') }}" alt="Логотип компании Tayoldo" width="173" height="43">
    </a>

    <p class="txt copyright">{{ $data['texts']['copyright'] }}</p>

    <ul class="social-list footer__social-list">
      <li class="social-list__item">
        <a class="social-link" style="background-image: url('files/socials/facebook.svg')" href="#">Фейсбук</a>
      </li>
      <li class="social-list__item">
        <a class="social-link" style="background-image: url('files/socials/instagram.svg')" href="#">Инстаграм</a>
      </li>
      <li class="social-list__item">
        <a class="social-link" style="background-image: url('files/socials/linkedin.svg')" href="#">Линкед ин</a>
      </li>
    </ul>

    <div class="footer__contacts">
      <a class="contact-link contact-link--email" href="mailto:{{ $data['texts']['email'] }}">{{ $data['texts']['email'] }}</a>
      <a class="contact-link contact-link--phone" href="tel:{{ str_replace([' ', '(', ')', '-'], '', $data['texts']['phone']) }}">{{ $data['texts']['phone'] }}</a>
    </div>

    <div class="footer__review-links">
      <a class="review-link" href="#">Правовое соглашение</a>
      <a class="review-link" href="#">Политика конфиденциональности</a>
    </div>
  </div>
</footer>
