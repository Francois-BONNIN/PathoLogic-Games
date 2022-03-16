@extends('layouts.master')

@section('content')
    <div class="hero flex flex-col lg:flex-row">
        <div class="heroText flex flex-col">
            <h1>Bienvenue au studio</h1>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            <a href="" class="btn btn-sm btn-primary ">Découvrir</a>
        </div>
        <div class="heroMenu  flex flex-col md:flex-row lg:flex-row">
            <div>
                <img src="{{asset('/img/game.jpg')}}" alt="">
            </div>
            <div>
                <img src="{{asset('/img/lamp.jpg')}}" alt="">
            </div>
            <div>
                <img src="{{asset('/img/logic.jpg')}}" alt="">
            </div>
        </div>
    </div>
@endsection
