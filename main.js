//footer
//form contact
function validForm() {
  var champs = document.forms["contact"]["name"]["email"]["object"]["message"].value;
  if (champs == "") {
    alert("remplissez tous les champs");
    return false;
  }
}
