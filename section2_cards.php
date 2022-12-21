<section class="fourCards margin-top-section" aria-labelledby="4 raisons de faire confiance à Tcheen">
    
    <div class="container cards">

        <div class="two_cards">

            <div class="card card__1 active">

                <span class="svg svg__yellow"></span>

                <h4>Prestataires écofriendly et originaux</h4>
                <p>Nous sélectionnons et accompagnons nos prestataires dans leur démarche écoresponsable.</p>

            </div>

            <div class="card card__2">
                <span class="svg svg__yellow"></span>

                <h4>Devis instantané</h4>
                <p>Les prix standards sont affichés, vous pouvez voir d’un seul coup d’oeil si c’est le match parfait.</p>
            </div>

        </div>

        <div class="img">
            <img src="webp\cards\s&g.webp" id="img__switch" alt="Solange & Ginette" loading="lazy">


        </div>
        
        <div class="two_Cards">

            <div class="card card__3">
                <span class="svg svg__yellow"></span>

                <h4>Sans surcoût</h4>
                <p>Sélectionnez les prestations et les options qui vous intéressent, le tout au même prix qu’en direct.</p>
            </div>

            <div class="card card__4">
                <span class="svg svg__yellow"></span>
                <h4>Service sécurisé</h4>
                <p>Vous profitez d’un cadre légal établi, d’une assistance en cas de pépin et nous vérifions la conformité de nos prestataires.</p>
            </div>

        </div>
    </div>

    <script>
    
        $(document).ready(function(){
    
            function handleMouseover(e) {

                document.querySelector(".active").classList.remove("active");
                var img = document.getElementById("img__switch");
                e.target.closest(".card").classList.add("active");
    
                if (e.target.classList.contains("card__1")) {
                    img.src="webp/cards/s&g.webp";
                    img.alt = "Solange & Ginette";
    
                } else if (e.target.classList.contains("card__2")) {
                    img.src="webp/cards/samos.webp";
                    img.alt = "Samos Greek Food";
    
                } else if (e.target.classList.contains("card__3")){
                    img.src="webp/cards/donvent.webp";
                    img.alt = "Le Don du Vent";

                } else if (e.target.classList.contains("card__4")) {
                    img.src="webp/cards/fredeville.webp";
                    img.alt = "Frédeville Organisation";
                }
    
            }
    
            document.querySelectorAll(".card").forEach(card => card.addEventListener("mouseover", handleMouseover) );
            document.querySelectorAll(".card").forEach(card => card.addEventListener("click", handleMouseover) );
        });
    
    </script>
</section>
