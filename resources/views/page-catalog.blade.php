@extends('layouts.app')
@section('content')
    @while(have_posts()) @php the_post() @endphp

    <div class="singlepage singlepage-catalog singlepage--top-padding">
        <div class="singlepage-catalog__headline">
            @include('pages.catalog.headline')
        </div>

        <div class="container container--full">
            <p class="singlepage-catalog__caption singlepage-catalog__caption--no-mobile">Подобрать по типу внешности</p>
        </div>

        <div class="singlepage-catalog__catalog">
            @include('pages.catalog.catalog')
        </div>

        <div class="singlepage-catalog__offer">
            @include('pages/home/offer', ['title' => get_field("offer", get_the_ID())['title'], 'text' => get_field("offer", get_the_ID())['text'], 'partner' => get_field("offer", get_the_ID())['partner']])
        </div>
        <div class="singlepage-catalog__contact-form">
            @include('pages.catalog.contact-form')
        </div>
    </div>

    @endwhile
@endsection
