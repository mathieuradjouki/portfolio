//footer
//form contact
function validForm() {
  var champs = document.forms["contact"]["name"]["mail"]["object"]["message"].value;
  if (champs == "") {
    alert("Remplissez tous les champs!");
    return false;
  }
}
