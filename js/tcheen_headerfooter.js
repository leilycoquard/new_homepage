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
  var target = e.composedPath();
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