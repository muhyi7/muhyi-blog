@extends('layout.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-4 fw-normal text-center">Form Register</h1>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating mb-2">
                        <input type="text" name="name" class="form-control rounded-top @error('name')
                            is-invalid
                        @enderror" id="name" placeholder="name" required value="{{ old('name') }}">
                        <label for="name">Nama</label>
                        @error('name')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" name="username" class="form-control @error('username')
                            is-invalid
                        @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-2">
                        <input type="email" name="email" class="form-control @error('email')
                            is-invalid
                        @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                        <label for="email">Email</label>
                        @error('email')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!-- Tambahkan dropdown untuk level -->
                    <div class="form-floating mb-2">
                        <select name="level" class="form-select" required>
                            <option value="penulis">Penulis</option>
                            <option value="pengunjung">Pengunjung</option>
                        </select>
                        <label for="level">Level</label>
                    </div>
                    <!-- Akhir dropdown level -->
                    <div class="form-floating mb-4">
                        <input type="password" name="password" class="form-control rounded-bottom @error('password')
                            is-invalid
                        @enderror" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg mt-3 btn-primary" type="submit">Daftar</button>
                </form>
                <small class="d-block text-center mt-3">Sudah Daftar? <a href="/login">Login Sekarang!</a></small>
            </main>
        </div>
    </div>
@endsection
