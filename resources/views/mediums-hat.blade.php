@extends('layouts.master')

@section('title', "Medium's Hat")

@section('content')
    <section class="bg-contain bg-center lg:h-screen" style="background-image:url({{ asset('img/mediumshat/lmenu.jpg')}});">
        <div class="bg-black bg-opacity-80 h-full">
            <div class="container w-[90%] lg:w-full flex flex-wrap items-center h-auto mx-auto pt-[15vh]">
                <div class="w-full lg:w-3/5 rounded-md lg:rounded-l-md lg:rounded-r-none lg:mx-0">
                    <div class="flex flex-col px-4 py-4 md:px-12 md:py-12 text-center lg:text-left">
                        <h1 class="text-3xl font-bold pt-8 lg:pt-0">Medium's Hat</h1>
                        <div class="mx-auto lg:mx-0 w-1/3 pt-3 border-b-2 border-red"></div>
                        <p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start"> Type : Point'n'Click</p>
                        <p class="pt-2 text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start"> Date de sortie : 2023</p>
                        <p class="pt-8 text-sm">Medium’s Hat est un jeu vidéo 2D narratif où l’on incarne un détective privé, menant différentes enquêtes à différents endroits d’une Angleterre d’avant guerre, au début du XIXe siècle, tout en cherchant désespérément l’assassin de sa famille, dont il n’a qu’une seule piste, le chapeau de ce même meurtrier. <br> <br>
                            Enfin, le personnage principal est médium, et possède la capacité de voir au travers des yeux du tueur en s’habillant du chapeau du tueur qu’il recherche, permettant de voir de nouveaux indices et d'échanger avec les défunts.
                        </p>
                        <div class="pt-8 pb-4">
                            <button class="btn btn-primary font-bold py-2 px-4">
                                Bientôt disponible
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-2/5">
                    <img src="{{ asset('img/mediumshat/logo.png')}}" class="object-cover rounded-none lg:rounded-md hidden lg:block mx-auto">
                </div>
            </div>
        </div>
    </section>
@endsection
