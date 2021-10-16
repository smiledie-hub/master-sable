@extends('layouts.app')
@section('content')
    @while(have_posts()) @php the_post() @endphp

    <div class="singlepage-brand">
        @include('pages/our-partners/banner')
        @include('pages/our-partners/partners')
        @include('pages/our-partners/advantages')
    </div>

    @endwhile
@endsection
