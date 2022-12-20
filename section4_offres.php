<section class="offres margin-top-section" aria-labelledby="Deux offres Tcheen">

    <div class="container">

        <div class="accordion" role="tablist" aria-live="polite" data-behavior="accordion">

            <article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
                <span class="accordion__title" aria-controls="panel-1" role="tab" aria-selected="false" aria-expanded="false" data-binding="expand-accordion-trigger">
                    <svg width="52" height="52" viewBox="0 0 52 52" xmlns="http://www.w3.org/2000/svg" loading="lazy">
                        <path d="M17.6571 1.46037C24.1459 -0.791579 31.2669 -0.408294 37.4729 2.52695C40.9486 4.197 44.0137 6.60364 46.4526 9.57752C48.8915 12.5514 50.6448 16.0203 51.5893 19.74C52.5338 23.4597 52.6465 27.3399 51.9194 31.1076C51.1923 34.8753 49.6431 38.4388 47.3808 41.5475C46.353 42.911 45.1974 44.1747 43.9296 45.3215C42.67 46.4455 41.3166 47.461 39.8839 48.3572C36.9323 50.076 33.6844 51.2335 30.3062 51.7702C28.6247 51.9751 26.9291 52.0409 25.2367 51.9672C23.5749 51.8927 21.9255 51.6452 20.3157 51.2288C18.6627 50.8432 17.0528 50.2935 15.5104 49.5879C9.21551 46.6065 4.36198 41.2732 2.00797 34.7506C-0.346037 28.228 -0.00962061 21.0452 2.94388 14.768C5.89429 8.5806 11.1811 3.79886 17.6571 1.46037" fill="#6CBE99"/>
                    </svg>
                    <h3>Réservation en autonomie</h3>
                    <akar-icon name="chevron-down" id="icon" stroke="3" color="#$black" size="20"> </akar-icon>
                </span>

                <div id="panel-1" class="accordion__content" role="tabpanel" aria-hidden="true" aria-labelledby="tab1" data-binding="expand-accordion-container">
                    <div class="accordion__content-inner">
                        <p>Simplifiez vous la vie, utilisez gratuitement Tcheen pour gérer votre événement<p>
                        <ul>
                            <li>Accès à l’ensemble du catalogue de prestataires</li>
                            <li>Pré-devis instantané</li>
                            <li>Gestion des demandes</li>
                            <li>Espace de conversation avec le prestataire</li>
                            <li>Automatisation des relances</li>
                            <li>Gestion des paiements et de la facturation</li>
                        </ul>
                    </div>
                </div>

            </article>

            <article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
                <span class="accordion__title" aria-controls="panel-2" role="tab" aria-selected="false" aria-expanded="false" data-binding="expand-accordion-trigger">
                    <svg width="58" height="51" viewBox="0 0 58 51" fill="none" xmlns="http://www.w3.org/2000/svg" loading="lazy">
                        <path d="M57.2099 11.3564L41.991 0.0864258L25.925 23.8209L10.7129 12.5509L0 28.3668L30.4311 50.9138L57.2099 11.3564Z" fill="#EFD857"/>
                    </svg>
                    <h3>Offre clé en main</h3>
                    <akar-icon name="chevron-down" id="icon" stroke="3" color="#$black" size="20"> </akar-icon>
                </span>

                <div id="panel-2" class="accordion__content" role="tabpanel" aria-hidden="true" aria-labelledby="tab1" data-binding="expand-accordion-container">
                    <div class="accordion__content-inner">
                        <p>Besoin d'aide ? Déléguez nous l'organisation de votre événement<p>
                        <ul>
                        <li>Pré-sélection des prestataires</li>
                            <li>Propositions de devis-sur-mesure</li>
                            <li>Gestion des détails logistiques et coordination</li>
                            <li>Remise d'un brief complet pour vous aiguiller le jour J</li>
                            <li>Facturation et paiements : 1 seul interlocuteur</li>
                            <li>Respect des enjeux RSE : du zéro déchet aux produits locaux, tout est passé au peigne fin !</li>
                        </ul>
                    </div>
                </div>

            </article>

        </div>

        <div class="devis">
            <a href="" class="r-kit-btn">Confiez-nous votre recherche</a>
        </div>
    </div>

   
</section>


<script>
   var accordion = $('body').find('[data-behavior="accordion"]');
    var expandedClass = 'is-expanded';

    $.each(accordion, function () { // loop through all accordions on the page

    var accordionItems = $(this).find('[data-binding="expand-accordion-item"]');

    $.each(accordionItems, function () { // loop through all accordion items of each accordion
        var $this = $(this);
        var triggerBtn = $this.find('[data-binding="expand-accordion-trigger"]');
        
        var setHeight = function (x) {
        // set height of inner content for smooth animation
        var innerContent = x.find('.accordion__content-inner')[0],
            maxHeight = $(innerContent).outerHeight(),
            content = x.find('.accordion__content')[0];

        if (!content.style.height || content.style.height === '0px') {
            $(content).css('height', maxHeight);
        } else {
            $(content).css('height', '0px');
        }
        };
        
        var toggleClasses = function (event) {
        var clickedItem = event.currentTarget;
        var currentItem = $(clickedItem).parent();
        var clickedContent = $(currentItem).find('.accordion__content')
        $(currentItem).toggleClass(expandedClass);
        setHeight(currentItem);
        
        if ($(currentItem).hasClass('is-expanded')) {
            $(clickedItem).attr('aria-selected', 'true');
            $(clickedItem).attr('aria-expanded', 'true');
            $(clickedContent).attr('aria-hidden', 'false');

        } else {
            $(clickedItem).attr('aria-selected', 'false');
            $(clickedItem).attr('aria-expanded', 'false');
            $(clickedContent).attr('aria-hidden', 'true');
        }
        }
        
        triggerBtn.on('click', event, function (e) {
            e.preventDefault();
            toggleClasses(event);
        });

        // open tabs if the spacebar or enter button is clicked whilst they are in focus
        $(triggerBtn).on('keydown', event, function (e) {
            if (e.keyCode === 13 || e.keyCode === 32) {
                e.preventDefault();
                toggleClasses(event);
            }
        });
    });

    });


</script>