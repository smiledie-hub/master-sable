@extends('layouts.app')

@section('content')
    <div class="container">
        @include('partials.page-header')

        @if (!have_posts())
            <div class="page-template">
                {{ __('Извините, но страница, которую вы пытались просмотреть, не существует.', 'sage') }}
                {!! get_search_form(false) !!}
            </div>
        @endif
    </div>
@endsection