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

// Open the logo when the mouse on mouseover
// document.getElementById("logo-header-closed").addEventListener("mouseover", function(){
//   document.getElementById("logo-header-closed").style.display = "none";
//   document.getElementById("logo-header-open").style.display = "block";
// })
//
// // Close the logo on mouseout
// document.getElementById("logo-header-open").addEventListener("mouseout", function(){
//   document.getElementById("logo-header-open").style.display = "none";
//   document.getElementById("logo-header-closed").style.display = "block";
// })

var logo = document.getElementById("logo-header-closed")
// // Open the logo when the mouse on mouseover
// logo.addEventListener("mouseover", function(){
// // Change src document when mouseover
//   logo.src = "images/logo-hover.png";
// // Get back original src when mouseout
//     if (logo.src = "images/logo-hover.png") {
//       logo.addEventListener("mouseout", function(){
//         logo.src = "images/logo.png";
//     })
//   }
// })

var logo = document.getElementById("logo-header-closed")
// Open the logo when the mouse on mouseover
logo.addEventListener("mouseover", function(){
// Change src document when mouseover
logo.style.animation = "closed-logo 3s";
if (logo.style.opacity = "0") {
  logo.src = "images/logo-hover.png";
}
if (logo.src = "images/logo-hover.png") {
  logo.style.annimation = "open-logo 3s";
}

// Get back original src when mouseout
    if (logo.src = "images/logo-hover.png") {
      logo.addEventListener("mouseout", function(){
        logo.src = "images/logo.png";
    })
  }
})
