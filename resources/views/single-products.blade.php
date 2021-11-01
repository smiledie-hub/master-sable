@extends('layouts.app')
@section('content')
  @while(have_posts()) @php the_post() @endphp

  <div class="singlepage singlepage-product singlepage--top-padding">
    <div class="singlepage-product__content">
      @include('pages/product/content')
    </div>

    <div class="singlepage-product__sets">
      @include('pages/home/sets', ['title' => 'Наборы с похожими характеристиками'])
    </div>
  </div>

  @endwhile
@endsection