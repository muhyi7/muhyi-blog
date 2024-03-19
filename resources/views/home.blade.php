@extends('layout.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Selamat Datang di Website Saya</div>

                    <div class="card-body">
                        <h2>Halo, Nama Saya Ahmad Muhyiddin</h2>
                        <p>I'm a passionate for mobile and iot development</p>
                        <p>Silakan jelajahi proyek-proyek saya dan jangan ragu untuk menghubungi saya jika Anda memiliki pertanyaan atau peluang kolaborasi!</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <img src="project1.jpg" class="card-img-top" alt="Project 1">
                    <div class="card-body">
                        <h5 class="card-title">KampusKu</h5>
                        <p class="card-text">Merupakan Aplikasi yang menyediakan kemudahan untuk pendataan mahasiswa dikampus</p>
                        <a href="#" class="btn btn-primary">View Project</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="project2.jpg" class="card-img-top" alt="Project 2">
                    <div class="card-body">
                        <h5 class="card-title">Project 2</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique aliquam lectus, id laoreet quam sodales et.</p>
                        <a href="#" class="btn btn-primary">View Project</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="project3.jpg" class="card-img-top" alt="Project 3">
                    <div class="card-body">
                        <h5 class="card-title">Project 3</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique aliquam lectus, id laoreet quam sodales et.</p>
                        <a href="#" class="btn btn-primary">View Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
