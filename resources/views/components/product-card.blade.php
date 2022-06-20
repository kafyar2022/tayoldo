@props(['product'])

<article class="product-card">
  <div class="product-card__left">
    <img class="product-card__img" src="{{ asset('files/products/img/' . $product->img) }}" alt="{{ $product->title }}" width="216" height="216">
  </div>

  <div class="product-card__middle">
    <h3 class="product-card__title">{{ $product->title }}</h3>

    <p class="product-card__release-form">Форма выпуска: {{ $product->release_form }}</p>
    <p class="txt product-card__description">{{ $product->description }}</p>
  </div>

  <div class="product-card__right">
    <p class="product-card__prescription">{{ $product->prescription }}</p>
    <a class="btn btn--light" href="{{ route('products.show', $product->slug) }}">Подробнее</a>
  </div>
</article>
