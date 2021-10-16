@extends('layouts.app')
@section('content')
    @while(have_posts()) @php the_post() @endphp

    <div class="singlepage-our-production">
        <div class="singlepage-our-production__banner">
            @include('pages/our-production/banner')
        </div>
        <div class="singlepage-our-production__classification">
            @include('pages/our-production/classification')
        </div>
        <div class="singlepage-our-production__palette">
            @include('pages/our-production/palette')
        </div>
        <div class="singlepage-our-production__offer">
            @include('pages/home/offer', ['title' => 'Осуществляем комплексную поставку', 'text' => 'Консультируем относительно качества прикладных материалов и разницы в классификации.'])
        </div>
        <div class="singlepage-our-production__geography">
            @include('pages/our-production/geography')
        </div>
        <div class="singlepage-our-production__block-image">
            @include('pages.our-production.block-image')
        </div>
        <div class="singlepage-our-production__guarantee">
            @include('pages/our-production/guarantee')
        </div>
        <div class="singlepage-our-production__certificates">
            @include('pages/our-production/certificates')
        </div>
        <div class="singlepage-our-production__reviews">
            @include('pages/our-production/reviews')
        </div>
        <div class="singlepage-our-production__best-product">
            @include('pages/home/quality', [
            'title' => 'Мы не только говорим, что предлагаем лучший товар, но и доказываем это на деле!',
            'image' => get_template_directory_uri().'/assets/images/our-production/img2.jpg',
            'text' => '<p>В меховой индустрии, как и в мире драгоценных камней, качество продукта может
                    увидеть только специалист. Мы
                    готовы приоткрыть завесу тайны и и показать каждому нашему клиенту способ отличить по-настоящему
                    качественный мех соболя от других категорий.</p>
                <a href="#" class="link link--default link--weight">Записаться на консультацию <span
                            class="link__icon icon-long-arrow"></span></a>'
            ])
        </div>
    </div>

    @endwhile
@endsection
