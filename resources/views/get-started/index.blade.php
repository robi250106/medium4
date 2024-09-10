@extends('layouts.app', ['title' => 'Get Started'])

@section('content')
    <div class="container">
        <div class="get-started-card">
            <div class="get-started-header">
                <h2>Get Started</h2>
            </div>
            <div class="get-started-body">
                <p>Welcome to our platform! To get started, please follow the steps below:</p>
                <ol>
                    <li>Create an account by signing up.</li>
                    <li>Verify your email address.</li>
                    <li>Complete your profile to get personalized recommendations.</li>
                </ol>
                <a href="{{ route('story') }}" class="btn btn-primary">Masuk ke our story</a>
            </div>
        </div>
    </div>
@endsection
