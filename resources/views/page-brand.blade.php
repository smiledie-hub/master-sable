@extends('layouts.app')
@section('content')
    @while(have_posts()) @php the_post() @endphp

    <div class="singlepage-brand">

    </div>

    @endwhile
@endsection
