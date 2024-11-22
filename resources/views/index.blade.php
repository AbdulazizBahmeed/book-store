@extends('layouts.main')

@section('title', 'home')

@section('css')
<style>
    .hero {
        color: white;
        height: 80vh;
        width: 100%;
    }

    .hero .bg-image {
        z-index: -1;
        padding-top: 5rem;
        background-image: url('images/library-bg.jpg');
        filter: brightness(25%);
    }

    .book-info {
        padding-left: 10rem;
        width: 50%;
    }

    .book-img-container {
        width: 50%;
        position: relative;
    }

    .book-img-container::after {
        width: 30%;
        height: 130%;
        content: ' ';
        background-image: url('images/why-we-sleep.jpg');
        background-repeat: no-repeat;
        background-size: contain;
        position: absolute;
        top: 0;
        filter: blur(30px) brightness(200%);
        z-index: -1;
    }

    .book-img-container img {
        width: 12rem;
    }

    .books-section h5 {
        color: var(--primary-color);
        font-weight: bold;
    }

    .books-section-label::after {
        content: "";
        background: var(--primary-color);
        position: absolute;
        bottom: -0.5rem;
        left: 1rem;
        height: 20%;
        width: 7ch;
    }

    .books-list {
        gap: 6rem;
    }
</style>
@endsection

@section('content')
<!-- start hero section -->
<div class="hero position-relative d-flex  align-items-center">
    <div class="bg-image position-absolute w-100 h-100 t-0 l-0"></div>

    <div class="w-100 d-flex justify-content-center align-items-center">

        <div class="book-info h-100">
            <h1 class="">why we sleep</h1>
            <p class="mt-3">Mathew Walker, PhD</p>
            <button type="button" class="btn btn-primary btn-rounded mt-4" data-mdb-ripple-init>borrow</button>
        </div>

        <div class="book-img-container d-flex justify-content-center">
            <img src="{{URL::asset('images/why-we-sleep.jpg')}}">
        </div>
    </div>
</div>
<!-- end hero section -->

<!-- start books list -->

<div class="books-section p-5 w-100">
    <h5 class="books-section-label ps-3 mb-5 position-relative">books</h5>
    <div class="books-list d-flex justify-content-start container-fluid flex-wrap">
        @for ($i = 0; $i < 10; $i++)
            <x-book-card :id=$i></x-book-card>
            @endfor
    </div>
</div>
<!-- end book list -->


@endsection

@section('scripts')

@endsection