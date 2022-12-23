<section class="offres margin-top-section" aria-labelledby="Deux offres Tcheen">

    <div class="container">

        <div class="accordion" role="tablist" aria-live="polite" data-behavior="accordion">

            <article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
                <span class="accordion__title" aria-controls="panel-1" role="tab" aria-selected="false" aria-expanded="false" data-binding="expand-accordion-trigger">
                <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.2216 1.45026C23.7185 -0.802294 30.8483 -0.418906 37.0621 2.51713C40.5421 4.18763 43.611 6.59493 46.053 9.56962C48.4949 12.5443 50.2505 16.0141 51.1961 19.7348C52.1418 23.4556 52.2546 27.3369 51.5266 31.1055C50.7986 34.8742 49.2475 38.4387 46.9824 41.5482C45.9533 42.9122 44.7962 44.1762 43.5268 45.3233C42.2657 46.4476 40.9105 47.4634 39.476 48.3598C36.5208 50.0791 33.2688 51.2369 29.8864 51.7738C28.2029 51.9787 26.5051 52.0445 24.8106 51.9707C23.1467 51.8963 21.4953 51.6488 19.8835 51.2321C18.2284 50.8465 16.6165 50.2966 15.0722 49.5908C8.76941 46.6086 3.90982 41.2738 1.55288 34.7495C-0.804071 28.2251 -0.467234 21.0404 2.48995 14.7615C5.44405 8.57243 10.7375 3.78939 17.2216 1.45026" fill="#6CBE99"/>
                </svg>

                    <div class="text">
                        <h3>Réservation en autonomie</h3>
                    </div>
                    <akar-icon name="chevron-down" id="icon" stroke="3" color="#$black" size="20"> </akar-icon>
                </span>

                <div id="panel-1" class="accordion__content" role="tabpanel" aria-hidden="true" aria-labelledby="tab1" data-binding="expand-accordion-container">
                    <div class="accordion__content-inner">
                        <p>Simplifiez vous la vie, utilisez gratuitement Tcheen pour gérer votre événement.<p>
                        <ul>
                            <li>Accès à l’ensemble du <span class="bold"> catalogue de prestataires</span></li>
                            <li>Pré-devis <span class="bold"> instantané</span></li>
                            <li><span class="bold">Gestion des demandes</span></li>
                            <li><span class="bold">Espace de conversation</span> avec le prestataire</li>
                            <li>Automatisation des relances</li>
                            <li>Gestion des paiements et de la facturation</li>
                        </ul>
                    </div>
                </div>

            </article>

            <article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
                <span class="accordion__title" aria-controls="panel-2" role="tab" aria-selected="false" aria-expanded="false" data-binding="expand-accordion-trigger">
                <svg width="52" height="47" viewBox="0 0 52 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M52 10.2437L38.167 0L23.5641 21.573L9.7373 11.3293L0 25.705L27.6598 46.1987L52 10.2437Z" fill="#EFD857"/>
                </svg>

                    <div class="text">
                        <h3>Offre clé en main</h3>
                    </div>
                    <akar-icon name="chevron-down" id="icon" stroke="3" color="#$black" size="20"> </akar-icon>
                </span>

                <div id="panel-2" class="accordion__content" role="tabpanel" aria-hidden="true" aria-labelledby="tab1" data-binding="expand-accordion-container">
                    <div class="accordion__content-inner">
                        <p>Besoin d'aide ? Déléguez-nous l'organisation de votre événement.<p>
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