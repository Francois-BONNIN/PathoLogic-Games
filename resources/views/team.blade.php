@extends('layouts.master')

@section('content')
    <div>
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
@endsection
