@extends('layout.auth')

@section('content')
<main class="form-signin text-center">
    <form action="{{ route('register') }}" method="POST">
        @csrf
        {{-- <a href="{{ route('home') }}">Home</a> --}}
        <h1 class="h3 mb-3 fw-normal">Please register</h1>
    
        <div class="form-floating">
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}" autofocus required>
            <label for="name">Username</label>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" value="{{ old('email') }}" required>
            <label for="email">Email address</label>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
            <label for="password">Password</label>
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    
        <button type="submit" class="w-100 btn btn-lg btn-primary">Register</button>
        <div class="mb-3">
            <a href="{{ route('login') }}">Have an account?</a>
        </div>
    </form>
</main>
@endsection