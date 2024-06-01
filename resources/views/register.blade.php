@extends('layout.master')
@section('title', 'Register')
@section('content')

    <div class="register-container">
        <h2>Register</h2>
        <form action="/register" method="get">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <button type="submit" class="register-button">Register</button>
        </form>
        <div class="divider">
            <span>or continue with</span>
        </div>
        <button class="google-button">
            <img src="img/google-G-logo.png" alt="Google logo">
        </button>
    </div>

@endsection