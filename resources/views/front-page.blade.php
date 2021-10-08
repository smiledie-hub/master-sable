@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp

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
