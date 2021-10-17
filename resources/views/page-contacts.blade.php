@extends('layouts.app')
@section('content')
    @while(have_posts()) @php the_post() @endphp

    <div class="singlepage-contacts">
        @include('pages/contacts/content')
    </div>

    @endwhile
@endsection
