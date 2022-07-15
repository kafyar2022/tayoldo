@extends('dashboard.layouts.master')

@section('content')
  <main class="dash-content container">
    <h1 class="dash-content__title">Добавление нового продукта</h1>

    <form class="dash-form" action="{{ route('dashboard.products.create') }}" method="get" enctype="multipart/form-data">
      @csrf
      <input type="text">
    </form>
  </main>
@endsection
