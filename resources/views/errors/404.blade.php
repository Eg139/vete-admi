@extends('layouts.error')

@section('title', 'Page Not Found')

@section('content')
    <div class="error-container">
        <i class="ti ti-paw-filled icon-error"></i>
        <div class="error-code">404</div>
        <div class="error-message">Oops! Page Not Found</div>
        <p class="text-muted">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
        <a href="{{ url('/') }}" class="btn btn-primary home-link">Go to Homepage</a>
    </div>
@endsection
