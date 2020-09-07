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
var logo = document.getElementById("logo-header-closed")
var logoHover = document.getElementById("logo-hover")
// Open the logo when the mouse on mouseover
  logo.addEventListener("mouseover", function(){
  logo.style.animation = "closed-logo 1s ";
})
// Close the logo on mouseout
  logoHover.addEventListener("mouseout", function(){
  logoHover.style.display = "none";
  logo.style.display = "block";
})
