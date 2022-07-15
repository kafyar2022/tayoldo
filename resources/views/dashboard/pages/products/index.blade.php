@extends('dashboard.layouts.master')

@section('content')
  <main class="dash-content container">
    <h1 class="dash-content__title">Продукты</h1>

    <form class="dash-search" action="{{ route('products.search') }}" method="get">
      @csrf
      <input class="dash-search__input" name="keyword" type="text" placeholder="Поиск по продуктам">
      <button class="dash-search__submit" type="submit">Искать</button> или <a class="dash-add-button" href="{{ route('dashboard.products.create') }}">Добавить новый продукт</a>
    </form>

    <ol class="dash-list">
      @foreach ($data['products'] as $key => $product)
        <li class="dash-list__item">
          {{ $key + 1 }}.
          {{ $product->title }}
          <a class="dash-list__action dash-list__action--view" href="#">Редактировать</a>
          <button class="dash-list__action dash-list__action--delete" type="button">Удалить</button>
        </li>
      @endforeach
    </ol>
  </main>
@endsection
