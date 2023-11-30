@extends('layouts.app')
@section('content')
    <div class="">
        {{-- navbar --}}
        @include('components.navbar-home')

        {{-- hero --}}
        @include('components.landing.hero')

        {{-- search --}}
        @include('components.landing.search')

        {{-- process --}}
        @include('components.landing.process')

        {{-- select car --}}
        @include('components.landing.select-car')

        {{-- footer --}}
        @include('components.footer')
    </div>
@endsection
