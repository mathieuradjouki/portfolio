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

// Logo

// Open the logo when the mouse on mouseover
document.getElementById("logo-header-closed").addEventListener("mouseover", function(){
  document.getElementById("logo-header-closed").style.display = "none";
  document.getElementById("logo-header-open").style.display = "block";
})

// Close the logo on mouseout
document.getElementById("logo-header-open").addEventListener("mouseout", function(){
  document.getElementById("logo-header-open").style.display = "none";
  document.getElementById("logo-header-closed").style.display = "block";
})
