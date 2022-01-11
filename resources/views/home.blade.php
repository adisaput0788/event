@extends('layouts.main')

@section('container')
<div class="container-fluid mb-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
     <div class="carousel-indicators">
       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
     </div>
     <div class="carousel-inner">
       <div class="carousel-item active">
         <img src="{{ asset('utama/1.jpeg') }}" class="img-fluid d-block w-100">
       </div>
       <div class="carousel-item">
         <img src="{{ asset('utama/1.jpeg') }}" class="d-block w-100">
       </div>
       <div class="carousel-item">
         <img src="{{ asset('utama/1.jpeg') }}" class="d-block w-100">
       </div>
     </div>
     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="visually-hidden">Previous</span>
     </button>
     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="visually-hidden">Next</span>
     </button>
   </div>
 </div>
 <div class="container mb-5">
    <div class="welcome_inner row">
        <div class="col-lg-5">
            <div class="welcome_img">
                <img class="img-fluid" src="{{ asset('utama/welcome.jpg') }}" alt="">
            </div>
        </div>
        <div class="col-lg-6 offset-lg-1">
            <div class="welcome_text">
                <h3>Event IAPI</h3>
                <p>Institut Akuntan Publik Indonesia (IAPI) adalah suatu lembaga / organisasi Akuntan Publik di Indonesia. IAPI berkomitmen untuk menaikkan peran Akuntan Publik di Indonesia. Oleh karena itu IAPI menyelenggarakan event-event tentang Akuntan, Audit dan event lainnya.</p>
            </div>
        </div>
    </div>
 </div>
@endsection