@extends('layouts.master')

@section('title', 'Notre studio')

@section('content')
    <div class="container mx-auto h-[80vh]">
        <div>
            <h1>A propos de PathoLogic Games</h1>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
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
