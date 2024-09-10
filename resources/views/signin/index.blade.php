@extends('layouts.app', ['title' => 'Sign In'])

@section('content')
    <div class="container">
        <div class="signin-card">
            <div class="signin-header">
                <h2>Sign In</h2>
            </div>
            <div class="signin-body">
                <form action="{{ route('get-started') }}" method="Get Started">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign In</button>
                </form>
            </div>
        </div>
    </div>
@endsection
