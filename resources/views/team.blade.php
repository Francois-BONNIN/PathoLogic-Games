@extends('layouts.master')

@section('title', "L'Equipe")

@section('content')
    <div class="container mx-auto">
        <h1 class="my-12">L'équipe</h1>

        <div class="hexagon-big-container">
            <div class="hexagons-container hexa-first-container">
                @include('components.team-members.alexis')
                @include('components.team-members.sylvain')
                @include('components.team-members.ambre')
            </div>

            <div class="hexagons-container hexa-second-container">
                @include('components.team-members.francois')
                @include('components.team-members.alfie')
                @include('components.team-members.marvin')
            </div>
        </div>
    </div>

    <!-- Contact -->
    <div class="h-[70vh] flex flex-col justify-evenly rounded-md">
        <div class="mt-8 flex flex-col items-center gap-4">
            <h2 class="text-5xl">Contact</h2>
            <p class="text-center w-2/3 text-xl">Prenez rendez-vous avec notre équipe, et nous vous contacterons afin de traiter votre demande.</p>
        </div>

        @include('components.contact-form')
    </div>
@endsection
