@extends('layout.auth')

@section('content')
<main class="form-signin text-center">

    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf
        {{-- <a href="{{ route('home') }}">Home</a> --}}
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    
        <div class="form-floating">
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
            <label for="email">Email address</label>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            <label for="password">Password</label>
        </div>
    
        <button type="submit" class="w-100 btn btn-lg btn-primary">Sign in</button>
        <div class="mb-3">
            <a href="{{ route('register') }}">Register an account</a>
        </div>
    </form>
</main>
@endsection