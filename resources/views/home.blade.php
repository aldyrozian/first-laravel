@extends('layouts.main')

@section('container')
    <!-- Body -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{URL::asset('/img/img-header01.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Aldy Rozian</h5>
                    <p>Saya gemar belajar sesuatu yang baru</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{URL::asset('/img/img-header02.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Aldy Rozian</h5>
                    <p>Pengalaman adalah pembelajaran terbaik</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{URL::asset('/img/img-header03.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Aldy Rozian</h5>
                    <p>Saya senang bisa belajar laravel</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                <h2>About Me</h2>
                <h5>Aldy Rozian</h5>
                <div>
                    <img src="{{URL::asset('/img/aboutme-aldy001.jpg')}}" class="aboutimg">
                </div>
                <p class="justify">Bandung Kelahiran tahun 2000, Teknik Informatika Universitas Jenderal Achmad Yani
                    Cimahi</p>

                <h3 class="mt-4">Contact Me</h3>
                <p>click link below</p>
                <ul>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com/aldyrozian/">Instagram</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.linkedin.com/in/aldyrozian/">Linkedin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/katateki.shimozikato">facebook</a>
                    </li>
                </ul>
                <hr class="d-sm-none">
            </div>
            <div class="col-sm-8">
                <h2>Introduction</h2>
                <h5>628987742260 | aldyrozian@hotmail.com | www.linkedin.com/in/aldyrozian/</h5>
                <div>
                    <img src="{{URL::asset('/img/aboutme-aldy002.jpg')}}" class="aboutimg">
                </div>
                <p class="justify">student majoring in computer science/informatics at University Jenderal Achmad Yani
                    who is active in campus organizations, Have an interest in cloud engineering and data analyst,
                    reliable in programming languages, proficient in problem-solving and critical thinking, and
                    Currently looking for an internship experience, especially in the field of data analyst and software
                    engineering</p>

                <h2 class="mt-5">Education Level</h2>
                <h5>From aug 2019 to Now</h5>
                <div>
                    <img src="{{URL::asset('/img/aboutme-aldy06.jpg')}}" class="aboutimg">
                </div>
                <p>Some text..</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco.</p>
            </div>
        </div>
    </div>

<!-- end Body -->
@endsection