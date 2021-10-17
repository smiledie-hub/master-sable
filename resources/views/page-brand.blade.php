@extends('layouts.app')
@section('content')
    @while(have_posts()) @php the_post() @endphp

    <div class="singlepage-brand">
        <div class="singlepage-brand__banner">
            @include('pages/brand/banner')
        </div>

        <div class="singlepage-brand__mission">
            @include('pages/brand/mission')
        </div>

        <div class="singlepage-brand__command">
            @include('pages/brand/command')
        </div>

        <div class="singlepage-brand__declare">
            @include('pages/brand/declare')
        </div>
    </div>

    @endwhile
@endsection
