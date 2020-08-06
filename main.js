/* Open when someone clicks on the span element */
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
//footer
//form contact
function validForm() {
  var champs = document.forms["contact"]["name"]["mail"]["object"]["message"].value;
  if (champs == "") {
    alert("Remplissez tous les champs!");
    return false;
  }
