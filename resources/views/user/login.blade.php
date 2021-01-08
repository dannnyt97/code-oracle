@extends('layouts.main')

@section('title', 'Login')

@section('main')
<h1>Login below</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('user.login') }}" method="POST">
    @csrf

    <input type="text" name="loginUsername" placeholder="Username" value="{{ old('loginUsername') }}" required autofocus>
    <input type="password" name="loginPassword" placeholder="Password" required>
    <button type="submit">Login</button>
</form>
@endsection

