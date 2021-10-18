@extends('layouts.app')
@section('content')
    @while(have_posts()) @php the_post() @endphp

    <div class="singlepage singlepage-catalog singlepage--top-padding">
        <div class="singlepage-catalog__headline">
            @include('pages.catalog.headline')
        </div>

        <div class="container container--full">
            <p class="singlepage-catalog__caption">Подобрать по типу внешности</p>
        </div>

        <div class="singlepage-catalog__catalog">
            @include('pages.catalog.catalog')
        </div>

        <div class="singlepage-catalog__offer">
            @include('pages/home/offer', ['title' => 'Предложение для профессионалов', 'text' => 'Помимо оптовой и розничной продажи меховых наборов, мы предлагаем комплексные поставки, включающие в себя все
                        необходимые материалы для изготовления продукции высокого качества, а также предоставляем возможность
                        изготовления изделий по эскизам.', 'partner' => true])
        </div>
        <div class="singlepage-catalog__contact-form">
            @include('pages.home.contact-form')
        </div>
    </div>

    @endwhile
@endsection
