@extends('layouts.master')

@section('title', 'Accueil')

@section('content')
    <!-- Hero -->
    <section class="bg-cover" style="background-image:url({{ asset('img/Background/bg-hero.png')}});">
        <div class="bg-night-blue  bg-opacity-90">
            <div class="container mx-auto hero flex flex-col lg:flex-row pt-[10vh]">
                <div class="heroText flex flex-col">
                    <h1 class="font-bold">Bienvenue au studio</h1>
                    <p>Pathologic Games est un studio de développement indépendant créé en 2021 et basé à Toulouse, en France.
                        Le studio regroupe une dizaine de personnes dont des artistes, des créatifs et des développeurs. Notre ambition est de proposer du divertissement vidéoludique mélangeant scénario atypique et gameplay original.
                    </p>
                    <a href="" class="btn btn-sm btn-primary ">Découvrir</a>
                </div>
                <div class="heroMenu flex flex-col md:flex-row lg:flex-row">
                    <div class="hero-items-Menu" style="background-image:url({{ asset('img/home/game.jpg')}});">
                        <div class="filterShadow"></div>
                        <div class="hero-items">
                            <img src="{{asset('img/home/Joystick.svg')}}">
                            <h3>Jeux</h3>
                            <p>Pathologic Games est un studio junior créé en 2021. Nous travaillons actuellement sur notre premier jeux, Medium’s Hat, un jeu vidéo 2D de type point'n'clik mêlant habilement gameplay et narration. Le jeu mettra le joueur dans la peau de Georges, un medium capable de parler avec les victimes d'un tueur en série en portant le chapeau melon de ce dernier.</p>
                            <a class="btn btn-primary" href="{{ route('mediums-hat') }}">Découvrir</a>
                        </div>
                    </div>
                    <div class="hero-items-Menu" style="background-image:url({{ asset('img/home/lamp.jpg')}});">
                        <div class="filterShadow"></div>
                        <div class="hero-items">
                            <img src="{{asset('img/home/Search.svg')}}">
                            <h3>A propos</h3>
                            <p>Créé dans le but de proposer des expériences vidéoludiques uniques et impactantes, Pathologic Games donne une grande importance à l’écriture de ses projets ainsi qu’à la conception du gameplay. L’équipe junior, dynamique et avertie, mène sa réflexion dans cet unique objectif.</p>
                            <a class="btn btn-primary" href="{{ route('aboutus') }}">Découvrir</a>
                        </div>
                    </div>
                    <div class="hero-items-Menu" style="background-image:url({{ asset('img/home/logic.jpg')}});">
                        <div class="filterShadow"></div>
                        <div class="hero-items">
                            <img src="{{asset('img/home/Team.svg')}}">
                            <h3>L'équipe</h3>
                            <p>Composée de développeurs, d’artistes et de webdesigners, l’équipe de Pathologic Games est variée, jeune et dynamique. Elle n’a qu’un seul objectif commun : créer des jeux uniques et authentiques afin que les joueurs, amateurs ou chevronnés, puissent découvrir, explorer, s’amuser.</p>
                            <a class="btn btn-primary" href="{{ route('team') }}">Découvrir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Actualités -->
    <section class="relative">
        <div class="absolute -top-12 right-0 left-0 z-0 h-full bg-contain bg-no-repeat bg-center" style="background-image:url({{ asset('img/Background/bg-actu.png')}});"></div>
        <div class="container h-full mx-auto my-12 z-10 sm:px-2">
            <h2 class="text-5xl my-16 text-center md:text-left">Actualités</h2>
            <div class="grid auto-cols-auto lg:grid-cols-2 gap-12">
                @include('components.actualites.thumbnail1')
                @include('components.actualites.thumbnail2')
                @include('components.actualites.thumbnail3')
                @include('components.actualites.thumbnail4')
            </div>
        </div>
    </section>

    <!-- Contact -->
    <div class="flex flex-col justify-evenly rounded-md md:my-16 md:py-16">
        <div class="flex flex-col items-center gap-4">
            <h2 class="text-5xl">Contact</h2>
            <p class="text-center w-2/3 text-xl">Prenez rendez-vous avec notre équipe, et nous vous contacterons afin de traiter votre demande.</p>
        </div>

        @include('components.contact-form')
    </div>

    <!-- Map -->
    <section class="relative pt-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2888.814281215378!2d1.4292946511316222!3d43.610408379020406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebb428a42b9a9%3A0xb4032b573c53338!2sPlace%20de%20l&#39;Europe%2C%2031000%20Toulouse!5e0!3m2!1sfr!2sfr!4v1649548006848!5m2!1sfr!2sfr" width="100%" height="300" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection
