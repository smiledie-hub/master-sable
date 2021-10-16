@extends('layouts.app')
@section('content')
    @while(have_posts()) @php the_post() @endphp

    <div class="singlepage-contact">
        @include('pages/contact/content')
    </div>

    @endwhile
@endsection
