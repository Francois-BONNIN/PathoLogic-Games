@extends('layouts.master')

@section('title', 'Notre studio')

@section('content')
    <div class="bg-cover bg-center lg:h-[100vh] " style="background-image:url({{ asset('img/Background/bg-apropos.png')}});">
        <div class="bg-night-blue bg-opacity-90 h-full">
            <div class="aboutus container mx-auto pt-[12vh]">
                <div class="aPropos font-bold">
                    <span class="text-red uppercase text-xl">Pathologic games</span>
                    <h1 class="pt-2">À propos</h1>
                </div>
                <div class="deNous pt-2">
                    <p class="text-right text-6xl uppercase rotate-90 translate-x-[4rem] md:-translate-x-4 translate-y-[6rem] whitespace-nowrap font-bold">De nous</p>
                </div>
                <div class="relative mainPerso h-full">
                        <img class="absolute bottom-[50%] right-[20%] h-full w-full object-contain top-0 right-0" src="{{ asset('img/mediumshat/perso_final.png') }}">
                </div>
                <div class="paragraph self-center pl-2">
                    <p>Pathologic Games est un studio de développement indépendant créé en 2021 et basé à Toulouse, en France. Le studio regroupe une dizaine de personnes dont des développeurs, des artistes et des webdesigners. L’équipe de Pathologic Games est variée, jeune, dynamique et n’a qu’un seul objectif commun : créer des jeux uniques et authentiques afin que les joueurs, amateurs ou chevronnés, puissent découvrir, explorer, s’amuser.</p>
                </div>
                <div class="aboutus-stats">
                    <div class="about-stat">
                        <p class="title">équipe</p>
                        <p class="value">16</p>
                        <p class="text">Constitué d'étudiants <br> et de professionnels</p>
                    </div>
                    <div class="about-stat">
                        <p class="title">Jeux</p>
                        <p class="value">3</p>
                        <p class="text">Bientôt disponible sur <br> les grandes plateformes</p>
                    </div>
                    <div class="about-stat">
                        <p class="title">Ydays</p>
                        <p class="value">12</p>
                        <p class="text">séances uniques <br> et enrichissantes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->
    <div class="xl:h-[70vh] flex flex-col justify-evenly rounded-md pt-[4rem] xl:pt-8">
        <div class="mt-8 flex flex-col items-center gap-4">
            <h2 class="text-5xl">Contact</h2>
            <p class="text-center w-2/3 text-xl">Prenez rendez-vous avec notre équipe, et nous vous contacterons afin de traiter votre demande.</p>
        </div>

        @include('components.contact-form')
    </div>
@endsection
