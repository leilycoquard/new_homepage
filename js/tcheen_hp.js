$(document).ready(function(){
    
    (() => { //SECTION 2 : four cards modifying img on hover
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
    })();

    (() => { //SECTION 4 : 2 offres qui se déroulent
        
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
        
        triggerBtn.on('click',function (e) {
            e.preventDefault();
            toggleClasses(e);
        });

        // open tabs if the spacebar or enter button is clicked whilst they are in focus
        $(triggerBtn).on('keydown', function (e) {
            if (e.keyCode === 13 || e.keyCode === 32) {
                e.preventDefault();
                toggleClasses(e);
            }
        });
    });

});

    })();

    (() => { //SECTION 5 : carousel for four suggestions
        $(".carousel_pepites").owlCarousel( {
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
            1000: {
                 items: 4,
                 autoplay: false,
                 loop: false,
            }
            }
       });

    $('.play').on('click',function(){
         owl.trigger('play.owl.autoplay',[3000])
        })
        $('.stop').on('click',function(){
        owl.trigger('stop.owl.autoplay')
        })

    })();

    
    
});


