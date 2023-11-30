@extends('layouts.app')

@section('content')
    @if (Auth::user()->is_admin)
        @include('components.navbar-dashboard')
        <div class="py-5">
            @include('components.dashboard.admin-dashboard')
        </div>
    @else
        <p>user dashboard</p>
    @endif
@endsection
