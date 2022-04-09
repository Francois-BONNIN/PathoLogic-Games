<section class="w-3/4 flex flex-col mx-auto">
    <div class="grid lg:grid-cols-3 gap-4 lg:gap-6">
        <div class="relative z-0 mb-6 w-full">
            <input type="text" name="floating_name" id="floating_name" class="floatingInput peer" placeholder=" " required />
            <label for="floating_name" class="floatingLabel">Nom</label>
        </div>
        <div class="relative z-0 mb-6 w-full">
            <input type="text" name="floating_phone" id="floating_phone" class="floatingInput peer" placeholder=" " required />
            <label for="floating_phone" class="floatingLabel">Téléphone</label>
        </div>
        <div class="relative z-0 mb-6 w-full">
            <input type="text" name="floating_email" id="floating_email" class="floatingInput peer" placeholder=" " required />
            <label for="floating_email" class="floatingLabel">Email</label>
        </div>
    </div>
    <div class="relative z-0 mb-16">
        <textarea rows="2" type="text" name="floating_message" id="floating_message" class="floatingInput peer" placeholder=" " required></textarea>
        <label for="floating_message" class="floatingLabel">Message</label>
    </div>

    <button type="submit" class="btn btn-wide btn-accent self-center text-xl font-bold">
        Envoyer
    </button>
</section>

