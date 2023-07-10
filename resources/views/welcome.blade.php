@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <div class="row d-flex justify-content-center">
            <div class="logo_laravel">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Dropbox_Icon.svg/2202px-Dropbox_Icon.svg.png" alt="" class="img-fluid img_custom d-block mx-auto">
            </div>
            <h1 class="display-5 fw-bold text-center">
                Unisciti a oltre 700 milioni di utenti registrati che si affidano a Dropbox
            </h1>
    
            <div class="col-5  text-center">
                <p class="">Intuitivo, affidabile, privato e sicuro. Non stupisce che Dropbox venga scelto per l'archiviazione e la condivisione dei file più importanti.</p>
            
                <div class="">
                    <a href="https://github.com/lambia/LC-20230627-laravel-template" class="btn btn-primary p-3" type="button">io sono un bottone ma di dropbox</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content my-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://www.touringclub.it/sites/default/files/styles/gallery_full/public/immagini_georiferite/bologna_1.jpg?itok=yZs1aNl0" class="d-block w-100" alt="image_1">
                      </div>
                      <div class="carousel-item">
                        <img src="https://media.istockphoto.com/id/491391396/it/foto/venezia.jpg?s=612x612&w=0&k=20&c=Z_n9NZo8Fi6nYH4Eicwl5OjHasbLF_8ZBcOMKrd4KuQ=" class="d-block w-100" alt="image_2">
                      </div>
                      <div class="carousel-item">
                        <img src="https://siviaggia.it/wp-content/uploads/sites/2/2021/09/citta-piu-popolose.jpg?w=786&strip=all&quality=90" class="d-block w-100" alt="image_3">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection