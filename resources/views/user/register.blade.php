@extends('layouts.main')

@section('title', 'Register for an account')

@section('main')
<h1>Register below</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('user.register') }}" method="POST">
    @csrf

    <input type="text" name="registerFullName" placeholder="Full Name" value="{{ old('title') }}" required autofocus>
    <input type="text" name="registerUsername" placeholder="Username" value="{{ old('title') }}" required>
    <input type="password" name="registerPassword" placeholder="Password" required>
    <input type="password" name="registerPasswordConfirmation" placeholder="Re-enter Password" required>
    <button type="submit">Login</button>
</form>
@endsection