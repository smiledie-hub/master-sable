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
        @include('pages/home/sets', ['title' => 'Популярные наборы', 'items' => [
        [
            'title' => 'СОБОЛЬ КРЯЖ',
            'text' => 'PREMIUM / 2 цвет / 1 седина / 60 шкурок / XL',
            'price' => '100 000 ₽',
            'image' => get_template_directory_uri().'/assets/images/sets/item1.jpg',
            'link' => "#"
        ],
        [
            'title' => 'СОБОЛЬ КРЯЖ',
            'text' => 'PREMIUM / 2 цвет / 1 седина / 60 шкурок / XL',
            'price' => '100 000 ₽',
            'image' => get_template_directory_uri().'/assets/images/sets/item2.jpg',
            'link' => "#"
        ],
        [
            'title' => 'СОБОЛЬ КРЯЖ',
            'text' => 'PREMIUM / 2 цвет / 1 седина / 60 шкурок / XL',
            'price' => '100 000 ₽',
            'image' => get_template_directory_uri().'/assets/images/sets/item3.jpg',
            'link' => "#"
        ],
        [
            'title' => 'СОБОЛЬ КРЯЖ',
            'text' => 'PREMIUM / 2 цвет / 1 седина / 60 шкурок / XL',
            'price' => '100 000 ₽',
            'image' => get_template_directory_uri().'/assets/images/sets/item4.jpg',
            'link' => "#"
        ]
    ]])
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
        @include('pages/home/quality', [
            'title' => 'Будьте уверены в качестве приобретаемого продукта',
            'image' => get_template_directory_uri().'/assets/images/quality/cover.jpg',
            'text' => '<p>В процессе приобретения бриллиантов и золота, покупателю важно удостовериться в чистоте
                            изделия.
                            Бренды Cartier, Chopard или Van Cleef & Arpels дают людям ощущение спокойствия и вызывают
                            полное
                            доверие за счет своей многолетней истории.</p>
                        <p>Master Sobol претендует на подобную позицию в мире меха. При покупке соболя, рыси, куницы,
                            наш
                            покупатель получает расширенную гарантию, подтверждающую качество материала.</p>'
            ])
    </div>
    <div class="home-contact-form">
        @include('pages.home.contact-form')
    </div>
    @endwhile
@endsection
