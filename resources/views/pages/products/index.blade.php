@extends('layouts.master')

@section('title', 'Продукты | Tayoldo')

@section('content')
  <main class="container content" id="products">
    <h1 class="title">{{ $data['texts']['products-title'] }}</h1>
    <p class="txt subtitle products__subtitle">{{ $data['texts']['products-subtitle'] }}</p>

    <section class="products-filter">
      <form class="filter-form">
        <select class="filter-form__field" name="prescription">
          <option value="">Рецептурность</option>
          <option value="">Рецептурность 1</option>
          <option value="">Рецептурность 2</option>
        </select>

        <select class="filter-form__field" name="impact">
          <option value="">Воздействие</option>
          <option value="">Воздействие 1</option>
          <option value="">Воздействие 2</option>
        </select>

        <select class="filter-form__field" name="active_substance">
          <option value="">Действующее вещество</option>
          <option value="">Действующее вещество 1</option>
          <option value="">Действующее вещество 2</option>
        </select>
      </form>
    </section>

    <section class="products">
      @foreach ($data['products'] as $product)
        <x-product-card :product="$product" />
      @endforeach

      {{ $data['products']->fragment('products')->links('components.pagination') }}
    </section>
  </main>
@endsection
