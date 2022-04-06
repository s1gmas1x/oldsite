// JavaScript Document
function validateLogin(form) {
  var user = document.forms["login"]["user"].value;
  var pass = document.forms["login"]["pass"].value;
var msg = document.getElementById('msg')

  if (user == "") {
    msg.innerHTML = "Enter a username";
    return false;
  } else if (pass == "") {
    msg.innerHTML = "Enter a password";
    return false;
  } else return true
}
