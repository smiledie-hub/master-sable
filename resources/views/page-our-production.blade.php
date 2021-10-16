@extends('layouts.app')
@section('content')
    @while(have_posts()) @php the_post() @endphp

    <div class="home-offer">
        @include('pages/home/offer', ['title' => 'Осуществляем комплексную поставку', 'text' => 'Консультируем относительно качества прикладных материалов и разницы в классификации.'])
    </div>

    @endwhile
@endsection
