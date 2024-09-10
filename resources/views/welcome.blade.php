@extends('layouts.app', ['title' => 'Home'])

@section('content')
    <div style="display: flex; align-items: center; justify-content: space-between; margin: 0 auto; max-width: 1200px; padding: 50px 20px;">
        <div style="flex: 1;">
            <h1 style="font-family: 'Charter', serif; font-weight: 500; font-size: 6em; line-height: 1.2; margin-bottom: 20px;">
                HUMAN <br />
                stories & ideas
            </h1>
            <p style="font-family: 'KievitOT', sans-serif; font-size: 1.6em; line-height: 1.5; margin-bottom: 30px; color: #4a4a4a;">
                A place to read, write, and deepen your understanding.
            </p>

            <a href="#" class="btn btn-light rounded-pill" style="background-color: #1a1a1a; color: #fff; font-size: 1.5em; padding: 15px 40px;">
                Start reading
            </a>
        </div>
        <div style="flex: 1; text-align: center;">
            <img src="{{ asset('img/home.webp') }}" alt="Home Image" style="max-width: 70%; height: auto; border-radius: 8px;">
        </div>
    </div>
@endsection
