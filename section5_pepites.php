<section class="pepitesFestives margin-top-section" aria-labelledby="Des prestataires de qualité">

     <div class="container">

          <div class="h2-text">
               <h2>En manque d’inspiration ?</h2>
               <p>Voici notre sélection du mois, rien que pour vous.</p>
          </div>

          <div class="pepites owl-carousel">
               <div class="pepite pepite___one">
                    <div class="img__one">
                         <img src="a_supp/chateau.webp" alt="">
                    </div>
                    <p class="light">Lieu - Saint Léon</p>
                    <h4>Un événement d’exception</h4>
                    <p>Un château historique pour un événement d'exception ✨✨</p>
               </div>
               <div class="pepite pepite___two">
                    <div class="img__two">
                         <img src="a_supp/lille.webp" alt="">
                    </div>
                    <p class="light">Lieu - Lille</p>
                    <h4>Notre pépite Lilloise</h4>
                    <p>Un beau coworking à l'esprit coffee-shop pour vous réunir entre collaborateurs 🤯🤯</p>
               </div>
               <div class="pepite pepite___three">
                    <div class="img__three">
                         <img src="a_supp/salle.webp" alt="">
                    </div>
                    <p class="light">Haux</p>
                    <h4>Salle de réception 🎉</h4>
                    <p>Profitez du Château Peneau et de ses espaces merveilleux pour vous retrouver entre amis, collègues ou proches. ✨</p>
               </div>
               <div class="pepite pepite___four">
                    <div class="img__four">
                         <img src="a_supp/pause.webp" alt="">
                    </div>
                    <p class="light">Nourriture - Montpellier</p>
                    <h4>Une pause gourmande !</h4>
                    <p>On adore les recettes de saison, fraîches, et gourmandes de Boc D'Oc ! 😋</p>
               </div>
          </div>

     </div>

</section>

<script>
     $(document).ready(function(){
          $(".owl-carousel").owlCarousel( {
               autoplay: true,
               loop: true,
               lazyLoad:true,
               autoplayTimeout: 2000,
               autoplayHoverPause:true,
               margin: 40,
               responsive: {
               0: {
                    items: 1
               },
               600: {
                    items: 2
               },
               800: {
                    items: 3
               },
               1000: {
                    items: 4,
                    autoplay: false,
               }
               }
          });
     });

     $('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[3000])
     })
     $('.stop').on('click',function(){
     owl.trigger('stop.owl.autoplay')
     })
</script>