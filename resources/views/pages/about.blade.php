@extends('layouts.master')

@section('title', 'О нас | Tayoldo')

@section('content')
  <main class="container content">
    <div class="vitrin about__vitrin">
      <div class="vitrin__inner">
        <h1 class="title vitrin__title">{{ $data['about-vitrin-title'] }}</h1>
        <p class="txt subtitle">{{ $data['about-vitrin-subtitle'] }}</p>
      </div>
    </div>

    <div class="about-card">
      <p class="about-card__description">{{ $data['about-card-description'] }}</p>
      <p class="txt about-card__text">{{ $data['about-card-text'] }}</p>
    </div>

    <section class="foundation">
      <h2 class="title">{{ $data['about-foundation-title'] }}</h2>
      <p class="txt subtitle">{{ $data['about-foundation-subtitle'] }}</p>

      <div class="foundation__inner">
        <section class="about-mission">
          <div class="mission-vision__inner">
            <h3 class="txt mission-vision-title">{{ $data['about-mission-title'] }}</h3>
            <p class="txt mission-vision-description">{{ $data['about-mission-description'] }}</p>
          </div>
        </section>

        <section class="about-vision">
          <div class="mission-vision__inner">
            <h3 class="txt mission-vision-title">{{ $data['about-vision-title'] }}</h3>
            <p class="txt mission-vision-description">{{ $data['about-vision-description'] }}</p>
          </div>
        </section>
      </div>
    </section>

    <section class="values">
      <h2 class="title values__title">{{ $data['about-values-title'] }}</h2>
      <p class="txt subtitle">{{ $data['about-values-subtitle'] }}</p>

      <ul class="value-list">
        <li class="value-item">
          <h3 class="value-item__title">{{ $data['values-item-1'] }}</h3>
        </li>
        <li class="value-item">
          <h3 class="value-item__title">{{ $data['values-item-2'] }}</h3>
        </li>
        <li class="value-item">
          <h3 class="value-item__title">{{ $data['values-item-3'] }}</h3>
        </li>
        <li class="value-item">
          <h3 class="value-item__title">{{ $data['values-item-4'] }}</h3>
        </li>
        <li class="value-item">
          <h3 class="value-item__title">{{ $data['values-item-5'] }}</h3>
        </li>
        <li class="value-item">
          <h3 class="value-item__title">{{ $data['values-item-6'] }}</h3>
        </li>
      </ul>
    </section>
  </main>
@endsection
