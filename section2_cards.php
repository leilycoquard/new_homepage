<section class="fourCards margin-top-section" aria-labelledby="4 raisons de faire confiance à Tcheen">
    
    <div class="container cards">

        <div class="two_cards">

            <div class="card card__1 active">

                <span class="svg svg__yellow"></span>

                <h4>Éco-responsable et original</h4>
                <p>La crème des prestataires sensibilisés à l’engagement durable.</p>

            </div>

            <div class="card card__2">
                <span class="svg svg__yellow"></span>

                <h4>Devis instantané</h4>
                <p>Obtenez le match parfait et votre devis en 2 minutes chrono !</p>
            </div>

        </div>

        <div class="img">
            <img src="webp\cards\s&g.webp" id="img__switch" alt="Solange & Ginette" loading="lazy">


        </div>
        
        <div class="two_cards">

            <div class="card card__3">
                <span class="svg svg__yellow"></span>

                <h4>100% Transparent</h4>
                <p>Nos frais de service sont transparents et sans surcoût sur vos prestations.</p>
            </div>

            <div class="card card__4">
                <span class="svg svg__yellow"></span>
                <h4>Accompagnement personnalisé</h4>
                <p>Nous vous accompagnons de A à Z avant et pendant votre événement.</p>
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
