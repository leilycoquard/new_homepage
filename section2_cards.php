<section class="fourCards margin-top-section" aria-labelledby="4 raisons de faire confiance à Tcheen">
    
    <div class="container">
        <div>

            <div class="card card__1 active">
                <h4>Prestataires écofriendly et originaux</h4>
                <p>Nous sélectionnons et accompagnons nos prestataires dans leur démarche écoresponsable.</p>
            </div>

            <div class="card card__2">
                <h4>Devis instantané</h4>
                <p>Les prix standards sont affichés, vous pouvez voir d’un seul coup d’oeil si c’est le match parfait.</p>
            </div>

        </div>

        <div>
            <img src="" class="img__1 img__active" alt="Solange & Ginette">
            <img src="" class="img__2" alt="Solange & Ginette">
            <img src="" class="img__3" alt="Samos Greek Food">
            <img src="" class="img__4" alt="Domaine de la Chanterelle">
        </div>
        
        <div>

            <div class="card card__3">
                <h4>Sans surcoût</h4>
                <p>Sélectionnez les prestations et les options qui vous intéressent, le tout au même prix qu’en direct.</p>
            </div>

            <div class="card card__4">
                <h4>Service sécurisé</h4>
                <p>Vous profitez d’un cadre légal établi, d’une assistance en cas de pépin et nous vérifions la conformité de nos prestataires.</p>
            </div>

        </div>
    </div>

</section>

<script>
    function handleMouseover(e) {
        document.querySelector(".active").classList.remove("active");
        e.target.closest(".card").classList.add("active");
    }

    document.querySelectorAll(".card").forEach(card => card.addEventListener("mouseover", handleMouseover) );
    document.querySelectorAll(".card").forEach(card => card.addEventListener("click", handleMouseover) );
</script>