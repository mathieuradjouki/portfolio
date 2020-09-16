/* Menu */

/* Burger menu */

/* Open when someone clicks on the span element */
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}
/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

// Logo header
var logo = document.getElementById("logo-top")
var logoHover = document.getElementById("logo-hover")
function startAnimation(){
  logo.style.animation = "closed-logo 1s";
  logoHover.classList.toggle("main-logo-hover-open");
}
//Open the logo when the mouse on mouseover
  logo.addEventListener("mouseover", startAnimation, {
    once:true,
  });
  // if (startAnimation = true) {
  //   logo.addEventListener(function(){
  //     logo.style.display = "none";
  //     logoHover.style.display = "block";
  //   })
  // }
  //footer
  //form contact
  function validForm() {
    var champs = document.forms["contact"]["name"]["mail"]["object"]["message"].value;
    if (champs == "") {
      alert("Remplissez tous les champs!");
      return false;
    }
}
