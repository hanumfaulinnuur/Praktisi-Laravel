@extends('_layouts.app')

@section('content')
<section class="py-5">
    <div class="container bg-light p-5" style="border-radius: 20px;">
        <div class="row my-8">
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    
                    <h2>Selamat Datang Website Perpustakaan Nasional <hr><b>Membaca Semakin Mudah</b></h2>
                    <p class="text-secondary"><br> Baca buku, berbagi koleksi bacaan dan bersosialisasi secara <br>bersamaan. Di mana pun, kapan pun dengan nyaman bersama setiap orang.</p>
                    

                    <a href="{{ url("user/register") }}" class="btn btn-primary"><b>Registration Now</b></a>
                </div>
            </div>
            <div class="col-md-6">
                <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset("assets/images/buku1.jpg") }}" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset("assets/images/buku2.jpg") }}" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset("assets/images/buku3.jpg") }}" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection