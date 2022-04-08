@extends('layouts.master')

@section('title', "Medium's Hat")

@section('content')
    <div>
        <h1 class="my-12">Medium's Hat</h1>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="font-sans antialiased text-night-blue leading-normal tracking-wider bg-cover" >
        <div class="w-[90%] flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">

            <div id="profile" class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">


                <div class="flex flex-col p-4 md:p-12 text-center lg:text-left">

                    <h1 class="text-3xl font-bold pt-8 lg:pt-0">Your Name</h1>
                    <div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-green-500 opacity-25"></div>
                    <p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start"> What you do</p>
                    <p class="pt-2 text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start"> Your Location - 25.0000° N, 71.0000° W</p>
                    <p class="pt-8 text-sm">Totally optional short description about yourself, what you do and so on.</p>

                    <div class="pt-12 pb-8">
                        <button class="btn disabled bg-green-700 hover:bg-green-900 font-bold py-2 px-4">
                            Bientôt disponible
                        </button>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-2/5">
                <img src="{{ asset('img/mediumshat/main_perso.png')}}" class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">
            </div>

        </div>

    </div>

@endsection
