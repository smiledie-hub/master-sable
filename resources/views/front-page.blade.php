@extends('layouts.app')
@section('content')
    @while(have_posts()) @php the_post() @endphp

    <div class="home-banner">
        @include('pages/home/banner')
    </div>

    <div class="home-unique">
        @include('pages/home/unique')
    </div>

    <div class="home-sets">
        @include('pages/home/sets')
    </div>

    <div class="home-offer">
        @include('pages/home/offer', ['title' => 'Предложение для профессионалов', 'text' => 'Помимо оптовой и розничной продажи меховых наборов, мы предлагаем комплексные поставки, включающие в себя все
                    необходимые материалы для изготовления продукции высокого качества, а также предоставляем возможность
                    изготовления изделий по эскизам.', 'partner' => true])
    </div>

    <div class="home-jewel">
        @include('pages/home/jewel')
    </div>
    <div class="home-quality">
        @include('pages/home/quality')
    </div>
    <div class="home-contact-form">
        @include('partials/contact-form')
    </div>
    @endwhile
@endsection
