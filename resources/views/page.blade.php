@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
    <div class="page-template">
        <div class="container">
            @include('partials.page-header')

            <div class="content">
                @include('partials.content-page')
            </div>
        </div>
    </div>
    @endwhile
@endsection
