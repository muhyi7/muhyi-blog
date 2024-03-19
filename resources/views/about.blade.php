@extends('layout.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">About Me</div>

                <div class="card-body">
                    <h2>Halo Saya {{ $name }}</h2>
                    <p>Saya Adalah Mahasiswa Teknik Informatika di {{ $university }}.</p>
                    <p>Passion saya ada di mobile dan IoT.</p>
                    <p>Silakan jelajahi proyek-proyek saya dan jangan ragu untuk menghubungi saya jika Anda memiliki pertanyaan atau peluang kolaborasi!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-6">
            <div class="card">
                <img src="img/{{ $image }}" class="card-img-top" alt="{{ $name }}" style="max-width: 100%; height: auto;">
                <div class="card-body">
                    <p class="card-text">Foto profil Anonymous</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Informasi Personal</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Nama:</strong> {{ $name }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $email }}</li>
                        <li class="list-group-item"><strong>Universitas:</strong> {{ $university }}</li>
                        <li class="list-group-item"><strong>Jurusan:</strong> Teknologi Informasi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
