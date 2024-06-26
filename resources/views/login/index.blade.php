@extends('layout.main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-md-4">

            @if (session()->has('success'))
                 <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('loginErr'))
                 <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginErr') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif


            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-4 fw-normal text-center">Please login</h1>
                <form action="/login" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email')
                            is-invalid
                        @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" name="password" class="form-control @error('password')
                            is-invalid
                        @enderror" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                         @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-3">Belum Register? <a href="/register">Register Sekarang!</a></small>
            </main>
        </div>
    </div>


@endsection
