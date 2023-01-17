<header>
    <nav class="vertical space-between header-container">

        <div class="left">
            
            <div tabindex="0">
                <div class="burger-cont clickableNav">
                    <akar-icon name="three-line-horizontal" id="icon" stroke="1.5" color="$black" size="50"> </akar-icon>
                    <div class="deroulant" id="deroulant-1">
                        <a href="#" target="_blank">
                            <p>Calculer mon éco-score</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                class="ai ai-LinkOut">
                                <path d="M13.5 10.5L21 3" />
                                <path d="M16 3h5v5" />
                                <path d="M21 14v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5" />
                            </svg>
                        </a>
                        <a href="#">
                            <p>Offrir une carte cadeau</p>
                        </a>
                        <a href="#">
                            <p>Blog</p>
                        </a>
                        <a href="#" target="_blank">
                            <p>Presse</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                class="ai ai-LinkOut">
                                <path d="M13.5 10.5L21 3" />
                                <path d="M16 3h5v5" />
                                <path d="M21 14v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5" />
                            </svg>
                        </a>
                        <a href="#">
                            <p>Contact</p>
                        </a>
                        <a href="#">
                            <p>Aide</p>
                        </a>
                    </div>
                </div>
            </div>
        
            <div class="show">
                <img src="webp\tcheen.webp" alt="Tcheen" width="auto" height="50px" loading="lazy">
            </div>
    
            <div class="show" tabindex="0">
                <p style="text-transform:uppercase">Nos prestataires</p>
                <akar-icon name="chevron-down" id="icon" stroke="3" color="#$black" size="20"> </akar-icon>
            
            </div>
    
            <div class="show" tabindex="0">
                <p style="text-transform:uppercase">Nos engagements</p>
            </div>

            <div class="show" tabindex="0">
                <p style="text-transform:uppercase">Nos offres</p>
            </div>
            
        </div>

        <div class="hide">
    
            <svg width="52" height="49" viewBox="0 0 52 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M32.933 8.93029L18.627 28.6208L23.8618 32.4242L38.1678 12.7336L32.933 8.93029Z" fill="#EFD857"/>
                <path d="M41.3711 25.6295L22.8125 37.76L26.3527 43.1763L44.9114 31.0457L41.3711 25.6295Z" fill="#EFD857"/>
                <path d="M17.2142 12.2507L10.7773 11.5901L8.97678 29.1336L15.4136 29.7942L17.2142 12.2507Z" fill="#EFD857"/>
            </svg>

        </div>
        
        <div class="right">

            <div class="account clickableNav" tabIndex="0">

                <p class="show" style="text-transform:uppercase">Mon compte</p>
                <akar-icon name="person" class="hide" id="icon" stroke="1.5" color="#$black" size="30"> </akar-icon>
                <akar-icon name="chevron-down" id="icon" stroke="3" color="#$black" size="20"> </akar-icon>
                <div class="deroulant" id="deroulant-3">
                    <a href="#">
                        <p>Connexion</p>
                    </a>
                    <a href="#">
                        <p>Inscription</p>
                    </a>
                    <div></div>
                    <a href="#">
                        <p>Devenir prestataire</p>
                    </a>
                </div>
            </div>
            
            <div class="show">
                <button class="r-kit-btn">Déposer mon brief</button>
            </div>

        </div>


        </div>

</nav>
</header>

<script>
    // Nav menus apparaissent
const clickableNav = document.querySelectorAll(".clickableNav");
const navMenu = document.querySelectorAll(".deroulant");

for (let x = 0; x < clickableNav.length; x++) {
  clickableNav[x].addEventListener("click", () => {
    for (let y = 0; y < clickableNav.length; y++) {
      navMenu[y].classList.remove("visible");
    }
    if (x == 2) {
      navMenu[x].classList.add("visible");
      navMenu[x - 1].classList.add("visible");
    } else {
      navMenu[x].classList.add("visible");
    }
  });
}

// Nav menus disparaissent

const body = document.body;

body.addEventListener("click", (e) => {
  var target = e.path;
  let isOpen = false;
  //check le path du click
  for (let p = 0; p < target.length; p++) {
    // check si on clique sur clickableNav
    for (let n = 0; n < clickableNav.length; n++) {
      // check si on clique sur navMenu
      for (let m = 0; m < navMenu.length; m++) {
        if (target[p] == clickableNav[n] || target[p] == navMenu[m]) {
          isOpen = true;
        }
      }
    }
  }
  for (let m = 0; m < navMenu.length; m++) {
    if (!isOpen) {
      navMenu[m].classList.remove("visible");
      clickableNav[m].classList.remove("visible");
    }
  }
  
});

</script>