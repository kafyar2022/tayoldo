@extends('layouts.master')

@section('title', 'Продукты | Tayoldo')

@section('content')
  <main class="container content">
    <h1 class="title" id="products">{{ $data['products-title'] }}</h1>
    <p class="txt subtitle products__subtitle">{{ $data['products-subtitle'] }}</p>

    <section class="products-filter">
      <form class="filter-form" action="{{ route('products') }}#products" method="GET">
        <div class="filter-form__field-wrap">
          <select class="filter-form__field" name="prescription" onchange="this.form.submit()">
            <option value="">Рецептурность</option>
            @foreach ($data['prescriptions'] as $prescription)
              <option value="{{ $prescription->id }}" @if ($data['prescription'] && $data['prescription'] == $prescription->id) selected @endif>{{ $prescription->title }}</option>
            @endforeach
          </select>
        </div>

        <div class="filter-form__field-wrap">
          <select class="filter-form__field" name="impact" onchange="this.form.submit()">
            <option value="">Воздействие</option>
            @foreach ($data['impacts'] as $impact)
              <option value="{{ $impact->id }}" @if ($data['impact'] && $data['impact'] == $impact->id) selected @endif>{{ $impact->title }}</option>
            @endforeach
          </select>
        </div>

        <div class="filter-form__field-wrap">
          <select class="filter-form__field" name="active_substance" onchange="this.form.submit()">
            <option value="">Действующее вещество</option>
            @foreach ($data['active_substances'] as $activeSubstance)
              <option value="{{ $activeSubstance->id }}" @if ($data['active_substance'] && $data['active_substance'] == $activeSubstance->id) selected @endif>{{ $activeSubstance->title }}</option>
            @endforeach
          </select>
        </div>
        <input type="hidden" name="page" value="1">
      </form>
    </section>

    <section class="our-products">
      @foreach ($data['products'] as $product)
        <x-product-card :product="$product" />
      @endforeach

      {{ $data['products']->appends(request()->input())->fragment('products')->links('components.pagination') }}
    </section>
  </main>
@endsection
