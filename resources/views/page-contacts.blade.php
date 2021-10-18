@extends('layouts.app')
@section('content')
    @while(have_posts()) @php the_post() @endphp

    <div class="singlepage singlepage-contacts singlepage--top-padding">
        @include('pages/contacts/content')
    </div>

    @endwhile
@endsection
