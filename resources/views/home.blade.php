@extends('layouts.master')

@section('content')
    <div class="hero flex flex-col lg:flex-row">
        <div class="heroText flex flex-col">
            <h1>Bienvenue au studio</h1>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
            <a href="" class="btn btn-sm btn-primary ">Découvrir</a>
        </div>
        <div class="heroMenu flex flex-col md:flex-row lg:flex-row">
            <div class="hero-items-Menu" style="background-image:url({{ asset('img/home/game.jpg')}});">
                <div class="filterShadow"></div>
                <div class="hero-items">
                    <img src="{{asset('img/home/Joystick.svg')}}">
                    <h3>Jeux</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                    <a class="btn btn-primary" href="{{ route('mediums-hat') }}">Découvrir</a>
                </div>
            </div>
            <div class="hero-items-Menu" style="background-image:url({{ asset('img/home/lamp.jpg')}});">
                <div class="filterShadow"></div>
                <div class="hero-items">
                    <img src="{{asset('img/home/Search.svg')}}">
                    <h3>A propos</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                    <a class="btn btn-primary" href="{{ route('aboutus') }}">Découvrir</a>
                </div>
            </div>
            <div class="hero-items-Menu" style="background-image:url({{ asset('img/home/logic.jpg')}});">
                <div class="filterShadow"></div>
                <div class="hero-items">
                    <img src="{{asset('img/home/Team.svg')}}">
                    <h3>L'équipe</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                    <a class="btn btn-primary" href="{{ route('team') }}">Découvrir</a>
                </div>
            </div>
        </div>
    </div>
@endsection
