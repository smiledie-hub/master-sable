@extends('layouts.app')
@section('content')
    @while(have_posts()) @php the_post() @endphp

    <div class="singlepage-product">
        <div class=singlepage-product__sets">
            @include('pages/home/sets', ['title' => 'Наборы с похожими характеристиками', 'items' => [
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
                ],
                [
                 'title' => 'СОБОЛЬ КРЯЖ',
                 'text' => 'PREMIUM / 2 цвет / 1 седина / 60 шкурок / XL',
                 'price' => '100 000 ₽',
                 'image' => get_template_directory_uri().'/assets/images/sets/item1.jpg',
                 'link' => "#"
                ]
            ]])
        </div>
    </div>

    @endwhile
@endsection
