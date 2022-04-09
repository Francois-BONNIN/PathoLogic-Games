<footer class="footer p-10 text-base-content justify-between lg:justify-items-center text-white">
    <div>
        <div>
            <span class="text-red text-3xl font-bold">Pathologic Games</span>
            <p>Studio</p>
        </div>
        <p>2 place de l'Europe<br>31000 Toulouse</p>
        <div class="mt-4">
            <span class="font-bold">Réseaux sociaux:</span>
            <div class="flex flex-nowrap mt-1 gap-2.5">
                <a href="https://www.instagram.com/pathologicgame/" target="_blank">
                    <img src="{{ asset('img/instagram.svg') }}" alt="">
                </a>
                <a href="https://www.instagram/pathologicgame" target="_blank">
                    <img src="{{ asset('img/twitter.svg') }}" alt="">
                </a>
            </div>
        </div>
    </div>
    <div>
        <span class="footer-title">Plan du site</span>
        <a class="link link-hover">Accueil</a>
        <a class="link link-hover">Jeux</a>
        <a class="link link-hover">A propos</a>
        <a class="link link-hover">Contact</a>
    </div>
    <div>
        <span class="footer-title">Adhérez à notre <br> Newsletter</span>
        <div class="form-control w-80">
            <div class="relative">
                <input type="text" placeholder="e-mail" class="input input-bordered h-[2.3rem] w-full pr-16">
                <button class="btn btn-primary absolute top-[-16%] right-0 rounded-l-none scale-[1.12]">
                    <img src="{{ asset('img/Icon material-send.svg') }}" alt="">
                </button>
            </div>
        </div>
        <div>
            <p>Copyright <?php echo date("Y"); ?></p>
            <p>Tous les droits réservés</p>
        </div>
    </div>

</footer>
