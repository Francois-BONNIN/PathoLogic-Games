@extends('layouts.master')

@section('title', 'Nous contacter')

@section('content')
    <div class="container mx-auto lg:h-[70vh] pt-[10vh] flex flex-col justify-evenly">
        <div class="mt-8 flex flex-col items-center gap-4">
            <h1>Contact</h1>
            <p class="text-center w-2/3">Prenez rendez-vous avec notre équipe, et nous vous contacterons afin de traiter votre demande.</p>
        </div>

        @include('components.contact-form')
    </div>
@endsection
